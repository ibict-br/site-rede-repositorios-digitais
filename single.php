
<div id="primary">
    <div id="main">
        <div class="container">
            <?php 
                while( have_posts() ):
                    the_post(); ?>
                    <article id="post-<?php the_ID();?>" <?php post_class(); ?> class="mb-5">
        <h2 class="titDoc2"><?php the_title(); ?></h2>
        <div class="meta-info">
            <p>Categoria: <?php the_category( ' ' ); ?> </p>
        </div>
        <div class="meta-text">
            <p><?php the_content(); ?></p>
        </div>
    </article>
                <?php
                endwhile;    
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>