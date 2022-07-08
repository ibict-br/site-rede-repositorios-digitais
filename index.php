<?php get_header(); ?>
<!--Template Banner-->
<img class="carousel-altura mb-5 img-fluid" src="<?php header_image(); ?>"
    height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>"
    alt="Banner Portal da Rede Brasileira de Repositórios Digitais" />
<!--Fim Template Banner-->
<!--Blog-->
<div class="container mb-5">
    <?php
      if( have_posts() ): 
      while( have_posts() ) : the_post();
      /* Include */
      get_template_part( 'parts/content' );
      ?>
    <p>
        <hr>
    </p>
    <?php
        endwhile; 
        ?>
    <div class="redes-paginacao">
        <div class="novo"><?php previous_posts_link( "Novas postagens >>" ); ?></div>
        <div class="antigo"><?php next_posts_link( "<< Postagens antigas" ); ?></div>
    </div>
    <?php 
        else: ?>
    <p>Documentos não encontrados.</p>
    <?php endif; ?>
</div>
<!--Blog Fim-->
<?php get_footer(); ?>