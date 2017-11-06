<!-- seção CONTATO -->
<?php
	$contato = get_page_by_title('contato');
	the_field('telefone', $contato)
?>
<section class="contato">

    <h2>Contato</h2>

    <div class="container">
      <?php the_field('form', $contato); ?>
        <!-- <form class="form-contato" action="index.html" method="post">
            <input type="text" name="nome" placeholder="NOME:">
            <input type="tel" name="telefone" placeholder="TELEFONE:">
            <input type="email" name="email" placeholder="E-MAIL:"><br>
            <textarea type="text" name="mensagem" placeholder="MENSAGEM:"></textarea>
            <button type="submit" name="button">Enviar</button>
        </form> -->
    </div>

</section>
