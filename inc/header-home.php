<?php
	$contato = get_page_by_title('contato');
?>
        <div class="barra-info">            

            <div class="container">
                <!-- <a href="/preservtec/home"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-branco.png" alt="Logo Preservtec"></a> -->

                <div class="left">
                    <span><?php the_field('telefone1', $contato) ?></span>
                    <span><?php the_field('email', $contato) ?></span>
                </div>


                <div class="right">

                    <ul>

                        <li>Siga-nos</li>                        
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
                    <a href="http://sistema.preservtec.com.br"><i data-toggle="tooltip" data-placement="bottom" title="Login" class="fa fa-user-circle-o" aria-hidden="true"></i></a> 
                    
                    
                </div>

                


            </div>

            

        </div>
