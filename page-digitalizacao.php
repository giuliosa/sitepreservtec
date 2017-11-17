<?php
    // Template Name: Digitalização

    $contato = get_page_by_title('contato');

    get_header('min');
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<section class="banner-digitalizacao">
    <h1>Digitalização de <br> documentos</h1>
    <p>Melhore o acesso de seus documentos e livros, <br> digitalizando eles e armazenando nas nuvens</p>
    <div class="buttons">
        <a href="#sobre" class="botao-cinza">Veja mais</a>
        <a href="#orcamento" class="botao">Peça um Orçamento</a>
    </div>
    <div id="sobre" class="fundo-azul">
        <h3>sobre</h3>
        <p>Um pouco sobre nosso trabalho</p>
        <p class="corpo-texto">
            A Preservtec LTDA tem 9 anos de experiência em digitalização de documentos em Recife.
            Contamos com tecnologia de ponta e diferenciada, usando a câmera digital planetária de alta resolução 
            para digitalização de documentos e principalmente digitalização de livros e scanner de precisão para 
            digitalizar documentos. Também contamos com profissionais capacitados para atender sua demanda de 
            forma personalizada, com rapidez e eficiência. Oferecemos soluções práticas e eficazes com a 
            qualidade e confiabilidade que somente nossa marca possui. Realizamos o trabalho “in-loco” para maior 
            segurança e sigilo das informações dos documentos da empresa. Já são mais de 80 cartórios 
            concluídos em Pernambuco e Rio Grande do Norte.
        </p>
    </div>
</section>

<?php include(TEMPLATEPATH . '/inc/resultados-include.php'); ?>

<?php include(TEMPLATEPATH . '/inc/news.php'); ?>

<section class="qualidades">
    <h3>Por que nos escolher?</h3>
    <p>O que nos diferencia do resto da concorrência</p>
    <div class="linha">
        <div class="col-3 parte-1">
            <img src="<?php echo get_template_directory_uri() ?>/img/icones/lock.svg" alt="">
            <h5>Segurança</h5>
            <p>
                Todo o trabalho é realizado "in loco" para maior segurança e sigilo das informações dos docuumentos.
                As imagens digitlizadas são entregues com o máximo sigilo possível, em HD's fornecidos pela própria empresa.
            </p>
        </div>
        <div class="col-3 parte-2">
            <img src="<?php echo get_template_directory_uri() ?>/img/icones/quality.svg" alt="">
            <h5>Qualidade</h5>
            <p>
                O produto final, é entregue com cuidado e qualidade, adequando-se as necessidade do cliente, podendo ser entregue
                um HS ou todo uma estrutura em tecnologia nas nuvens.
            </p>
        </div>
        <div class="col-3 parte-3">
            <img src="<?php echo get_template_directory_uri() ?>/img/icones/speed.svg" alt="">
            <h5>Velocidade</h5>
            <p>
                Por utilizarmos câmera digital planetária em conjunto com um software otimizado para serviço,
                realizamos o trabalho com velocidade, sem perder qualidade, conseguindo fazer em média um 
                livro de 300 folhas em 20 min.

            </p>
        </div>
    </div>
</section>

<section id="orcamento" class="contato-interno contato-geral">
      <h2>Contato</h2>

      <div class="container">
        <div class="col-2 contatos">
          <h3>Endereço:</h3>
          <p><?php the_field('endereco1', $contato); ?></p>
          <p><?php the_field('endereco2', $contato); ?></p>

          <h3>Telefones</h3>
          <p><?php the_field('telefone1', $contato); ?></p>
          <p><?php the_field('telefone2', $contato); ?></p>

          <h3>E-mail</h3>
          <p><?php the_field('email', $contato); ?></p>
        </div>

        <div class="col-2 formulario">
          
          <?php the_field('form', $contato); ?>
          
        </div>

      </div>
      
      <div id="map-canvas"/>
      
  </section>



<?php endwhile;
else : endif ?>
<?php 
get_footer();
?>