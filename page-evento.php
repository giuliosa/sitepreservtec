<?php
    // Template Name: Evento

    $contato = get_page_by_title('contato');

    get_header('evento');
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<section class="banner-evento">
    <h1>Reforma Trabalhista <br> o Guia Completo</h1>
    <h3>Tire todas as suas dúvidas sobre a nova reforma trabalhista</h3>
    <div>_______________</div>
    <h5>29 de Novembro de 2017</h5>
</section>

<div class="ajuste-top">
    <section class="linha-flex">
        <div class="info-evento">
            <h2>Uma Tarde Em Recife</h2>
            <div>____________</div>
            <p>Assim mesmo, a consolidação das estruturas promove a alavancagem 
            do sistema de formação de quadros que corresponde às necessidades.
            Percebemos, cada vez mais, que o aumento do diálogo entre os diferentes
            setores produtivos promove a alavancagem do sistema</p>
        </div>
        <div class="col-double">
            <div class="imagem-info-evento"></div>
            <div class="data-evento">
                <h4>29 de Novembro</h4>
                <p>16:00</p>
                <p>Lorem Ipsum</p>
                <p>Sérgio Sá</p>
            </div>
        </div>
        
    </section>    

    <section class="linha-flex">

        <div class="col-double">
            <div class="local-evento">
                <h4>Endereço</h4>
                <p>Rua Domingos José Martins, nº 75</p>
                <p>Auditório 01, Recife-PE</p>
                <p>CEP 50030-200</p>
            </div>

            

            <div class="imagem-local-evento"></div>
        </div>
        
        
        <div class="form-evento">
            <h2>Uma Tarde Em Recife</h2>
            <?php the_field('form_evento'); ?>
        </div>
    </section>    
    <div id="map-canvas"/>
    <?php // the_field('mapa', $contato); ?>

</div>


<?php endwhile; else : endif ?>
<?php 
    get_footer('evento');   
?>