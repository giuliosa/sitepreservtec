<?php
    // Template Name: Marketing

    // $servico = get_page_by_title('servicos');

    $contato = get_page_by_title('contato');
    
    // Pega o template "header-min"
    get_header('min');

    //Loop do Wordpress;
    if (have_posts()) : while (have_posts()) : the_post();
?>

<section class="banner-marketing">
    <h1 class="marketing-titulo">
        Alavanque sua <br> empresa com 
        <br>marketing digital
    </h1>
    <p>Lorem Ipsum dolor sit amet.</p>
    <a href="" class="botao">Peça um orçamento</a>
</section>

<!-- Seção com os serviços -->

<section class="servicos-marketing">
    <div class="lista-servicos">
        <div class="servico-bloco">
            <div class="foto-servico">
                <img src="<?php echo get_template_directory_uri() ?>/img/web/landing-pages.png" alt="">
            </div>
            <div class="corpo-servico">
                <h5>Landing Pages</h5>
                <p>Percebemos, cada vez mais que a determinação clara de objetivos</p>
                <button>Compre Agora</button>
            </div>
        </div>
        <div class="servico-bloco">
            <div class="foto-servico">
                <img src="<?php echo get_template_directory_uri() ?>/img/web/seo-analytics.png" alt="">
            </div>
            <div class="corpo-servico">
                <h5>SEO & Analytics</h5>
                <p>Percebemos, cada vez mais que a determinação clara de objetivos</p>
                <button>Compre Agora</button>
            </div>
        </div>
        <div class="servico-bloco">
            <div class="foto-servico">
                <img src="<?php echo get_template_directory_uri() ?>/img/web/socialmedia.png" alt="">
            </div>
            <div class="corpo-servico">
                <h5>Mídias Sociais</h5>
                <p>Percebemos, cada vez mais que a determinação clara de objetivos</p>
                <button>Compre Agora</button>
            </div>
        </div>
    </div>
    <aside class="aside-servicos">
        <div class="foto-whatever">
            <img src="<?php echo get_template_directory_uri() ?>/img/web/preservtec-office.jpeg" alt="">
        </div>
        <div class="titulo-servico">
            <h5>Serviços</h5>
        </div>
    </aside>
</section>

<!-- Seção como funciona -->

