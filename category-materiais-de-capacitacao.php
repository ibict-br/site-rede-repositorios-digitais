<?php
/*
Template Name: Materiais de capacitação
*/
?>

<?php get_header(); ?>

<!--Jumbotron-->
<div class="jumbotron jumbotron-fluid jumbotron-image">
    <div class="container py-3 pl-5 corDocBannerNordeste">
        <h1 class="titDoc">Materiais de capacitação</h1>
    </div>
</div>
<!--Fim Jumbotron-->

<!--Documentos-->
<div class="container mb-5">
    <?php
      if( have_posts() ): while( have_posts() ) : the_post();
      /* Include */
      get_template_part( 'parts/content', 'archive' );
      ?>

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