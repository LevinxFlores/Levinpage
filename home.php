<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Ishop</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/icono.png" rel="icon">
  <link href="img/icono.png" rel="inicioicon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">Ishop</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Inicio</a></li>
          <li><a href="#portfolio">Productos</a></li>
          <li><a href="acerca.php">Acerca de nosotros</a></li>
          
          
          <li> <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
            <input type="image" src="img/carrito.ico" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
            <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
          </form></a></li>
          
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="https://images.pexels.com/photos/7706125/pexels-photo-7706125.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Bienvenidos</h2>
                <p>En este sitio encontraras productos de otros paises.</p>
                <a href="#portfolio" class="btn-get-started scrollto">Empecemos</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="https://images.pexels.com/photos/11168169/pexels-photo-11168169.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1s" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Irasshaimase</h2>
                <p>Kono saitode wa, hoka no kuni no seihin o mitsukeru koto ga dekimasu.</p>
                <a href="#portfolio" class="btn-get-started scrollto">Hajimemashou</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="https://images.pexels.com/photos/7205811/pexels-photo-7205811.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Welcome</h2>
                <p>On this site you will find products from other countries.</p>
                <a href="#portfolio" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="https://images.pexels.com/photos/7220187/pexels-photo-7220187.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Cominciamo</h2>
                <p>Su questo sito troverai prodotti di altri paesi.</p>
                <a href="#portfolio" class="btn-get-started scrollto">Cominciamo</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="https://images.pexels.com/photos/10002302/pexels-photo-10002302.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Herzlich willkommen</h2>
                <p>Auf dieser Seite finden Sie Produkte aus anderen Ländern.</p>
                <a href="#portfolio" class="btn-get-started scrollto">Lasst uns beginnen</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Productos</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Todos</li>
              <li data-filter=".filter-app">Mexico</li>
              <li data-filter=".filter-card">Italia</li>
              <li data-filter=".filter-web">Japon</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="https://images.pexels.com/photos/12889726/pexels-photo-12889726.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid" alt="">
                <a href="https://images.pexels.com/photos/12889726/pexels-photo-12889726.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1s" data-lightbox="portfolio" data-title="img 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Vestuario tipico mujer</a></h4>
                <p>$1500 mx</p><form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="business" value="LEVIN21@outlook.es">
                        <input type="hidden" name="lc" value="US">
                        <input type="hidden" name="item_name" value="Vestuario tipico mujer">
                        <input type="hidden" name="item_number" value="01">
                        <input type="hidden" name="amount" value="1500.00">
                        <input type="hidden" name="currency_code" value="MXN">
                        <input type="hidden" name="button_subtype" value="products">
                        <input type="hidden" name="no_note" value="0">
                        <input type="hidden" name="tax_rate" value="2.000">
                        <input type="hidden" name="add" value="1">
                        <input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHostedGuest">
                        <input type="image" src="img/botoncomprar.png" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                        <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                        </form>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="https://images.pexels.com/photos/6665775/pexels-photo-6665775.jpeg?auto=compress&cs=tinysrgb&w=1600" class="img-fluid" alt="">
                <a href="https://images.pexels.com/photos/6665775/pexels-photo-6665775.jpeg?auto=compress&cs=tinysrgb&w=1600" class="link-preview" data-lightbox="portfolio" data-title="img 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Sombrero japones</a></h4>
                <p>$500 mx</p>
                <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
                  <input type="hidden" name="cmd" value="_cart">
                  <input type="hidden" name="business" value="LEVIN21@outlook.es">
                  <input type="hidden" name="lc" value="US">
                  <input type="hidden" name="item_name" value="Sombrero japones">
                  <input type="hidden" name="amount" value="500.00">
                  <input type="hidden" name="currency_code" value="MXN">
                  <input type="hidden" name="button_subtype" value="products">
                  <input type="hidden" name="no_note" value="0">
                  <input type="hidden" name="tax_rate" value="2.000">
                  <input type="hidden" name="shipping" value="100.00">
                  <input type="hidden" name="add" value="1">
                  <input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHostedGuest">
                  <input type="image" src="img/botoncomprar.png"" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
               </form>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="https://cdn.shopify.com/s/files/1/0117/6577/6443/products/77129_800x.jpg?v=1551636806" class="img-fluid" alt="">
                <a href="https://cdn.shopify.com/s/files/1/0117/6577/6443/products/77129_800x.jpg?v=1551636806" class="link-preview" data-lightbox="portfolio" data-title="img 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Vestido corto bordado</a></h4>
                <p>$1200 mx</p><form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
                <input type="hidden" name="cmd" value="_cart">
                <input type="hidden" name="business" value="LEVIN21@outlook.es">
                <input type="hidden" name="lc" value="US">
                <input type="hidden" name="item_name" value="Vestido corto bordado">
                <input type="hidden" name="item_number" value="01">
                <input type="hidden" name="amount" value="1200.00">
                <input type="hidden" name="currency_code" value="MXN">
                <input type="hidden" name="button_subtype" value="products">
                <input type="hidden" name="no_note" value="0">
                <input type="hidden" name="tax_rate" value="2.000">
                <input type="hidden" name="add" value="1">
                <input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHostedGuest">
                <input type="image" src="img/botoncomprar.png" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                </form>

              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="https://cdn.shopify.com/s/files/1/0112/9486/7552/products/media_8bbba131-d227-4402-bad3-a966ec5d9952_530x@2x.jpg?v=1589329636" class="img-fluid" alt="">
                <a href="https://cdn.shopify.com/s/files/1/0112/9486/7552/products/media_8bbba131-d227-4402-bad3-a966ec5d9952_530x@2x.jpg?v=1589329636" class="link-preview" data-lightbox="portfolio" data-title="img 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Pasta artesanal italiana</a></h4>
                <p>$120 mx</p>
                <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="9FE54LSPK2P24">
                <input type="image" src="img/botoncomprar.png" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                </form>

              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="https://images.pexels.com/photos/11168169/pexels-photo-11168169.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid" alt="">
                <a href="https://images.pexels.com/photos/11168169/pexels-photo-11168169.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="link-preview" data-lightbox="portfolio" data-title="img 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Kimono japones mujer</a></h4>
                <p>$2500 mx</p>
                <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="RWHBL87J6B5GJ">
                <input type="image" src="img/botoncomprar.png" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                </form>

              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="https://foodandtravel.mx/wp-content/uploads/2016/09/shutterstock_71985079.jpg" class="img-fluid" alt="">
                <a href="https://foodandtravel.mx/wp-content/uploads/2016/09/shutterstock_71985079.jpgs" class="link-preview" data-lightbox="portfolio" data-title="img 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Vestido tipico jarocho mujer</a></h4>
                <p>$1500 mx</p>
                <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="79TZDUSD5TN46">
                    <input type="image" src="img/botoncomprar.png" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                    <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                    </form>

              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="https://tipsparatuviaje.com/wp-content/uploads/2020/01/chianti-y-chianti-classico-de-piamonte-san-felice-ii-grigio-gran-selezione.jpg" class="img-fluid" alt="">
                <a href="https://tipsparatuviaje.com/wp-content/uploads/2020/01/chianti-y-chianti-classico-de-piamonte-san-felice-ii-grigio-gran-selezione.jpg" class="link-preview" data-lightbox="portfolio" data-title="img 1" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Vino italiano San Felice II</a></h4>
                <p>$700 mx</p>
                <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="645Q3U86RNY58">
                <input type="image" src="img/botoncomprar.png" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                </form>

              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="https://images-na.ssl-images-amazon.com/images/I/61p0SopSlBS._SLDPMOBCAROUSELAUTOCROP288221_MCnd_AC_SR462,693_.jpg" class="img-fluid" alt="">
                <a href="https://images-na.ssl-images-amazon.com/images/I/61p0SopSlBS._SLDPMOBCAROUSELAUTOCROP288221_MCnd_AC_SR462,693_.jpg" class="link-preview" data-lightbox="portfolio" data-title="img 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Delantal italiano para mujer</a></h4>
                <p>$380 mx</p>
                <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="K5QKK3NZC4K7Q">
                  <input type="image" src="img/botoncomprar.png" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
               </form>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="https://http2.mlstatic.com/D_NQ_NP_700394-MLM48089591654_112021-O.jpg" class="img-fluid" alt="">
                <a href="https://http2.mlstatic.com/D_NQ_NP_700394-MLM48089591654_112021-O.jpg" class="link-preview" data-lightbox="portfolio" data-title="img 1" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Kimono japones Hombres</a></h4>
                <p>$2500 mx</p>
                <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="25N7R2HPR39C4">
                  <input type="image" src="img/botoncomprar.png" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                 </form>

              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Nuestros clientes</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <img src="img/clients/client-1.png" alt="">
          <img src="img/clients/client-3.png" alt="">
          
        </div>

      </div>
    </section><!-- #clients -->

     
  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Ishop</h3>
            <p>Empresa dedicada a la venta de productos de culturas extranjeras.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Enlaces</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#intro">Inicio</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Acerca de nosotros</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#portfolio">Productos</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contactanos</h4>
            <p>
              <br>
              Ciudad Juarez,chihuahua<br>
              Mexico <br>
              <strong>Phone:</strong> +52 5589 55488 55<br>
              <strong>Email:</strong> Ishop@outlook.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Ishop</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
    
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
