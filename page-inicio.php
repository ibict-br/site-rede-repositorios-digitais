<!doctype html>
<html lang="pt">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
  <!-- Script Font Awesome-->
  <script src="https://kit.fontawesome.com/aa6bc77d97.js" crossorigin="anonymous"></script>

  <title>Site Redes de Repositórios Digitais</title>

</head>

<body>
  <!--Logo-->
  <!-- Navbar -->
  <div class="container-fluid">
    <!--Container 1-->
    <nav class="navbar navbar-light">
      <a class="navbar-brand mx-auto" href="index.html">
        <img src="img/logo-todos.png" width="500" alt="Logo Redes de Repositórios Digitais" class="img-fluid">
      </a>
    </nav>

    <!--Fim Logo-->
    <nav class="navbar navbar-expand-lg navbar-light">

      <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSite">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSite">
        <!-- Menu -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Início</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">Sobre</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="documentos.html">Documentos</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">A Rede</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">Sub-redes</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Subrede Norte</a>
              <a class="dropdown-item" href="#">Subrede Nordeste</a>
              <a class="dropdown-item" href="#">Subrede Centro-Oeste</a>
              <a class="dropdown-item" href="#">Subrede Sul</a>
              <a class="dropdown-item" href="#">Subrede Sudeste</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Eventos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Notícias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Publicações</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Material de capacitação</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contato</a>
          </li>
        </ul>

        <form class="form-inline ml-auto my-4" action="">
          <input class="form-control mr-2" type="search" placeholder="Buscar...">
          <button class="btn btn-dark margem-topo" type="submit">Ok</button>
        </form>
      </div><!-- Menu -->
  </div>
  <!--Container 1-->
  </nav>
  <!-- Carousel -->
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
        <img src="img/slide-01.png" class="image-fluid w-100" alt="slide-01">
        <!--Texto sobre as imagens-->
        <div class="carousel-caption text-dark w-50 mx-auto">
          <h3 class="h3CarouselImg">Conheça a Rede!</h3>
          <p class="lead pCarouselImg">Lorem ipsum dolores sitis amet, consectetur.</p>
        </div>
        <!--FimTexto sobre as imagens-->
      </div>
      <div class="carousel-item">
        <img src="img/slide-02.png" class="image-fluid w-100" alt="slide-02">
        <!--Texto sobre as imagens-->
        <div class="carousel-caption text-dark w-50 mx-auto">
          <h3 class="h3CarouselImg">Acesse nossos documentos</h3>
          <p class="lead pCarouselImg">Donec vulputate sapien vitae nunc venenatis.</p>
        </div>
        <!--FimTexto sobre as imagens-->
      </div>
      <div class="carousel-item">
        <img src="img/slide-03.png" class="image-fluid w-100" alt="slide-03">
        <!--Texto sobre as imagens-->
        <div class="carousel-caption text-dark w-50 mx-auto">
          <h3 class="h3CarouselImg">Veja nossas publicações!</h3>
          <p class="lead pCarouselImg">Maecenas non purus dictum.</p>
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
          <a href="#"><img class="card-img-top" src="img/centro-oeste.png" alt="Card image"
              onmouseover="this.src='./img/centro-oeste-hover.png'" onmouseout="this.src='./img/centro-oeste.png'"></a>
          <div class="card-body">
            <h6 class="card-text text-uppercase">Rede Centro-Oeste de Repositórios Digitais</h6>
            <a href="#" class="btn botao_centro_oeste mt-3 mb-5">Saiba mais</a>
          </div>
        </div>
      </div>
      <div class="col-md">
        <div class="card ml-auto mr-auto cardHover">
          <a href="#"><img class="card-img-top" src="img/nordeste.png" alt="Card image"
              onmouseover="this.src='./img/nordeste-hover.png'" onmouseout="this.src='./img/nordeste.png'"></a>
          <div class="card-body">
            <h6 class="card-text text-uppercase">Rede Nordeste de Repositórios Digitais</h6>
            <a href="#" class="btn botao_nordeste mt-3 mb-5">Saiba mais</a>
          </div>
        </div>
      </div>
      <div class="col-md">
        <div class="card ml-auto mr-auto cardHover">
          <a href="#"><img class="card-img-top" src="img/norte.png" alt="Card image"
              onmouseover="this.src='./img/norte-hover.png'" onmouseout="this.src='./img/norte.png'"></a>
          <div class="card-body">
            <h6 class="card-text text-uppercase">Rede Norte de Repositórios Digitais</h6>
            <a href="#" class="btn botao_norte mt-3 mb-5">Saiba mais</a>
          </div>
        </div>
      </div>
      <div class="col-md">
        <div class="card ml-auto mr-auto cardHover">
          <a href="#"><img class="card-img-top" src="img/sudeste.png" alt="Card image"
              onmouseover="this.src='./img/sudeste-hover.png'" onmouseout="this.src='./img/sudeste.png'"></a>
          <div class="card-body">
            <h6 class="card-text text-uppercase">Rede Sudeste de Repositórios Digitais</h6>
            <a href="#" class="btn botao_sudeste mt-3 mb-5">Saiba mais</a>
          </div>
        </div>
      </div>
      <div class="col-md">
        <div class="card ml-auto mr-auto cardHover">
          <a href="#"><img class="card-img-top" src="img/sul.png" alt="Card image"
              onmouseover="this.src='./img/sul-hover.png'" onmouseout="this.src='./img/sul.png'"></a>
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
              src="https://ibict-br.github.io/site-rede-repositorios-digitais/img/infografico_rede_repositorios.png" target="_blank" rel="noopener noreferrer" alt="Infográfico"
              class=" border-0 pt-2 infograficoUm image-fluid"></div>
      </div>
    </div>
    <!--Fim Infografico 1-->
    <!--Infografico 2-->

    <!--Fim Infografico 2-->
  </div>
  <!-- Fim Container 2-->

  <!-- Footer -->
  <footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container">
      <!-- Section: Social media -->
      <section>
        <!-- Facebook -->
        <!-- <a class="btn btn-outline-light" href="#!" role="button"><i class="fab fa-facebook-f"></i></a> -->
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Fim Grid container -->
    <!-- Copyright -->
    <div class="text-center p-5 bgCopyright">
      © 2022 Copyright:
      <a class="text-white" href="#!">Rede Brasileira de Repositórios Digitais</a>
    </div>
    <!-- Copyright Fim -->
  </footer>
  <!-- Fim Footer -->

  <!--Cards-->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
    integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
    crossorigin="anonymous"></script>
</body>

</html>