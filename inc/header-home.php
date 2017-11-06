<?php
	$contato = get_page_by_title('contato');
?>
        <div class="imagem-landing">

            <div class="menu-login">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icones/user.svg" alt="logo usuário">
            </div>

            <div class="menu-hamburguer">
                <div class="tracinho">
                </div>
                <div class="tracinho">
                </div>
                <div class="tracinho">
                </div>
            </div>

            <div class="cross">
                <span>X</span>
            </div>

            <div class="drop">
                <ul>
                    <a class="link" href="/preservtec/home">
                        <li>Home</li>
                    </a>
                    <a class="link" href="/preservtec/servicos">
                        <li>Serviços</li>
                    </a>
                    <a class="link" href="/preservtec/sobre">
                        <li>Sobre</li>
                    </a>
                    <a class="link" href="/preservtec/portfolio">
                        <li>Portifólio</li>
                    </a>
                    <a class="link" href="/preservtec/blog">
                        <li>Blog</li>
                    </a>
                    <a class="link" href="/preservtec/contato">
                        <li>Contato</li>
                    </a>
                </ul>
            </div>


            <div class="container">
                <a href="/preservtec/home"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo Preservtec"></a>

                <span><?php the_field('telefone1', $contato) ?></span>
                <span><?php the_field('email', $contato) ?></span>

                <h1>Soluções em tecnologia <br> para sua empresa</h1>
                <h3>Desde digitalização de documentos, até agência digital. A Preservtec tem de tudo para 
                    melhorar sua empresa e negócio</h3>

                <ul>
                    <a class="face" href="https://www.facebook.com/preservtec/" target="_blank">
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/icones/facebook-logo.svg" alt="Icone Facebook"></li>
                    </a>
                    <a class="twitter" href="https://twitter.com/preservtec" target="_blank">
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/icones/twitter.svg" alt="Icone Twitter"></li>
                    </a>
                    <a class="linkedin" href="https://linkedin.com" target="_blank">
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/icones/linkedin-logo.svg" alt="Icone Linkedin"></li>
                    </a>
                    <a class="instagram" href="https://instagram.com/preservtec" target="_blank">
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/icones/instagram-logo.svg" alt="Icone Linkedin"></li>
                    </a>
                </ul>

                <div class="action">
                	<a href="#servicos" class="glyphicon glyphicon-chevron-down"></a>
                </div>
								<!-- <?php the_field('form_lista'); ?> -->
            </div>

        </div>
