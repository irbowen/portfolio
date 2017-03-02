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
          <div class="4u 12u$(medium)">

            <!-- Sidebar -->
            <section id="sidebar">
              <section>
                <h3>The articles I've written</h3>
                <p>
                <ul>
                  <li><a href="/writing/Vagrant.html">Vagrant + VirtualBox </a></li>
                </ul>
              </section>
            </section>

          </div>
          <div class="8u$ 12u$(medium) important(medium)">

            <section id="content">
                {$contents}
            </section>

          </div>
        </div>
      </div>
    </div>
  </div>

{/block}

