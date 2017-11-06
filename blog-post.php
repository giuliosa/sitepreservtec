<?php get_header(); ?>
    <section class="blog">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <div class="container">
          <div class="postagens">

              <div class="postagem">
                <img src="img/web/trab-1.jpg" alt="POSTAGEM">
                <p>10/03/2017   <b>|</b>   Categoria: Digitação</p>
                <div class="traco">
                </div>
                <?php the_content(); ?>

                <div class="traco">
                </div>

                <div class="autor">
                  <div class="imagem-autor">
                    <img src="img/web/team-1.jpg" alt="">
                  </div>
                  <div class="info-autor">
                    <h4>Matheus Almeida</h4>
                    <p>Autor de diversos livros, PhD em Gestão</p>
                  </div>
                </div>
              </div>
              <?php endwhile; else: ?>
                <h1>Página não encontrada.</h1>
              <?php endif; ?>
            </div>



            <aside>
                <div class="procurar">
                    <input type="search" name="" placeholder="Search">
                </div>

                <div class="categoria">
                    <h3>Categorias</h3>
                    <ul>
                        <li>-Digitação (2)</li>
                        <li>-Digitalização (5)</li>
                        <li>-Gerenciamento (1)</li>
                    </ul>
                </div>

            </aside>
        </div>
    </section>

    <?php get_footer(); ?>
