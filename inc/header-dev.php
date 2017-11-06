<?php
	$desenvolvimento = get_page_by_title('desenvolvimento');
?>
        <div class="imagem-interna-dev">
            <div class="container">
                <h1>Quer conseguir mais pessoas interessadas no seu negócio ou serviço?<span>Desenvolvimento</span></h1>

                <div class="linha">

                  <div class="perguntas">
                    <a href="/preservtec/home"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-branco.png" alt="Logo Preservtec"></a>
                    <ul>
                      <li><i class="fa fa-check" aria-hidden="true"></i> Seus clientes te encontram com facilidade?</li>
                      <li><i class="fa fa-check" aria-hidden="true"></i> Seu site é moderno e atraente?</li>
                      <li><i class="fa fa-check" aria-hidden="true"></i> Ele tem uma taxa alta de acesso?</li>
                      <li><i class="fa fa-check" aria-hidden="true"></i> Pode se adaptar a qualquer dispositivo?</li>
                      <li>
                        Se a resposta de alguma dessas perguntas foi "não", preencha logo o formulário.
                      </li>
                    </ul>
                  </div>

                  <div class="formulario">
                    <p>Receba gratuitamente uma consultoria web</p>
                    <?php the_field('form_chimp', $dev); ?>

                  </div>

                </div>

                <div class="action">
                  <span>Ou saiba mais</span>
                  <a href="#sobre-dev" class="glyphicon glyphicon-chevron-down"></a>
                </div>


            </div>

        </div>
