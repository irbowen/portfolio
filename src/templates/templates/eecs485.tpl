{extends file="base.tpl"}
{block name=title} Teaching EECS 485 {/block}
{block name=body}

    <div id="page-wrapper">
      <div id="main" class="wrapper style1">
        <div class="container">
          <header class="major">
            <h2>Teaching EECS 485</h2>
            <p>Web Databases and Information Systems</p>
          </header>
          <div class="row 150%">
            <div class="4u 12u$(medium)">
              <section id="sidebar">
                <section>
                  <h3>The offical course information</h3>
                  <p>
                    Design and use of databases in the Web context; data models, database design, replication issues, client/server systems,
                    information retrieval, web server design; substantial project involving the development of a databasebacked web site.
                  </p>
                </section>
              </section>
            </div>

            <div class="8u$ 12u$(medium) important(medium)">
              <section id="content">
                <section>
                  <h3>About 485</h3>
                  <p>
                    EECS 485 is a graduate level course in web systems. We start from the most basic aspects - looking at webservers, internet protocls, and basic HTTP.
                    We then move on to basic web applications, using Python Flask, to build a database backed photo sharing website.
                    The next step is for students to convert the project into a single page web application using a RESTful API.
                    We then move on to internet scale technologies, such as pagerank, HITS, and the "cloud".
                    The Google File System and MapReduce are an important part of the class, and students will build their own MapReduce engine for one project.
                    In another, they will use MapReduce to create an inverted index, allowing students to create a rudimentary seach engine.
                    Along the way, we cover Content Distribution Networks, DNS, replication, scaling, and touch on machine learning.
                  </p>
                </section>
                <section>
                  <h3>What did I do?</h3>
                  <p>I taught eecs 485 for three semesters. Here are a few of the things that I did: </p>
                  <ul>
                    <li> Creating and maintaing the autograder </li>
                    <li> Writing a new MapReduce project </li>
                    <li> Teaching weekly discussion sections </li>
                    <li> Holding regular office hours </li>
                  </ul>
                </section>
              </section>

            </div>
          </div>
        </div>
      </div>

{/block}
