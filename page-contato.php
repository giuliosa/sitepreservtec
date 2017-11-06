<?php
  // Template Name: Contato

  get_header();
 ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <section class="contato-interno">
      <h2>Contato</h2>

      <div class="container">
        <div class="col-2 contatos">
          <h3>Endereço:</h3>
          <p><?php the_field('endereco1'); ?></p>
          <p><?php the_field('endereco2'); ?></p>

          <h3>Telefones</h3>
          <p><?php the_field('telefone1'); ?></p>
          <p><?php the_field('telefone2'); ?></p>

          <h3>E-mail</h3>
          <p><?php the_field('email'); ?></p>
        </div>

        <div class="col-2 formulario">
          <!-- <h3>Envie-nos uma mensagem</h3> -->
          <?php the_field('form'); ?>
          <!-- <form class="form-contato" action="index.html" method="post">
            <input type="text" name="nome" placeholder="NOME:">
            <input type="tel" name="telefone" placeholder="TELEFONE:">
            <input type="email" name="email" placeholder="E-MAIL:"><br>
            <textarea type="text" name="mensagem" placeholder="MENSAGEM:"></textarea>
            <button type="submit" name="button">Enviar</button>
          </form> -->
        </div>

      </div>
      <!-- <img src="img/web/mapa.jpg" alt="mapa temporario"> -->
      <div id="map-canvas"/>
      <!-- <?php the_field('mapa'); ?> -->
  </section>

<?php endwhile; else: endif?>
<?php get_footer(); ?>
