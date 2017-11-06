<?php
	$home = get_page_by_title('home');
?>
<!-- seção COMENTÁRIOS DE CLIENTES -->

<section class="comentarios">
    <h2>Casos de sucesso</h2>
    <div class="container">
        <!-- <span class="glyphicon glyphicon-chevron-left"></span> -->

        <div class="cliente">
            <!-- <img src="img/web/testimonials-1.jpg" alt="imagem-cliente"> -->
            <ul class="rslides">
                <?php if(have_rows('comentarios_clientes', $home)): while(have_rows('comentarios_clientes', $home)) : the_row(); ?>
                  <li>
                      <h4><?php the_sub_field('quote_cliente', $home); ?></h4>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>

                      <div class="blockquote">
                          <i class="fa fa-quote-left" aria-hidden="true"></i>

                          <?php the_sub_field('quote_mensagem', $home); ?>

                          <i class="fa fa-quote-right" aria-hidden="true"></i>

                      </div>
                  </li>
                <?php endwhile; else : endif; ?>
            </ul>
            <p>Veja nossos trabalhos abaixo</p>
            <button type="button" name="button" onClick="location.href='/preservtec/portfolio'">Portifólio</button>
        </div>
        <!-- <span class="glyphicon glyphicon-chevron-right"></span> -->

    </div>
</section>
