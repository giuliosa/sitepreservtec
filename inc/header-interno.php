        <div class="imagem-interna">

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

                <?php if(is_page('servico')) {?>
                  <h2><a href="/preservtec/home">Home</a> | Serviço </h2>
                <?php }else if(is_page('sobre')){ ?>
                    <h2><a href="/preservtec/home">Home</a> | Sobre </h2>
                <?php }else if(is_page('portfolio')){ ?>
                    <h2><a href="/preservtec/home">Home</a> | Portfólio </h2>
                <?php }else if(is_page('contato')){ ?>
                    <h2><a href="/preservtec/home">Home</a> | Contato </h2>
                <?php }else if(is_singular('post')){ ?>
                    <h2><a href="/preservtec/home">Home</a> | <a href="/preservtec/blog">Blog</a> | <?php the_title(); ?> </h2>
                <?php }else if(is_single()){ ?>
                    <h2><a href="/preservtec/home">Home</a> | <a href="/preservtec/portfolio">Portfólio</a> | <?php the_title(); ?> </h2>
                <?php } else {?>
                    <h2><a href="/preservtec/home">Home</a> | Blog </h2>
                <?php } ?>
            </div>

        </div>
