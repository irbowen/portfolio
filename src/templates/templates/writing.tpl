{extends file="base.tpl"}
{block name=title} Writing {/block}
{block name=body}
    <!-- Main -->
    <div id="main" class="wrapper style1">
      <div class="container">
        <header class="major">
          <h2>{$post_name}</h2>
        </header>
        <div class="row 150%">
          <div class="3u 12u$(medium)">

            <!-- Sidebar -->
            <section id="sidebar">
              <section>
                <h3>The articles I've written</h3>
                <p>
                  {foreach $article_list as $a}
                  <ul>
                    <li><a href="/{$a['link']}">{$a['title']}</a></li>
                  </ul>
                  {/foreach}
              </section>
            </section>

          </div>
          <div class="9u$ 12u$(medium) important(medium)">

            <section id="content">
                {$contents}
            </section>

          </div>
        </div>
      </div>
    </div>
  </div>

{/block}

