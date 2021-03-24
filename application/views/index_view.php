<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="repuestos" />
  <meta name="description" content="hino" />
  <meta name="author" content="Alcode Ecuador" />

  <title>
    Repuestos Car
  </title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.html">
            <img src="images/logo.png" alt="" />
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="<?=base_url()?>">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#solicita">
                    Tu Repuesto
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#servicios">
                    Servicios
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#portafolio">
                    Portafolio
                  </a>
                </li>

              </ul>
              <a class="btn  my-2 my-sm-0 nav_search-btn" href="<?=base_url()?>login"></a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->

    <section class="slider_section">
      <div class="slider_container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6 px-0">
                    <div class="img-box">
                      <img src="images/slider-img.jpg" alt="" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="detail-box">
                      <h1>
                        Tu Repuesto
                        <br />
                        ¡AQUÍ!
                      </h1>
                      <p>
                        Te ayudamos a conseguir lo que necesitas
                      </p>
                      <a href="#solicita">
                        Solicitar
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </section>

    <!-- end slider section -->
  </div>
  <!-- end hero area -->

  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2 id="servicios">
          Ser<span>vi</span>cios
        </h2>
        <p>
          Trabajamos con las mejores marcas 
        </p>
      </div>
      <div class="row">
        <div class="col-lg-6 ">
          <div class="img-container tab-content">
            <div class="img-box tab-pane fade show active" id="img1" role="tabpanel">
              <img src="images/service-img.jpg" alt="" />
            </div>
            <div class="img-box tab-pane fade  " id="img2" role="tabpanel">
              <img src="images/service-img.jpg" alt="" />
            </div>
            <div class="img-box tab-pane fade  " id="img3" role="tabpanel">
              <img src="images/service-img.jpg" alt="" />
            </div>
            <div class="img-box tab-pane fade  " id="img4" role="tabpanel">
              <img src="images/service-img.jpg" alt="" />
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="detail-container nav nav-tabs" id="myTab" role="tablist">
            <div class="detail-box active" id="img1-tab" data-toggle="tab" href="#img1" role="tab" aria-selected="true">
              <h4>
                Útil
              </h4>
            </div>
            <div class="detail-box" id="img2-tab" data-toggle="tab" href="#img2" role="tab" aria-selected="false">
              <h4>
                Rápido
              </h4>
            </div>
            <div class="detail-box" id="img2-tab" data-toggle="tab" href="#img3" role="tab" aria-selected="false">
              <h4>
                Confiable
              </h4>
            </div>
            <div class="detail-box" id="img2-tab" data-toggle="tab" href="#img4" role="tab" aria-selected="false">
              <h4>
                Seguro
              </h4>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- end service section -->

  <!-- portfolio section -->

  <section class="portfolio_section">
    <div class="heading_container">
      <h2 id="portafolio">
        Por<span>taf</span>olio
      </h2>
      <p>
        adipiscingelit,sed do eiusmod tempor incididunt ut labore et dolore magn
      </p>
    </div>
    <div class="portfolio_container layout_padding">
      <div class="box-1">
        <div class="img-box b-1">
          <img src="<?=base_url()?>images/p1.png" alt="">
          <div class="btn-box">
            <a href="" class="btn-1">

            </a>
            <a href="" class="btn-2">

            </a>
          </div>
        </div>
        <div class="img-box b-2">
          <img src="<?=base_url()?>images/p2.jpg" alt="">
          <div class="btn-box">
            <a href="" class="btn-1">

            </a>
            <a href="" class="btn-2">

            </a>
          </div>
        </div>
      </div>
      <div class="box-2">
        <div class="img-box b-3">
          <img src="<?=base_url()?>images/p3.jpg" alt="">
          <div class="btn-box">
            <a href="" class="btn-1">

            </a>
            <a href="" class="btn-2">

            </a>
          </div>
        </div>
        <div class="img-box b-4">
          <img src="<?=base_url()?>images/p4.jpg" alt="">
          <div class="btn-box">
            <a href="" class="btn-1">

            </a>
            <a href="" class="btn-2">

            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end portfolio section -->

  
  <!-- agency section -->

  <section class="agency_section layout_padding-bottom">
    <div class="agency_container ">
      <div class="box ">
        <div class="detail-box">
          <div class="heading_container">
            <h2 id="solicita">
              Solicita tu <span>Repuesto</span> aquí
            </h2>
          </div>
          <p>
           Te ayudamos a conseguir lo que necesitas para tu vehículo, contacto directo
         </p>

         <form action="<?=base_url()?>principal/registrar" method="post">
          <input type="text" name="cli_nombres" placeholder="Tu Nombre" class="form form-control" required/><br/>
          <input type="text" name="cli_apellidos" placeholder="Tu Apellido" class="form form-control" required/><br/>
          <input type="text" name="cli_telefono" placeholder="Tu Telefono" class="form form-control" required/><br/>
          <input type="email" name="cli_email" placeholder="Tu Email" class="form form-control" required/><br/>
          <?=$combo_categoria?><br/>
          <textarea name="cli_pedido" placeholder="Agrega una descripción de lo que estas buscando para ayudarte de mejor manera" class="form form-control"></textarea><br/>

          <input type="submit" name="Enviar" value="Enviar" class="btn btn-success" />
        </form>

      </div>
    </div>
  </div>
</section>

<!-- end agency section -->


<!-- info section -->

<section class="info_section  layout_padding2-top">
  <div class="social_container ">
    <div class="row">
      <div class="col-md-12 social_box">
        <h6>
          CONTACTANOS
        </h6>
        <a href="">
          <img src="images/location.png" alt="">
          <span> Quito, Sangolqui </span>
        </a>
        <a href="">
          <img src="images/call.png" alt="">
          <span>+01 12345678901</span>
        </a>
        <a href="">
          <img src="images/mail.png" alt="">
          <span> demo@gmail.com</span>
        </a>
      </div>
    </div>
  </div>
  <!-- footer section -->
  <section class=" footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates && Alcode Ecuador</a>
      </p>
    </div>
  </section>
  <!-- footer section -->

</section>

<!-- end info section -->


<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
</script>
<script type="text/javascript" src="js/custom.js"></script>

</body>

</html>