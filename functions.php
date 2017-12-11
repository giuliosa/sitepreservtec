<?php

  // Registrar o CSS e o JS
  function preservtec_scripts() {
    // Desregistra o jQuery do Wordpress
    wp_deregister_script('jquery');

    // Registra o jQuery Novo
    wp_register_script( 'jquery', get_template_directory_uri() . '/js/libs/jquery.js', array(), "3.1.1", true );

    // Registra o Script de Plugins, com dependência do jquery, sem especificar versão e no footer do site
    wp_register_script( 'plugins-script', get_template_directory_uri() . '/js/plugins.js', array( 'jquery' ), false, true );

    // Registra o Script Principal, com dependência do jquery e plugins, sem especificar versão e no footer do site
    wp_register_script( 'main-script', get_template_directory_uri() . '/js/main.js', array( 'jquery', 'plugins-script' ), false, true );

    // Registra o Modernizr
    wp_register_script( 'modernizr', get_template_directory_uri() . '/js/libs/modernizr.custom.45655.js', array(), "4565", false );

    // Registra o bootstrap
    wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), false, false );

    // Registra o owl carousel
    wp_register_script( 'owl.carousel', get_template_directory_uri() . '/js/libs/owl.carousel.min.js', array('jquery'), false, false );

    // Registra o Google Maps Api
    wp_register_script( 'maps', get_template_directory_uri() . '/js/map.js', array(), false, false );

    // Coloca script no site
    wp_enqueue_script( 'modernizr' );
    wp_enqueue_script( 'main-script' );
    wp_enqueue_script( 'bootstrap' );
    wp_enqueue_script( 'owl.carousel' );
    wp_enqueue_script( 'maps' );
  }
  add_action( 'wp_enqueue_scripts', 'preservtec_scripts' );

  // Funções para Limpar o Header
  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wlwmanifest_link');
  remove_action('wp_head', 'start_post_rel_link', 10, 0 );
  remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
  remove_action('wp_head', 'feed_links_extra', 3);
  remove_action('wp_head', 'wp_generator');
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('admin_print_styles', 'print_emoji_styles');


  function custom_post_type_portfolio() {
  	register_post_type('portfolio', array(
  		'label' => 'Portfolios',
  		'description' => 'Portfolios',
  		'public' => true,
  		'show_ui' => true,
  		'show_in_menu' => true,
  		'capability_type' => 'post',
  		'map_meta_cap' => true,
  		'hierarchical' => false,
  		'rewrite' => array('slug' => 'portfolio', 'with_front' => true),
  		'query_var' => true,
  		'supports' => array('title', 'editor', 'page-attributes','post-formats'),

  		'labels' => array (
  			'name' => 'Portfolios',
  			'singular_name' => 'Portfolio',
  			'menu_name' => 'Portfolios',
  			'add_new' => 'Adicionar Novo',
  			'add_new_item' => 'Adicionar Novo Portfolio',
  			'edit' => 'Editar',
  			'edit_item' => 'Editar Portfolio',
  			'new_item' => 'Novo Portfolio',
  			'view' => 'Ver Portfolio',
  			'view_item' => 'Ver Portfolio',
  			'search_items' => 'Procurar Portfolios',
  			'not_found' => 'Nenhum Portfolio Encontrado',
  			'not_found_in_trash' => 'Nenhum Portfolio Encontrado no Lixo',
  		)
  	));
  }
  add_action('init', 'custom_post_type_portfolio');

// Custom post type - produtos
function custom_post_type_produto()
{
  register_post_type('produto', array(
    'label' => 'produtos',
    'description' => 'produtos',
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'capability_type' => 'post',
    'map_meta_cap' => true,
    'hierarchical' => false,
    'rewrite' => array('slug' => 'produto', 'with_front' => true),
    'query_var' => true,
    'supports' => array('title', 'editor', 'page-attributes', 'post-formats'),

    'labels' => array(
      'name' => 'Produtos',
      'singular_name' => 'Produto',
      'menu_name' => 'Produtos',
      'add_new' => 'Adicionar Novo',
      'add_new_item' => 'Adicionar Novo Produto',
      'edit' => 'Editar',
      'edit_item' => 'Editar Produto',
      'new_item' => 'Novo Produto',
      'view' => 'Ver Produto',
      'view_item' => 'Ver Produto',
      'search_items' => 'Procurar Produtos',
      'not_found' => 'Nenhum Produto Encontrado',
      'not_found_in_trash' => 'Nenhum Produto Encontrado no Lixo',
    )
  ));
}
add_action('init', 'custom_post_type_produto');


  // Habilitar Menus
  add_theme_support('menus');

  // Registrar o Menu
  function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
  }
  add_action( 'init', 'register_my_menu' );
  
  // Paginação
  function wordpress_pagination() {
            global $wp_query;
 
            $big = 999999999;
 
            echo paginate_links( array(
                  'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                  'format' => '?paged=%#%',
                  'current' => max( 1, get_query_var('paged') ),
                  'total' => $wp_query->max_num_pages
            ) );
      }
?>
