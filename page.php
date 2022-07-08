<?php get_header(); ?>
<!--Jumbotron-->
<div class="jumbotron jumbotron-fluid jumbotron-image">
    <div class="container py-3 pl-5 corDocBanner">
        <h1 class="display-4 titDoc">Sample page
        </h1>
        <p class="lead titDoc">Aqui é a Sample page!</p>
    </div>
</div>
<!--Fim Jumbotron-->
<!--Blog-->
<div class="container mb-5">
    <?php
      while( have_posts() ) : the_post(); 
      get_template_part( 'parts/content', 'page' );      
    ?>

    <p>
        <hr>
    </p>
    <?php
        endwhile; ?>
</div>
<!--Blog Fim-->
<?php get_footer(); ?>