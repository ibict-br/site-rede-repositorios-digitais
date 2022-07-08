<?php get_header(); ?>
<!--Template Banner-->
<img class="carousel-altura mb-5 img-fluid" src="<?php header_image(); ?>"
    height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>"
    alt="Banner Portal da Rede Brasileira de Repositórios Digitais" />
<!--Fim Template Banner-->
<!--Documentos-->
<div class="container mb-5">
    <?php
      if( have_posts() ): while( have_posts() ) : the_post(); ?>
    <article class="mb-5">
        <h2 class="titDoc2"><?php the_title(); ?></h2>
        <div class="meta-text">
            <p><?php the_content(); ?></p>
        </div>
    </article>
    <div class="redes-paginacao">
        <!-- Navegação dentro dos posts - next_post_link - no singular -->
        <div class="novo"><?php previous_post_link( '&laquo; %link' ); ?></div>
        <div class="antigo"><?php next_post_link( '%link &raquo;' ); ?></div>
    </div>
    <p>
        <hr>
    </p>
    <?php
        endwhile; else: ?>
    <p class="mt-2">Documentos não encontrados.</p>
    <?php endif; ?>
</div>
<!--Container fim-->

<!--Documentos Fim-->
<!--Fim Jumbotron-->
<?php get_footer(); ?>