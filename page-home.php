<?php
  // Template Name: Home

  	$servico = get_page_by_title('servicos');

  get_header();
 ?>
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <!-- Inicio da section SERVIÇOS  -->

    <header class="imagem-apresentacao">
      <h1>Soluções em tecnologia <br> para sua empresa</h1>
      <p>
        Desde digitalização de documentos, até agência digital. <br> A Preservtec tem de tudo para 
                    melhorar sua empresa e negócio
      </p>

      <div class="linha">
        <div class="col-3">
          <img src="<?php echo get_template_directory_uri() ?>/img/icones/home-photo-camera.svg" alt="icone-camera">
          <h3>Digitalização de Documentos</h3>
          <p>Deixe seus serviços modernos, e facilite na velocidade ao achar seus documentos</p>
          <button onClick="location.href='preservtec/digitalizacao'">Veja Mais</button>
        </div>
        <div class="col-3">
          <img src="<?php echo get_template_directory_uri() ?>/img/icones/home-monitor.svg" alt="">
          <h3>Marketing Digital</h3>
          <p>Seja facilmente encontrado pelos seus clientes na web com estratégias de Marketing digital</p>
          <button onClick="location.href='preservtec/marketing'">Veja Mais</button>
        </div>
        <div class="col-3">
          <img src="<?php echo get_template_directory_uri() ?>/img/icones/home-dev.svg" alt="">
          <h3>Desenvolvimento</h3>
          <p>Desenvolva aplicativos, sistemas e sites para melhorar seu workflow</p>
          <button onClick="location.href='preservtec/desenvolvimento'">Veja Mais</button>
        </div>
      </div>
    </header>

    <section class="depoimentos">

      <h2>Depoimentos</h2>
      <p>Nossos Casos de Sucesso</p>

      

      <div class="linha owl-carousel">

        <?php if (have_rows('comentarios_clientes')) : while (have_rows('comentarios_clientes')) : the_row(); ?>
          <div class="depoimento item">
            <div class="texto-depoimento">
              <p><?php the_sub_field('quote_mensagem'); ?> </p>
            </div>
            <div class="autor-depoimento">
              <img src="<?php the_sub_field('quote_imagem'); ?>" alt="">
              <h5><?php the_sub_field('quote_cliente'); ?></h5>
            </div>
          </div>       
            
         
        <?php endwhile; else : endif; ?>

      </div>
    </section>

    

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
