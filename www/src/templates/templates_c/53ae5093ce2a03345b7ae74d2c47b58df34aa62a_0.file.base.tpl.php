<?php
/* Smarty version 3.1.31, created on 2017-02-26 21:25:45
  from "/var/www/html/portfolio/www/src/templates/templates/base.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58b38e291c1e52_65712627',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53ae5093ce2a03345b7ae74d2c47b58df34aa62a' => 
    array (
      0 => '/var/www/html/portfolio/www/src/templates/templates/base.tpl',
      1 => 1488161586,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_58b38e291c1e52_65712627 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
  <head>
      <title> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 </title>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link rel="stylesheet" href="assets/css/main.css" />
  </head>
  <body class="landing">
    <div id="page-wrapper">

    <?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


         <!-- Banner -->
         <section id="banner">
           <div class="content">
             <header>
               <h2>Why should you hire me?</h2>
               <p> I build software<br />
               The best software <br/>
               Big-league software. <br/>
               Huge systems. <br/>
               And you're going to pay me for it</p>
             </header>
             <span class="image"><img src="images/isaac_.jpg" alt="" /></span>
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
                     <li><a href="eecs485.html" class="button">Learn More</a></li>
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

         <!-- Three -->
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
                   <h3>The beginning <br/> College Pro Painters</h3>
                   <p>
                   I climbed high ladders carrying heaving buckets of paint in the hot sun
                   I was good at it, and got promoted to job site manager
                   I was so good at it actually, that my boss ended up firing every one else on the team, and had me work more hours
                   </p>
                 </section>
                 <section class="4u 6u(medium) 12u$(xsmall)">
                   <h3>The beginning <br/> Dininng Hall</h3>
                   <p>
                   Then, I started working at the dining hall.
                   I noticed pretty quicky that dishroom was my jam.
                   Again, I was really good at it, and I moved up to a student coordinator</p>
                 </section>
                 <section class="4u 6u(medium) 12u$(xsmall)">
                   <h3>The beginning <br/>UMTRI </h3>
                   <p>
                   At UMTRI (University of Michigan Transportation Research Institute), 
                   I performed IT tasks for a research office of ~150 people.
                   This included setting up servers, debugging and installing software on workstations, managing the internal LAN, etc.
                   </p>
                 </section>
                 <section class="4u 6u$(medium) 12u$(xsmall)">
                   <h3>Next steps <br/>College of Engineering </h3>
                   <p>Web devolper</p>
                 </section>
                 <section class="4u 6u(medium) 12u$(xsmall)">
                   <h3>Next steps <br/>Google</h3>
                   <p>Cool things</p>
                 </section>
                 <section class="4u$ 6u$(medium) 12u$(xsmall)">
                   <h3>Next steps <br/>College of Engineering </h3>
                   <p>Web devolper</p>
                 </section>
               </div>
             </div>
             <footer class="major">
               <ul class="actions">
                 <li><a href="#" class="button">Magna sed feugiat</a></li>
               </ul>
             </footer>
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

         <!-- Footer -->
         <footer id="footer">
           <ul class="icons">
             <li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
             <li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
             <li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
             <li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
             <li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
             <li><a href="#" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
           </ul>
           <ul class="copyright">
             <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
           </ul>
         </footer>

    </div>

    <!-- Scripts -->
    <?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/skel.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
    <!--[if lte IE 8]><?php echo '<script'; ?>
 src="assets/js/ie/respond.min.js"><?php echo '</script'; ?>
><![endif]-->
    <?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>

  </body>
</html>
<?php }
}
