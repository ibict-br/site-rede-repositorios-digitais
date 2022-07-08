<?php
/*
Template Name: Modelo geral
*/ 
?>
<?php get_header(); ?>
<!--Jumbotron-->
<div class="jumbotron jumbotron-fluid jumbotron-image">
    <div class="container py-3 pl-5 corDocBanner">
        <h1 class="display-4 titDoc">Modelo geral
        </h1>
        <p class="lead titDoc">Aqui é um modelo reutilizável!</p>
    </div>
</div>
<!--Fim Jumbotron-->
<!--Documentos-->
<div class="container mb-5">
    <?php
      if( have_posts() ): while( have_posts() ) : the_post(); 
      get_template_part( 'parts/content', 'geral' );
      ?>

    <p>
        <hr>
    </p>
    <?php
        endwhile; else: ?>
    <p>Documentos não encontrados.</p>
    <?php endif; ?>
</div>
<!--Documentos Fim-->
<?php get_footer(); ?>