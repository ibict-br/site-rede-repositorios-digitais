<?php get_header(); 
get_template_part( 'parts/content', 'banner' );
?>

<!--Documentos-->
<div class="container mb-5">
    <?php
      if( have_posts() ): while( have_posts() ) : the_post();
      /* Include */
      get_template_part( 'parts/content', 'archive' );
      ?>

    <div class="redes-paginacao">
        <!-- Navegação dentro dos posts - next_post_link - no singular -->
        
    </div>
    <p>
        <hr>
    </p>
    <?php
        endwhile; else: ?>
    <p>Documentos não encontrados.</p>
    <?php endif; ?>
</div>
<!--Container fim-->

<!--Documentos Fim-->
<!--Fim Jumbotron-->
<?php get_footer(); ?>