<section class="como-funciona">
    <h3>Como Funciona?</h3>
    <p></p>
    <div class="passos" data-group="passos">
        <ul>
            <li data-click="contrate">
                <div class="head-lista">
                    <img src="<?php echo get_template_directory_uri() ?>/img/web/passo1.png" alt="icone Contrate">
                    <h6>Contrate</h6>
                </div>
                <p>
                    Caros amigos, a execução dos pontos do programa nos 
                    obriga à análise dos níveis de motivação departamental. 
                    Por outro lado, o aumento do diálogo entre os diferentes 
                    setores produtivos cumpre um papel essencial na formulação 
                    dos métodos utilizados na avaliação de resultados.
                </p>
            </li>
            <li data-click="reuniao">
                <div class="head-lista">
                    <img src="<?php echo get_template_directory_uri() ?>/img/web/passo2.png" alt="icone Reunião">
                    <h6>Reunião</h6>
                </div>
                <p>
                    Pelo jeito que as coisas estão fluindo, rapidamente tudo estará pronto ao meio-dia. Enquanto os
                    sinos tocarem, teremos esperança de um futuro onde tudo pode dar
                    certo para todos os que precisarem de auxílio para todo mundo viver de uma vida vivida,
                    sem arrependimentos de ter sido algo que você gostaria muito de fazer.
                </p>

            </li>
            <li data-click="analise">
                <div class="head-lista">
                    <img src="<?php echo get_template_directory_uri() ?>/img/web/passo3.png" alt="icone Análise">
                    <h6>Análise</h6>
                </div>
                <p>
                    Pelo jeito que as coisas estão fluindo, rapidamente tudo estará pronto ao meio-dia. Enquanto os
                    sinos tocarem, teremos esperança de um futuro onde tudo pode dar
                    certo para todos os que precisarem de auxílio para todo mundo viver de uma vida vivida,
                    sem arrependimentos de ter sido algo que você gostaria muito de fazer.
                </p>

            </li>
            <li data-click="criacao">
                <div class="head-lista">
                    <img src="<?php echo get_template_directory_uri() ?>/img/web/passo4.png" alt="icone Criação">
                    <h6>Criação</h6>
                </div>
                <p>
                    Pelo jeito que as coisas estão fluindo, rapidamente tudo estará pronto ao meio-dia. Enquanto os
                    sinos tocarem, teremos esperança de um futuro onde tudo pode dar
                    certo para todos os que precisarem de auxílio para todo mundo viver de uma vida vivida,
                    sem arrependimentos de ter sido algo que você gostaria muito de fazer.
                </p>

            </li>
            <li data-click="revisao">
                <div class="head-lista">
                    <img src="<?php echo get_template_directory_uri() ?>/img/web/passo5.png" alt="icone Revisão">
                    <h6>Revisão</h6>
                </div>
                <p>
                    Pelo jeito que as coisas estão fluindo, rapidamente tudo estará pronto ao meio-dia. Enquanto os
                    sinos tocarem, teremos esperança de um futuro onde tudo pode dar
                    certo para todos os que precisarem de auxílio para todo mundo viver de uma vida vivida,
                    sem arrependimentos de ter sido algo que você gostaria muito de fazer.
                </p>

            </li>
            <li data-click="aprovacao">
                    <div class="head-lista">
                        <img src="<?php echo get_template_directory_uri() ?>/img/web/passo6.png" alt="icone Aprovação">
                        <h6>Aprovação</h6>
                    </div>

                    <p>
                        Pelo jeito que as coisas estão fluindo, rapidamente tudo estará pronto ao meio-dia. Enquanto os
                        sinos tocarem, teremos esperança de um futuro onde tudo pode dar
                        certo para todos os que precisarem de auxílio para todo mundo viver de uma vida vivida,
                        sem arrependimentos de ter sido algo que você gostaria muito de fazer.
                    </p>
           
        </li>
            <li data-click="entrega">
                <div class="head-lista">
                    <img src="<?php echo get_template_directory_uri() ?>/img/web/passo7.png" alt="icone Entrega">
                    <h6>Entrega</h6>
                </div>
                <p>
                    Pelo jeito que as coisas estão fluindo, rapidamente tudo estará pronto ao meio-dia. Enquanto os
                    sinos tocarem, teremos esperança de um futuro onde tudo pode dar
                    certo para todos os que precisarem de auxílio para todo mundo viver de uma vida vivida,
                    sem arrependimentos de ter sido algo que você gostaria muito de fazer.
                </p>

            </li>
        </ul>

        <div class="passo-detalhe" id="contrate" data-target="contrate">
            <div class="foto-passo">
                <img src="<?php echo get_template_directory_uri() ?>/img/web/detalhe1.png" alt="Foto Contrate">
            </div>
            <div class="corpo-passo">
                <h5>Contrate</h5>
                <p> 
                    Caros amigos, a execução dos pontos do programa nos 
                    obriga à análise dos níveis de motivação departamental. 
                    Por outro lado, o aumento do diálogo entre os diferentes 
                    setores produtivos cumpre um papel essencial na formulação 
                    dos métodos utilizados na avaliação de resultados. 
                </p>
            </div>            
        </div>

        <div class="passo-detalhe" id="reuniao" data-target="reuniao">
            <div class="foto-passo">
                <img src="<?php echo get_template_directory_uri() ?>/img/web/detalhe2.png" alt="Foto Reunião">
            </div>
            <div class="corpo-passo">
                <h5>Reunião</h5>
                <p></p>
            </div>            
        </div>

        <div class="passo-detalhe" id="analise" data-target="analise">
            <div class="foto-passo">
                <img src="<?php echo get_template_directory_uri() ?>/img/web/detalhe3.png" alt="Foto Análise">
            </div>
            <div class="corpo-passo">
                <h5>Análise</h5>
                <p></p>
            </div>
        </div>

        <div class="passo-detalhe" id="criacao" data-target="criacao">
            <div class="foto-passo">
                <img src="<?php echo get_template_directory_uri() ?>/img/web/detalhe4.png" alt="Foto Criação">
            </div>
            <div class="corpo-passo">
                <h5>Criação</h5>
                <p></p>
            </div>
        </div>

        <div class="passo-detalhe" id="revisao" data-target="revisao">
            <div class="foto-passo">
                <img src="<?php echo get_template_directory_uri() ?>/img/web/detalhe5.png" alt="Foto Revisão">
            </div>
            <div class="corpo-passo">
                <h5>Revisão</h5>
                <p></p>
            </div>
        </div>

        <div class="passo-detalhe" id="aprovacao" data-target="aprovacao">
            <div class="foto-passo">
                <img src="<?php echo get_template_directory_uri() ?>/img/web/detalhe6.png" alt="Foto Aprovação">
            </div>
            <div class="corpo-passo">
                <h5>Aprovação</h5>
                <p></p>
            </div>
        </div>

        <div class="passo-detalhe" id="entrega" data-target="entrega">
            <div class="foto-passo">
                <img src="<?php echo get_template_directory_uri() ?>/img/web/detalhe7.png" alt="Foto Entrega">
            </div>
            <div class="corpo-passo">
                <h5>Entrega</h5>
                <p></p>
            </div>
        </div>
    </div>
</section>

<?php include(TEMPLATEPATH . '/inc/news.php'); ?>

<section class="portifolio-marketing">
    <h3>nossos trabalhos</h3>
    <p>Alguns de nossos mais recentes trabalhos</p>
    <div class="fotos-trabalhos">
        <img src="<?php echo get_template_directory_uri() ?>/img/web/post1.png" alt="">
        <img src="<?php echo get_template_directory_uri() ?>/img/web/post2.png" alt="">
        <img src="<?php echo get_template_directory_uri() ?>/img/web/post3.png" alt="">
        <img src="<?php echo get_template_directory_uri() ?>/img/web/post4.png" alt="">
        <img src="<?php echo get_template_directory_uri() ?>/img/web/post5.png" alt="">
        <img src="<?php echo get_template_directory_uri() ?>/img/web/post6.png" alt="">
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



<?php
    //Fim do loop do wordpress
    endwhile;
    else : endif;

    //Pega o template do footer
    get_footer(); 
?>
