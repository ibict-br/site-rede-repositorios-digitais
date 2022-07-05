<?php get_header(); ?>
<!--Carousel-->
<div id="carouselSite" class="carousel slide d-none d-lg-block" data-ride="carousel">
    <!--Indicadores-->
    <ol class="carousel-indicators">
        <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
        <li data-target="#carouselSite" data-slide-to="1"></li>
        <li data-target="#carouselSite" data-slide-to="2"></li>
    </ol>
    <!--Fim indicadores-->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php echo get_template_directory_uri(); ?>/img/slide-01.png" class="image-fluid w-100"
                alt="slide-01">
            <!--Texto sobre as imagens-->
            <div class="carousel-caption text-dark w-50 mx-auto">
                <h3 class="h3CarouselImg"><?php echo get_post_meta($post->ID, 'slide1-titulo', true); ?></h3>
                <p class="lead pCarouselImg"><?php echo get_post_meta($post->ID, 'slide1-texto', true); ?></p>
            </div>
            <!--FimTexto sobre as imagens-->
        </div>
        <div class="carousel-item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/slide-02.png" class="image-fluid w-100"
                alt="slide-02">
            <!--Texto sobre as imagens-->
            <div class="carousel-caption text-dark w-50 mx-auto">
                <h3 class="h3CarouselImg"><?php echo get_post_meta($post->ID, 'slide2-titulo', true); ?></h3>
                <p class="lead pCarouselImg"><?php echo get_post_meta($post->ID, 'slide2-texto', true); ?></p>
            </div>
            <!--FimTexto sobre as imagens-->
        </div>
        <div class="carousel-item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/slide-03.png" class="image-fluid w-100"
                alt="slide-03">
            <!--Texto sobre as imagens-->
            <div class="carousel-caption text-dark w-50 mx-auto">
                <h3 class="h3CarouselImg"><?php echo get_post_meta($post->ID, 'slide3-titulo', true); ?></h3>
                <p class="lead pCarouselImg"><?php echo get_post_meta($post->ID, 'slide3-texto', true); ?></p>
            </div>
            <!--FimTexto sobre as imagens-->
        </div>
    </div>
    <!--Controle do Carousel-->
    <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="sr-only">próximo</span>
    </a>
    <!--Fim controle do Carousel-->
</div>
<!--Fim Carousel-->
<!--Cards-->
<!--Container 2-->
<div class="container-fluid  mt-5">
    <div class="row">
        <div class="col-md">
            <div class="card ml-auto mr-auto cardHover">
                <a href="#"><img class="card-img-top"
                        src="<?php bloginfo('template_directory'); ?>/img/centro-oeste.png" alt="Card image"
                        onmouseover="this.src='<?php bloginfo('template_directory'); ?>/./img/centro-oeste-hover.png'"
                        onmouseout="this.src='<?php bloginfo('template_directory'); ?>/./img/centro-oeste.png'"></a>
                <div class="card-body">
                    <h6 class="card-text text-uppercase">Rede Centro-Oeste de Repositórios Digitais</h6>
                    <a href="#" class="btn botao_centro_oeste mt-3 mb-5">Saiba mais</a>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="card ml-auto mr-auto cardHover">
                <a href="#"><img class="card-img-top" src="<?php bloginfo('template_directory'); ?>/img/nordeste.png"
                        alt="Card image"
                        onmouseover="this.src='<?php bloginfo('template_directory'); ?>/./img/nordeste-hover.png'"
                        onmouseout="this.src='<?php bloginfo('template_directory'); ?>/./img/nordeste.png'"></a>
                <div class="card-body">
                    <h6 class="card-text text-uppercase">Rede Nordeste de Repositórios Digitais</h6>
                    <a href="#" class="btn botao_nordeste mt-3 mb-5">Saiba mais</a>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="card ml-auto mr-auto cardHover">
                <a href="#"><img class="card-img-top" src="<?php bloginfo('template_directory'); ?>/img/norte.png"
                        alt="Card image"
                        onmouseover="this.src='<?php bloginfo('template_directory'); ?>/./img/norte-hover.png'"
                        onmouseout="this.src='<?php bloginfo('template_directory'); ?>/./img/norte.png'"></a>
                <div class="card-body">
                    <h6 class="card-text text-uppercase">Rede Norte de Repositórios Digitais</h6>
                    <a href="#" class="btn botao_norte mt-3 mb-5">Saiba mais</a>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="card ml-auto mr-auto cardHover">
                <a href="#"><img class="card-img-top" src="<?php bloginfo('template_directory'); ?>/img/sudeste.png"
                        alt="Card image"
                        onmouseover="this.src='<?php bloginfo('template_directory'); ?>/./img/sudeste-hover.png'"
                        onmouseout="this.src='<?php bloginfo('template_directory'); ?>/./img/sudeste.png'"></a>
                <div class="card-body">
                    <h6 class="card-text text-uppercase">Rede Sudeste de Repositórios Digitais</h6>
                    <a href="#" class="btn botao_sudeste mt-3 mb-5">Saiba mais</a>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="card ml-auto mr-auto cardHover">
                <a href="#"><img class="card-img-top" src="<?php bloginfo('template_directory'); ?>/img/sul.png"
                        alt="Card image"
                        onmouseover="this.src='<?php bloginfo('template_directory'); ?>/./img/sul-hover.png'"
                        onmouseout="this.src='<?php bloginfo('template_directory'); ?>/./img/sul.png'"></a>
                <div class="card-body">
                    <h6 class="card-text text-uppercase">Rede Sul de <br> Repositórios Digitais</h6>
                    <a href="#" class="btn botao_sul mt-3 mb-5">Saiba mais</a>
                </div>
            </div>
        </div>
    </div>
    <!--Infografico 1-->
    <div class="container-fluid">
        <div class="row col-md-7 mx-auto">
            <div class="my-5 zoom"><img
                    src="<?php echo get_template_directory_uri(); ?>/img/infografico_rede_repositorios.png"
                    rel="noopener noreferrer" alt="Infográfico" class=" border-0 pt-2 infograficoUm image-fluid"></div>
        </div>
    </div>
    <!--Fim Infografico 1-->
    <!--Infografico 2-->

    <!--Fim Infografico 2-->
</div>
<!-- Fim Container 2-->
<?php get_footer(); ?>