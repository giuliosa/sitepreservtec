<?php
  // Template Name: Sobre

  get_header();
 ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="caracteristicas">
        <h2>Por que nos escolher?</h2>

        <div class="container">

            <div class="col-2">
              <?php if(have_rows('caracteristicas')): while(have_rows('caracteristicas')) : the_row(); ?>
                <div class="carac">
                  <div class="carac-left">
                    <img src="<?php the_sub_field('imagem_caracteristica');?>" alt="<?php the_sub_field('texto_alternativo_caracteristica');?>">
                  </div>
                  <div class="carac-right">
                    <h3><?php the_sub_field('nome_caracteristica');?></h3>
                    <p><?php the_sub_field('texto_caracteristica');?></p>
                  </div>
                </div>
              <?php endwhile; else : endif; ?>

            </div>

            <div class="col-2 imagem-sobre">
              <img src="<?php the_field('imagem_sobre');?>" alt="<?php the_field('texto_alternativo_sobre');?>">
            </div>
        </div>
    </section>

    <section class="mais-sobre">
      <div class="container">

        <div class="linha-tempo">
          <?php if(have_rows('evento')): while(have_rows('evento')) : the_row(); ?>
            <div class="evento">

              <div class="evento-left">
                  <span><?php the_sub_field('ano_evento');?></span>
              </div>

              <div class="evento-right">
                <h3><?php the_sub_field('nome_evento');?></h3>
                <p><?php the_sub_field('texto_evento');?></p>
              </div>

            </div>
          <?php endwhile; else : endif; ?>
        </div>

        <aside class="lateral">
          <div class="blockquote">
            <p> <?php the_field('citacao_lateral');?></p>
          </div>

          <h3>Áreas de atuação</h3>
          <ul>
            <?php the_field('areas_lateral');?>
          </ul>

          <button type="button" name="button" onClick="location.href='/preservtec/portfolio'">Veja nosso portifólio</button>
        </aside>
      </div>


    </section>

<?php endwhile; else: endif?>
    <?php get_footer(); ?>
