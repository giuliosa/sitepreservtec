<?php
  // Template Name: Servico

  get_header();
 ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <!-- Inicio da section SERVIÇOS  -->

    <section class="servicos-interno">
        <h2>O que fazemos?</h2>
        <div class="container">
          <?php if(have_rows('servicos')): while(have_rows('servicos')) : the_row(); ?>
            <div class="servico-detalhado" id="<?php the_sub_field('id_servico'); ?>">
                <div class="servico-head">
                  <img src="<?php the_sub_field('imagem_servico1'); ?>" alt="<?php the_sub_field('texto_alternativo_servico1'); ?>">
                </div>
                <div class="servico-body">
                  <img src="<?php the_sub_field('imagem_servico2'); ?>" alt="<?php the_sub_field('texto_alternativo_servico2'); ?>">
                  <h3><?php the_sub_field('nome_servico'); ?></h3>
                  <?php the_sub_field('texto_servico'); ?>
                </div>
            </div>
          <?php endwhile; else : endif; ?>
        </div>
        <button type="button" name="button" onClick="location.href='/preservtec/portfolio'">Veja nosso portifólio</button>
    </section>

    <?php include(TEMPLATEPATH . '/inc/resultados-include.php');?>

    <?php include(TEMPLATEPATH . '/inc/comentarios-include.php');?>

    <?php endwhile; else: endif?>
<?php get_footer(); ?>
