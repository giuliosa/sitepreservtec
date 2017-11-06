<footer>
    <div class="container">
        <div class="col-4">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-branco.png" alt="Imagem Logo Preservtec">
        </div>

        <div class="col-4">
            <?php the_field('texto_footer', $sobre) ?>
        </div>

        <div class="col-4">
            <h4>CONTATO</h4>
            <ul>
                <li><?php the_field('telefone1', $contato) ?> / <?php the_field('telefone2', $contato) ?></li>
                <li><?php the_field('email', $contato) ?> </li>
                <li><?php the_field('endereco1', $contato) ?> </li>
        </div>
    </div>

    <div class="traco">

    </div>

    <div class="container">
        <div class="col-2">
            <p>Todos os direitos reservados &copy;</p>
            <p>Feito por: <a href="#" target="_blank">Giulio Sá</a> </p>
        </div>

        <div class="col-2">
            <ul>
                <li>Siga-nos</li>
                <a class="face" href="https://www.facebook.com/preservtec/" target="_blank">
                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/icones/facebook-logo.svg" alt="Icone Facebook"></li>
                </a>
                <a class="twitter" href="http://twitter.com/preservtec/" target="_blank">
                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/icones/twitter.svg" alt="Icone Twitter"></li>
                </a>
                <a class="linkedin" href="http://linkedin.com" target="_blank">
                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/icones/linkedin-logo.svg" alt="Icone Linkedin"></li>
                </a>
            </ul>
        </div>

    </div>

</footer>
