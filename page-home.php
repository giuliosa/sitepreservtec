<?php
  // Template Name: Home

  	$servico = get_page_by_title('servicos');

  get_header();
 ?>
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <!-- Inicio da section SERVIÇOS  -->

    <header>
      <h1>Soluções em tecnologia <br> para sua empresa</h1>
                <h3>Desde digitalização de documentos, até agência digital. A Preservtec tem de tudo para 
                    melhorar sua empresa e negócio</h3>
    </header>

    <section id="servicos" class="servicos" data-group='servico'>
        <h2>O que fazemos?</h2>
        <!-- <div class="container"> -->
            <ul class="container" >
              <li role="presentation" class="active servico" data-click='digitalizacao'>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icones/photo-camera.svg" alt="icone-camera">
                  <h3>Digitalização de documentos</h3>
              </li>
              <li role="presentation" class="servico" data-click='desenvolvimento'>
                <img src="<?php echo get_template_directory_uri(); ?>/img/icones/dev.svg" alt="icone-monitor">
                <h3>Agência Digital</h3>
              </li>
              <li role="presentation" class="servico" data-click='suporte'>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icones/monitor.svg" alt="icone-teclado">
                  <h3>Tecnologia e Suporte</h3>
              </li>
              
            </ul>

            <div class="container">
              <div class="details" id="digitalizacao" data-target="digitalizacao">
                <div class="servico-foto">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/web/ser_01.jpg" alt="">
                </div>

                <div class="servico-texto">
                  <h4>Digitalização de Documentos</h4>
                  <p>Parte importantissíma da gestão documental, a digitalização de documentos deixará seus
                    serviços modernos, e facilitará na velocidade de se achar documentos, na segurança dos mesmos
                  e no workflow de seus funcionários. </p>
                  <button type="button" name="button" onClick="location.href='/preservtec/servico/#digitalizacao'">Veja detalhes</button>
                </div>
              </div>


            </div>

            <div class="container">
              <div class="details" id="suporte" data-target="suporte">
                <div class="servico-foto">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/web/ser_02.jpg" alt="">
                </div>

                <div class="servico-texto">
                  <h4>Tecnologia e Suporte</h4>
                  <p>Suporte técnico para empresas, cartórios e etc. Instalação de redes,
                  manutenção de micros, suporte, instalação de softwares, limpeza de computadores, e etc.</p>
                  <button type="button" name="button" onClick="location.href='/preservtec/servico/#suporte'">Veja detalhes</button>
                </div>
              </div>


            </div>
            <div class="container">
              <div class="details" id="desenvolvimento" data-target="desenvolvimento">
                <div class="servico-foto">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/web/ser_03.jpg" alt="">
                </div>

                <div class="servico-texto">
                  <h4>Agência Digital</h4>
                  <p>Criação de sites institucionais, e-commerce, utilizando técninas de SEO 
                    para que você seja visto por seus clientes, criação de sistemas web, desktop e aplicativos, 
                    além de trabalho com marketing digital para aumentar seus clientes e melhorar sua visibilidade na web</p>
                  <button type="button" name="button" onClick="location.href='/preservtec/servico/#desenvolvimento'">Veja detalhes</button>
                </div>
              </div>


            </div>
            <div class="container">
              <div class="details" id="tercerizacao" data-target="monitoramento">
                <div class="servico-foto">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/web/ser_04.jpg" alt="">
                </div>

                <div class="servico-texto">
                  <h4>Monitoramento Eletrônico</h4>
                  <p>Monitoramento é observar e registrar regularmente as atividades de pessoas ou um ambiente, também pode ser considerado checagem de um avanço de atividades, ou seja, uma observação ordenada com propósitos. Já o monitoramento CFTV (circuito fechado de TV), é um sistema de vigilância avançada que permite ver, gravar e reproduzir as imagens feitas pelas câmeras direto em seu computador.</p>
                  <button type="button" name="button" onClick="location.href='/preservtec/servico/#monitoramento'">Veja detalhes</button>
                </div>
              </div>


            </div>
        <!-- </div> -->



    </section>

    <!-- section SOBRE  -->

    <!-- <section class="sobre">
        <h2>Sobre</h2>
        <div class="container">
            <div class="col-1">
                <img src="<?php the_field('imagem_sobre'); ?>" alt="<?php the_field('informacao_imagem'); ?>">
            </div>
            <div class="col-2">
                <?php the_field('texto_sobre'); ?>
                <button type="button" onClick="location.href='/preservtec/sobre'" name="button">Conheça mais</button>
            </div>
        </div>
    </section> -->

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
