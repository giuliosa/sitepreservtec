<?php
    // Template Name: Single Produtos
    get_header('min');
?>

<style>

    .detalhe-produto .imagem-produto{
        position: absolute;
        top: 0;
        z-index: 1;
        width: 100%;
        background-image: url("<?php the_field('imagem_destaque'); ?>");
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        text-align: right;
        padding: 80px 40px;
        height: 400px;
    }  

</style>

<section class="detalhe-produto ">
    <div class="imagem-produto">
    </div>

    <div class="up-this-please"></div>

    <div class="linha-produto">
        <div class="descricao-produto col-50">
            <h3><?php the_title(); ?></h3>        
            <?php the_field('descricao_produto'); ?>
            
        </div>
        <div class="info-produto col-50">
            <h3>Tabela de Tipos</h3>

            

            <div class="info-flex">
                <?php if (have_rows('coluna_pacote')) : while (have_rows('coluna_pacote')) : the_row(); ?>
                    <div class="<?php the_sub_field('tipo_pacote'); ?>">
                        <div class="head-tabela">
                            <h5><?php the_sub_field('titulo_pacote'); ?></h5>
                        </div>
                        <div class="detalhes-tabela">
                            <?php the_sub_field('diferenciais_pacote'); ?>

                        </div>
                    </div>  
                <?php endwhile;
                else : endif; ?>
                    

                
                
            </div>
                               
        </div>
    </div>
    <div class="linha-produto contato-interno">
        <div class="form-produto formulario col-50">
            <?php the_field('form_produto'); ?>
        </div>

        <div class="diferenciais-produto col-50">
            <h3>Diferenciais dos nossos planos</h3>
            <ul>
                <li>
                    <h5>Suporte</h5>
                    <div class="dif-ajuste">
                        <img src="<?php echo get_template_directory_uri() ?>/img/icones/marketing-chat.svg" alt="">   
                        <p>
                            Especialistas estarão disponíveis para você, caso precise tirar uma dúvida, ou corrigir
                            algum erro em horário comercial.
                        </p>
                    </div>
            
                </li>
            </ul>

            <ul>
                <li>
                    <h5>Personalizado</h5>
                    <div class="dif-ajuste">
                        <img src="<?php echo get_template_directory_uri() ?>/img/icones/marketing-mouse.svg" alt="">   
                        <p>
                            Nossa equipe sabe tudo o que precisar, sempre se atualizando no mercado de trabalho
                            e fazendo o que há de melhor para você.
                        </p>
                    </div>
            
                </li>
            </ul>

            <ul>
                <li>
                    <h5>Custo Benefício</h5>
                    <div class="dif-ajuste">
                        <img src="<?php echo get_template_directory_uri() ?>/img/icones/marketing-piggy-bank.svg" alt="">   
                        <p>
                            Nossos planos são os melhores do mercado, se adaptando as suas necessidades atuais e 
                            concorrendo bem com o mercado.
                        </p>
                    </div>
            
                </li>
            </ul>

            <ul>
                <li>
                    <h5>Equipe de Qualidade</h5>
                    <div class="dif-ajuste">
                        <img src="<?php echo get_template_directory_uri() ?>/img/icones/marketing-user.svg" alt="">   
                        <p>
                            Nossa equipe sabe tudo o que precisar, sempre se atualizando no mercado de trabalho
                            e fazendo o que há de melhor para você.
                        </p>
                    </div>
            
                </li>
            </ul>
        </div>
    </div>

    
    
</section>

    

<?php get_footer(); ?>
