<?php
  // Template Name: Formulário Feedback

  get_header();

?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <section class="contato-feedback">
            <div class="container">
                <div class="form-feedback">
                    <!-- <p>Coloque o link do seu site</p> -->
                    <?php the_field('form-feedback'); ?>

                </div>
            </div>

        </section>

    <?php endwhile; else: endif?>
<?php get_footer(); ?>
