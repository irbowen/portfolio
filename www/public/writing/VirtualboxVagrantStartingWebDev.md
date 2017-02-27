## Using Virtualbox and Vagrant to get started with WebDev

Three semesters ago, I was offered a position as a student instructor for EECS 485, U of M’s course in web systems. I had taken the course previously, and enjoyed it, and so was excited about the opportunity.

The class covers quite a bit related to the web, but starts off by teaching students how to make database backed, interactive websites. However, before we can start teaching you all of the cool things, we first have to get everything installed and running on student laptops. While this may sound like a simple task, getting 385 students a semester to all have the same enviornment is no simple task.

The class had grown very quickly over the past few semesters - previously, staff were available to help each student get MySQL, Python, and all the pip packages installed on whatever system the students happened to be running.

As the course grew, this become infeasable. With only 9 staff to handle 385 students, we had to find a better way.  Enter Virtualbox and Vagrant.

Virtualbox is a great, open source piece of software that allows you to run an entire operating system like it was any other program on your computer. Regardless of what OS you are running, you can run Win7, or Ubuntu Linux 16.04, instead the Virtualbox program. This is a great first step. Now, instead of supporting 1500 different OS and versions, we can tell everyone to install Virtualbox and then to install Ubuntu 16.04.

However, this still involves a large amount of manual work by students, which is very error prone. To get started, students have to download and install Virtualbox, and then download the Ubuntu 16.04 ISO, then install the OS correctly. Once the OS is setup and installed, the student still has to install all the required software on the virtual machine, and configure the virtual machine in Virtualbox correctly.  Enter Vagrant

Vagrant is a tool that allows you to script the setup of virtual machines. This means that we can hand out some small config files (just plain text files), and students can use these to build the correct Virtual Machine on the students laptop.  Let's take a look at the files.

The first is the `Vagrantfile`

```bash
Vagrant.configure(2) do |config|
  # There is a directory of vagrant boxes you can choose from here:
  # https://atlas.hashicorp.com/boxes/search
  config.vm.box = "bento/ubuntu-16.04"

  # Forward the 3000 port from the VM to your local machine so you can use
  # your local browser while running the dev environment on your VM
  config.vm.network "forwarded_port", guest: 3000, host: 3000

  # Name your virtual machine
  config.vm.provider "virtualbox" do |v|
    v.name = "eecs485_dev_box"
  end

  # Run vagrant.sh the first time a VM is set up
  # If you halt the machine and come back to it, this won't run again but if you
  # destroy the VM and come back to it, this will run again
  config.vm.provision :shell, path: "vagrant.sh"
end
```

And then, we have the `vagrant.sh` file. This only runs the first time we type `vagrant up`.


```bash
#!/usr/bin/env bash

# Update apt first (system package installer)
sudo apt update

# Install the only editors you'll ever need.
# Protip: vim is better than emacs
sudo apt install vim emacs --yes

# Version control!
sudo apt install git --yes

# Install python3, pip (python's package manager), and virutal environment for python
sudo apt install python3 python3-pip --yes
pip3 install virtualenv

# By default, while installing MySQL, there will be a blocking prompt asking you to enter the password
# Next two lines set the default password of root so there is no prompt during installation
sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password password root'
sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password_again password root'

# Install MySQL server with the default argument --yes
sudo apt install mysql-server --yes
sudo apt install build-essential python-dev libmysqlclient-dev --yes
```


If you download these two files, and make a new directory
```bash
~/WebDev/
    Vagrantfile
    vagrant.sh
```

Now, type `vagrant up` at the command line. This will run the first time setup, which will download the setup files for the ubunutu virtual machine, install the operating system in virtual box, setup the configuration in the `Vagrantfile`, and then run setup instructions in the `vagrant.sh` file. Now, if you open up Virtualbox, you should see the machine available in the list of machines.

Let's look at some of the available commands for Vagrant.
* `vagrant up` - Turns on the virtual machine. The first time you run this, it 'provisions' (sets up) the machine
* `vagrant halt` - Turns the machine off. You should do this is you're done using the machine, to save system resources.
* `vagrant destroy` - Get rid of the machine! Use with caution!
