{extends file="../base.tpl"}
{block name=title} Isaac's Personal Site {/block}
{block name=body}
    <div id="page-wrapper">

         <!-- Banner -->
         <section id="banner">
           <div class="content">
             <header>
               <h2> Suh dude</h2>
               <p> I build software </p>
             </header>
             <span class="image"><img src="{$image_dir}/isaac_.jpg" alt="" /></span>
           </div>
           <a href="#one" class="goto-next scrolly">Next</a>
         </section>

        {include file="index/teaching.tpl"}
        {include file="index/industry.tpl"}
        {include file="index/education.tpl"}
        {include file="index/more_info.tpl"}

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
