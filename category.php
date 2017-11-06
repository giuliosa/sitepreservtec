<?php
  // Template Name: Blog

  get_header();
 ?>

  <section class="blog">
      <h2>Blog</h2>
      <div class="container">
          <!-- <div class="manutencao">
        <img src="img/icones/settings.svg" alt="Imagem sobre construção">
        <h3>Essa página está em construção</h3>
      </div> -->
          <div class="postagens">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <div class="postagem">
                <img src="<?php the_field('imagem_principal');?>" alt="POSTAGEM">
                <h3><?php the_title(); ?></h3>
                <p><?php the_date(); ?></p>
                <p><?php the_excerpt(); ?></p>
                <button type="button" name="button" onClick="location.href='<?php the_permalink();?>'">Veja mais</button>
              </div>

            <?php endwhile; ?>
            <?php else: endif; ?>
          </div>


          <aside>
              <div class="procurar">
                  <input type="search" name="" placeholder="Search">
              </div>

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
