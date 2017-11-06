<?php
// Template Name: Single Portifolios
get_header();
?>

    <section class="trabalhos-interno">
        <!-- <h2><?php the_title(); ?></h2> -->
        <div class="container">



          <div id="carousel-example-generic" class="carousel-trabalho carousel slide" data-ride="carousel">



            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="<?php  the_field('imagem_principal');?>" alt="...">
                <div class="carousel-caption">

                </div>
              </div>

                <?php if(have_rows('imagens')): while(have_rows('imagens')) : the_row(); ?>
                  <div class="item">
                    <img src="<?php  the_sub_field('imagem_secundaria');?>" alt="imagem de um trabalho">
                    <div class="carousel-caption">

                    </div>
                  </div>
                <?php endwhile; else : endif; ?>
            </div>


            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

            <div class="texto-trabalho">
              <ul>
                <li><h3><b>Cliente: </b><?php the_field('cliente'); ?></h3></li>
                <li><h3><b>Data: </b> <?php the_field('data'); ?></h3></li>
                <li><h3><b>Categoria: </b> <?php the_field('categoria'); ?></h3></li>
              </ul>

                <div class="textow"><?php the_field('texto'); ?></div>
            </div>

        </div>
    </section>

    <?php get_footer(); ?>
