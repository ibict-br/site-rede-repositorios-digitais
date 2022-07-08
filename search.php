<!-- Página de pesquisa do formulário -->
<?php get_header(); ?>
<!--Template Banner-->
<img class="carousel-altura mb-5 img-fluid" src="<?php header_image(); ?>"
    height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>"
    alt="Banner Portal da Rede Brasileira de Repositórios Digitais" />
<!--Fim Template Banner-->
<!--Blog-->
<div class="container mb-5">
    <!-- Termo pesquisado -->
    <h1 class="mb-5">Procurando resultados por: <?php echo get_search_query(); ?></h1>

    <?php
/* Formulário dentro da pesquisa */
    get_search_form();

      if( have_posts() ): while( have_posts() ) : the_post(); ?>
    <article class="mb-5 mt-5">
        <h2 class="titDoc2"><a class="titDoc2" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php if( 'post' == get_post_type() ) : ?>
        <div class="meta-info">
            <p>Categoria: <?php the_category( ' ' ); ?> </p>
        </div>
        <?php endif; ?>
        <div class="meta-text">
            <p><?php the_excerpt(); ?></p>
        </div>
    </article>
    <div class="redes-paginacao">
                <div class="novo"><?php previous_posts_link( "Novas postagens >>" ); ?></div>
                <div class="antigo"><?php next_posts_link( "<< Postagens antigas" ); ?></div>
            </div>
    <p>
        <hr>
    </p>
    <?php
        endwhile; else: ?>
    <p>Documentos não encontrados.</p>
    <?php endif; 
    the_posts_pagination();
    ?>
</div>
<!--Blog Fim-->
<?php get_footer(); ?>