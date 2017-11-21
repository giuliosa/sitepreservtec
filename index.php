<?php get_header(); ?>
    <section class="blog">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();

          //Pegando o ID e url do autor
          $author_ID = get_the_author_meta('ID');
          $author_url = get_the_author_meta('url');
         ?>
        <h2><?php the_title(); ?></h2>
        <div class="container">
          <div class="postagens">

              <div class="postagem">
                <img src="<?php the_field('imagem_principal')?>" alt="POSTAGEM">
                <p><?php the_date(); ?>   <b>|</b>   Categoria: <?php the_category( '&bull;' ); ?></p>
                <div class="traco">
                </div>
                <?php the_content(); ?>

                <div class="traco">
                </div>

                <div class="autor">
                  <div class="imagem-autor">
                    <!-- <img src="img/web/team-1.jpg" alt=""> -->
                    <?php echo get_avatar($author_ID, 90, '', false, array('class' => 'img-circle')); ?>
                  </div>
                  <div class="info-autor">
                    <h4><?php the_author(); ?></h4>
                    <p><?php the_author_description(); ?></p>
                  </div>
                </div>

                <div class="comentarios-postagem">
                  <?php comments_template(); ?>
                </div>
              </div>
              <?php endwhile; else: ?>
                <h1>Página não encontrada.</h1>
              <?php endif; ?>
            </div>



            <aside>
                <!-- <div class="procurar">
                    <input type="search" name="" placeholder="Search">
                </div> -->

                <div class="categoria">
                    <h3>Categorias</h3>
                    <ul>
                    <?php
                      $args=array(
                        'orderby' => 'name',
                        'order' => 'ASC'
                      );
                      $categories = get_categories($args);
                      foreach($categories as $category) {
                        echo '<li><a href="' . get_category_link( $category->term_id ) .
                        '" title="' . sprintf( __( "Ver postagens em %s" ), $category->name ) .
                        '" ' . '> -' . $category->name.'</a> ';
                      }
                    ?>
                    </ul>
                </div>

            </aside>
        </div>
    </section>

    <?php get_footer(); ?>
