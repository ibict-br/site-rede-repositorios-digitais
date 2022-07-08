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