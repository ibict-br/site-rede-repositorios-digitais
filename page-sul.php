<?php
/*
Template Name: Rede Sul
*/ 
?>
<?php get_header(); ?>
<!--Jumbotron-->
<div class="jumbotron jumbotron-fluid jumbotron-image">
    <div class="container py-3 pl-5 corDocBannerSul">
        <h1 class="display-4 titDoc">Rede Sul de Repositórios Digitais
        </h1>
        <p class="lead titDoc">Conheça a nossa rede de repositórios!</p>
    </div>
</div>
<!--Fim Jumbotron-->
<!--Documentos-->
<div class="container mb-5">
    <?php
      get_template_part( 'parts/content', 'redes' );
      ?>
</div>
<!--Documentos Fim-->
<?php get_footer(); ?>