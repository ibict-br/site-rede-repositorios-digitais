<?php get_header(); ?>
<!--Template Banner-->
<img class="carousel-altura mb-5 img-fluid" src="<?php header_image(); ?>"
    height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>"
    alt="Banner Portal da Rede Brasileira de Repositórios Digitais" />
<!--Fim Template Banner-->
<!--Blog-->
<div class="container mb-5">
    <?php
      if( have_posts() ): while( have_posts() ) : the_post(); 
      get_template_part( 'parts/content', 'single' );
      ?>
    <div class="redes-paginacao">
        <!-- Navegação dentro dos posts - next_post_link - no singular -->
        <div class="novo"><?php next_post_link( '&laquo; %link' ); ?></div>
        <div class="antigo"><?php previous_post_link( '%link &raquo;' ); ?></div>
    </div>
    <p>
        <hr>
    </p>
    <?php
        endwhile; else: ?>
    <p>Documentos não encontrados.</p>
    <?php endif; ?>
</div>
<!--Blog Fim-->
<?php get_footer(); ?>