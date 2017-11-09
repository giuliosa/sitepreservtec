<?php


$url = "http://". $_SERVER['HTTP_HOST'];
$url.= "/";
$url.= $_SERVER['REQUEST_URI'];
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title><?php the_field('titulo'); ?></title>
    <meta name="description" content="<?php the_field('descricao'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#415f9d ">
    <meta name="keywords" content="<?php the_field('palavras_chave'); ?>"/>
    <meta name="robots" content="index, follow">
    <meta name="author" content="Giulio Sá">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Preservtec">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#415f9d">
    <meta name="apple-mobile-web-app-title" content="Preservtec">

    <!-- para o Twitter Card -->
    <meta name="twitter:card" value="summary">
    <meta name="twitter:url" value="<?php echo $url; ?>">
    <meta name="twitter:site" content="@preservtec">
    <meta name="twitter:title" content="<?php the_field('titulo'); ?>">
    <meta name="twitter:description" content="<?php the_field('descricao'); ?>">
    <meta name="twitter:creator" content="@giuliopires_sa">
    <!--  imagens para o Twitter Summary Card precisam ter pelo menos 200×200 px  -->
    <meta name="twitter:image" content="<?php the_field('imagem'); ?>">

    <!--  para o sistema Open Graph -->
    <meta property="og:title" content="<?php the_field('titulo'); ?>" />
    <meta property="og:type" content="<?php the_field('type_op'); ?>" />
    <meta property="og:url" content="<?php echo $url;?>" />
    <meta property="og:image" content="<?php the_field('imagem'); ?>" />
    <meta property="og:description" content="<?php the_field('descricao'); ?>" />
    <meta property="og:site_name" content="<?php the_field('titulo'); ?>" />
    <meta property="fb:admins" content="preservtec" />

    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon-16x16.png">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

    <!--<link href="css/bootstrap.css" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css?family=Exo+2:900|Lora" rel="stylesheet"> 
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">

    <!-- WP HEADER -->
    <?php wp_head(); ?>
    <!-- FIM WP HEADER -->

</head>

<body>
    <header>

        <div class="logo-evento">
          <a href="/preservtec/home"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-branco.png" alt="Logo Preservtec"></a>
        </div>


        
        <!-- Facebook Pixel Code -->
        <script>
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
        n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
        document,'script','https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '176263346247745'); // Insert your pixel ID here.
        fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=176263346247745&ev=PageView&noscript=1"
        /></noscript>
        <!-- DO NOT MODIFY -->
        <!-- End Facebook Pixel Code -->

    </header>
