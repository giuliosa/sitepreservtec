<?php
  // Template Name: Home

  	$servico = get_page_by_title('servicos');

  get_header();
 ?>
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <!-- Inicio da section SERVIÇOS  -->

    <header class="imagem-apresentacao">
      <h1>Soluções em tecnologia <br> para sua empresa</h1>
                <h3>Desde digitalização de documentos, até agência digital. A Preservtec tem de tudo para 
                    melhorar sua empresa e negócio</h3>
    </header>

    

    <!-- Seção Parceiros e convênios -->
    <section class="parceiros">
      <h2>Convênios e Parceiros</h2>
      <div class="container">
        <ul>
          <?php if(have_rows('lista_parceiros')): while(have_rows('lista_parceiros')) : the_row(); ?>
            <li class="partner">
              <a href="<?php the_sub_field('link_parceiro'); ?>" target="_blank">
                <img src="<?php the_sub_field('imagem_parceiro'); ?>" alt="Logo Anoreg">
              </a>
            </li>
          <?php endwhile; else : endif; ?>

        </ul>
        

      </div>
    </section>

    <?php endwhile; else: endif?>
<?php get_footer(); ?>
