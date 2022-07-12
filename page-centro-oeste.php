<?php
/*
Template Name: Rede Centro-Oeste
*/ 
?>
<?php get_header(); ?>
<!--Jumbotron-->
<div class="jumbotron jumbotron-fluid jumbotron-image">
    <div class="container py-3 pl-5 corDocBannerCentroOeste">
        <h1 class="titDocP">Rede Centro-Oeste de Repositórios Digitais
        </h1>
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