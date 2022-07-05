<?php get_header(); ?>
<!--Jumbotron-->
<div class="jumbotron jumbotron-fluid jumbotron-image">
    <div class="container py-3 pl-5 corDocBanner">
        <h1 class="display-4 titDoc">Documentos
        </h1>
        <p class="lead titDoc">Aqui estão os
            documentos das Redes de
            Repositórios Regionais</p>
    </div>
</div>

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