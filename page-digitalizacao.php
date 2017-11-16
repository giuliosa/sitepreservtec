<?php
    // Template Name: Digitalização

    $contato = get_page_by_title('contato');

    get_header('min');
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>





<?php endwhile;
else : endif ?>
<?php 
get_footer();
?>