<?php
  // Template Name: Portfolio

  get_header();
 ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="trabalhos">
        <h2>Nossos trabalhos</h2>

        <?php
        	$args = array (
        		'post_type' => 'portfolio',
        		'order'   => 'ASC'
        	);
        	$the_query = new WP_Query ( $args );
        ?>

          <div class="container">
            <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              <div class="trabalho">
                  <a href="<?php the_permalink();?>"><img src="<?php the_field('imagem_principal');?>" alt="imagem de um trabalho"></a>
                  <h3><?php the_title(); ?></h3>
              </div>
            <?php endwhile; else: endif; ?>
            <?php wp_reset_query(); wp_reset_postdata(); ?>
          </div>

    </section>
<?php endwhile; else: endif?>
    <?php get_footer(); ?>
