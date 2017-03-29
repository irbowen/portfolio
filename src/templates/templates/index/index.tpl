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

    </div>
    </div>
{/block}
