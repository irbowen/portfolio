{extends file="base.tpl"}
{block name=title} Hire me brah {/block}
{block name=body}
    <div id="page-wrapper">
         <!-- Banner -->
         <section id="banner">
           <div class="content">
             <header>
               <h2>Why?</h2>
               <p> I build software<br />
               And you're going to pay me for it</p>
             </header>
             <span class="image"><img src="{$image_dir}/isaac_.jpg" alt="" /></span>
           </div>
           <a href="#one" class="goto-next scrolly">Next</a>
         </section>

         <!-- One -->
         <section id="one" class="spotlight style1 bottom">
           <span class="image fit main"><img src="images/inode.png" alt="" /></span>
           <div class="content">
             <div class="container">
               <div class="row">
                 <div class="4u 12u$(medium)">
                   <header>
                     <h2>Teaching</h2>
                     <p>EECS 485: Web Databases and Information Systems</p>
                   </header>
                 </div>
                 <div class="4u 4u$(medium)">
                   <p> I was a Graduate Student Instructor for EECS 485. The course is a senior-level undergraduate / introductory graduate level study of web systems.</p>
                 </div>
                 <div class="4u$ 12u$(medium)">
                   <p>I did a lot while I taught this class - writing a new project, maintaining the autograder, holding regular office hours, and teaching discussion.</p>
                   <ul class="actions">
                     <li><a href="/eecs485" class="button">Learn More</a></li>
                   </ul>
                 </div>
               </div>
             </div>
           </div>
           <a href="#two" class="goto-next scrolly">Next</a>
         </section>

         <!-- Two -->
         <section id="two" class="spotlight style2 left">
           <span class="image fit main"><img src="images/lake.jpg" alt="" /></span>
           <div class="content">
             <header>
               <h2>Industry</h2>
               <p>I've worked a few jobs out in the real world, doing real things</p>
             </header>
             <p><h4>Capital One, Richmond</h4>
             Database validation - Java and SQL
             </p>
             <p><h4>Capital One, Chicago</h4>
             Streamlined reporting - Bash, Powershell, Javascript, Splunk, SAS
             </p>
             <p><h4>University of Michigan, Ann Arbor</h4>
             Broke a monolith into an API - PHP, SQL, Bash
             </p>
             <p><h4>Google</h4>
             Added features to Mesa - C++
             </p>
             <ul class="actions">
               <li><a href="industry.html" class="button">Learn More</a></li>
             </ul>
           </div>
           <a href="#three" class="goto-next scrolly">Next</a>
         </section>

         <section id="three" class="spotlight style3 right">
           <span class="image fit main bottom"><img src="images/umtri.png" alt="" /></span>
           <div class="content">
             <header>
               <h2>Education</h2>
             </header>
             <ul>
               <li> EECS 281 - Data Structures and Algorithms</li>
               <li> EECS 370 - Computer Organization</li>
               <li> EECS 388 - Computer Security</li>
               <li> EECS 478 - Logic Circuit Synthesis </li>
               <li> EECS 481 - Software Engineering</li>
               <li> EECS 482 - Operating Systems</li>
               <li> EECS 484 - Database Management Systems</li>
               <li> EECS 485 - Web Systems</li>
               <li> EECS 490 - Programming Languagues</li>
               <li> EECS 492 - Artifical Intelligence</li>
               <li> EECS 493 - User Interface</li>
               <li> EECS 498 - Information Retervial</li>
               <li> EECS 574 - Computational Complexity</li>
               <li> EECS 584 - Advanced Databases Management Systems</li>
               <li> EECS 498 - Distributed Systems</li>
               <li> EECS 549 - Information Retervial</li>
               <li> EECS 591 - Advanced Distributed Systems</li>
             </ul>
             <ul class="actions">
               <li><a href="#" class="button">Learn More</a></li>
             </ul>
           </div>
           <a href="#four" class="goto-next scrolly">Next</a>
         </section>

         <!-- Four -->
         <section id="four" class="wrapper style1 special fade-up">
           <div class="container">
             <header class="major">
               <h2>Wanna see some of the cool things that I've built?</h2>
               <p>I've done quite a bit, between work, school, teaching, and my own projects</p>
             </header>
             <div class="box alt">
               <div class="row uniform">
                 <section class="4u 6u$(medium) 12u$(xsmall)">
                   <h3>The Beginning <br/> College Pro Painters </h3>
                   <p>
                   I climbed high ladders carrying heaving buckets of paint in the hot sun
                   I was good at it, and got promoted to job site manager
                   I was so good at it actually, that my boss ended up firing every one else on the team, and had me work more hours
                   </p>
                 </section>
                 <section class="4u 6u(medium) 12u$(xsmall)">
                   <h3>The Beginning <br/> Dininng Hall </h3>
                   <p>
                   Then, I started working at the dining hall.
                   I noticed pretty quicky that dishroom was my jam.
                   Again, I was really good at it, and I moved up to a student coordinator very quickly. I worked there too much, got in trouble for working overtime a few times.
                   I worked there for the better part of two years. Learned a lot. </p>
                 </section>
                 <section class="4u 6u(medium) 12u$(xsmall)">
                   <h3>The Beginning <br/> UMTRI </h3>
                   <p>
                   At UMTRI (University of Michigan Transportation Research Institute), 
                   I performed IT tasks for a research office of ~150 people.
                   This included setting up servers, debugging and installing software on workstations, managing the internal LAN, etc.
                   </p>
                 </section>
               </div>
             </div>
           </div>
         </section>

         <!-- Five -->
         <section id="five" class="wrapper style2 special fade">
           <div class="container">
             <header>
               <h2>Magna faucibus lorem diam</h2>
               <p>Ante metus praesent faucibus ante integer id accumsan eleifend</p>
             </header>
             <form method="post" action="#" class="container 50%">
               <div class="row uniform 50%">
                 <div class="8u 12u$(xsmall)"><input type="email" name="email" id="email" placeholder="Your Email Address" /></div>
                 <div class="4u$ 12u$(xsmall)"><input type="submit" value="Get Started" class="fit special" /></div>
               </div>
             </form>
           </div>
         </section>

    </div>
    </div>
{/block}
