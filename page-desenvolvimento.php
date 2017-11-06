<?php
  // Template Name: Desenvolvimento
  $contato = get_page_by_title('contato');
  get_header();

?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <section id="sobre-dev" class="sobre-dev">
    <div class="container">
      <h2>Agência Digital</h2>
      <p>
        Com o intuito de ajudar sua empresa a crescer e ter visibilidade no mercado, a Preservtec oferece a você serviços na área web. Prestamos serviços como o de criação e atualização de websites, criação e disparo de e-mail marketing, criação de microsites, criação de hotsites, ações de marketing digital, criação de landing pages, criação de banner advertising, otimização para motores de busca ou SEO, desenvolvimento de podcasts, web widgets, criação de aplicativos mobile e criação e edição de e-books. Todos esses serviços vão ajudar a sua empresa ou produto a serem mais conhecidos no meio web.
      </p>

      <p>
        Também oferecemos serviços que vão ajudar a automatizar processos dentro de sua empresa, com a criação de programas e softwares personalizados.
      </p>
    </div>
  </section>

  <section class="servicos-dev">
    <h2>Soluções web para sua empresa</h2>
    <div class="container">

      <div class="servico">
        <div class="head">
          <img src="<?php echo get_template_directory_uri(); ?>/img/icones/dev.svg" alt="icone de Desenvolvimento">
        </div>

        <div class="body">
          <h4>Desenvolvimento</h4>
          <p>Temos um time responsável pelo desenvolvimento de aplicações web, ecommerce e sites institucionais. Temos o cuidado de deixar os sites acessíveis e otmizados para todos os dispositivos.</p>
        </div>
      </div>

      <div class="servico">
        <div class="head">
          <img src="<?php echo get_template_directory_uri(); ?>/img/icones/seo.svg" alt="icone de SEO">
        </div>

        <div class="body">
          <h4>Consultoria de SEO</h4>
          <p>SEO é o Search Engine Optimization, ou seja, a otimização do mecanismo de busca dos sites, que ajudam a melhorar seu posicionamento em mecanismos de busca como o Google de maneira orgânica.</p>
        </div>
      </div>

      <div class="servico">
        <div class="head">
          <img src="<?php echo get_template_directory_uri(); ?>/img/icones/design.svg" alt="icone de design">
        </div>

        <div class="body">
          <h4>Design Gráfico</h4>
          <p>Todo o site e gráficos, são feitos de maneira personalizada. Além de fazermos também a criação de logos e qualquer material que necessite de um design moderno.</p>
        </div>
      </div>

      <div class="servico">
        <div class="head">
          <img src="<?php echo get_template_directory_uri(); ?>/img/icones/social.svg" alt="icone">
        </div>

        <div class="body">
          <h4>Mídias Sociais</h4>
          <p>Para muitos de seus clientes, a internet pode se resumir as redes sociais. Fazemos todo o planejamento do marketing em redes sociais como o Facebook.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="diferenciais">
    <h2>Desenvolvemos o que você precisar</h2>

      <div class="ecommerce">
        <div class="container">
          <div class="body">
            <h4>Tudo o que precisa para sua loja</h4>
            <p>Para se destacar no mercado atual, é necessário que sua loja esteja na web. O sistema de Ecommerce é basicamente isso, sua loja na internet. Esse sistema possibilita que você consiga vender produtos físicos ou digitais na web.
            </p>
            <p>Nós oferecemos a criação de lojas virtuais por meio do WooCommerce, plugin do WordPress. A plataforma é simples e eficaz, tem ganhado espaço entre as pessoas que querem ter um negócio na internet. Ela facilita em todos os aspectos na criação de lojas virtuais, desde controle de estoque, mostruário do produto, carrinho de compras, etc. O WooCommerce é usado em todo o mundo da Austrália para a Ásia, dos Estados Unidos para a África. Abra sua loja hoje e comece a vender.</p>
          </div>
          <img src="<?php echo get_template_directory_uri(); ?>/img/web/ecomerce.png" alt="icone">
        </div>
      </div>

      <div class="quebra"><span class="linha"></span></div>

      <div class="institucional">
        <div class="container">
          <img src="<?php echo get_template_directory_uri(); ?>/img/web/institucional.png" alt="icone">
          <div class="body">
            <h4>Para aumentar sua visibilidade</h4>
            <p>
              Site institucional ou empresarial é um site onde sua empresa terá a oportunidade de falar de si de uma forma direta com seus clientes e visitantes. Um site institucional também torna possível uma amostra de seu portfólio, assim como todos os trabalhos e clientes com quem sua empresa já teve a oportunidade de trabalhar. Também te dá a oportunidade de atingir novos mercados sem que se torne necessário abrir novos escritórios.
            </p>
            <p>
              Outra forma de aumentar sua visibilidade no mercado é através do desenvolvimento de páginas de captação de leads, conhecidas como “landing pages” (Páginas de aterrissagem). Essas páginas são um meio de apresentar um produto, evento ou serviço e tem como principal objetivo conseguir leads, ou seja, pessoas interessadas no seu trabalho, sejam novos clientes, novos investidores ou até novos fornecedores.
            </p>

          </div>
        </div>
      </div>
      <div class="quebra"><span class="linha"></span></div>

      <div class="aplicativo">
        <div class="container">
          <h4>Seu produto/serviço na palma da mão</h4>
          <div class="body">
            <p>
              Se o que você precisa é de um aplicativo, também podemos desenvolvê-lo para você.
              A cada dia cresce o número de pessoas com acesso à internet em seus smartphones e com
              isso cresce o número de aplicativos compartilhados e a variedade dos mesmos. O Brasil
              hoje possui uma população de 204 milhões de brasileiros. Desses, 78 milhões (quase 40%)
              acessam as redes sociais direto de seus smartphones. É comum encontrar operadoras de
              telefonia oferecendo planos com acesso ilimitado a redes sociais.
            </p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/web/mobile.png" alt="icone">
            <p>
              Os aplicativos desenvolvidos por nós da Preservtec, podem se adequar aos problemas que sua empresa precisa resolver,
              oferecendo suporte para desenvolvimento em android e IOs.
            </p>
          </div>

        </div>
      </div>
      <div class="quebra"><span class="linha"></span></div>


      <div class="sistema">
        <div class="container">
          <div class="body">
            <h4>Otimize suas tarefas</h4>
            <p>
              Existem muitas tarefas que podem ser automatizadas e otimizadas para facilitar a vida de sua empresa e de seus funcionários.
              Nós desenvolvemos soluções que vão ajudar sua empresa a melhorar suas tarefas e aumentar o rendimento e produção de seus empregados,
              automatizando esses processos de maneira inovadora e criativa, com sistema web ou desktop, possuindo uma boa usabilidade para facilitar
              ainda mais essas tarefas.
            </p>


          </div>
          <img src="<?php echo get_template_directory_uri(); ?>/img/web/sistemas.png" alt="icone">
        </div>
      </div>



  </section>

  <section class="contato-dev">
    <div class="container">
      <div class="form-dev">
        <p>Peça já seu orçamento</p>
        <?php the_field('form', $contato); ?>

      </div>
    </div>

  </section>








<?php endwhile; else: endif?>
<?php get_footer(); ?>
