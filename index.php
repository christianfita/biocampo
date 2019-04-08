<?php 
include'global/config.php';
include'global/conexion.php';
include'carrito.php';
 ?>
<!DOCTYPE html>
<html lang="es">

  <head>
    <script id="twitter-wjs" src="https://platform.twitter.com/widgets.js"></script><script async="" src="//www.google-analytics.com/analytics.js"></script><script type="text/javascript">
        var host = "startbootstrap.com";
        if ((host == window.location.host) && (window.location.protocol != "https:"))
          window.location.protocol = "https";
      </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Start Bootstrap">
    <meta name="google-site-verification" content="37Tru9bxB3NrqXCt6JT5Vx8wz2AJQ0G4TkC-j8WL3kw">

    
    <title>
        Biocampo Perú - Productos orgánicos - Delivery
      </title>
    <style type="text/css">

    </style>  
    <meta name="description" content="">
    
    <link rel="canonical" href="https://startbootstrap.com/previews/modern-business/">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-6jHF7Z3XI3fF4XZixAuSu0gGKrXwoX/w3uFPxC56OtjChio7wtTGJWRW53Nhx6Ev" crossorigin="anonymous">
    
    <link rel="stylesheet" href="/assets/style-template.css">
    
    <link type="application/atom+xml" rel="alternate" href="https://startbootstrap.com/feed.xml" title="startbootstrap">
    <script>
      // Google Analytics Tracking Script
      (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
          (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
          m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
      })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
      ga('create', 'UA-38417733-17', 'startbootstrap.com');
      ga('send', 'pageview');
    </script>
    <meta name="ir-site-verification-token" value="-28223945">
    
    <meta property="og:title" content="Modern Business - Template Preview">
    <meta property="og:site_name" content="Start Bootstrap">
    <meta property="og:type" content="website">
    <meta property="og:description" content="">
    <meta property="og:image" content="https://startbootstrap.com/assets/img/branding/og-start-bootstrap.png">
    <meta property="og:url" content="https://startbootstrap.com/previews/modern-business/">
    <meta property="og:image:alt" content="Modern Business - Template Preview">
    
    <meta name="twitter:card" content="summary">
    <meta name="twitter:image" content="https://startbootstrap.com/assets/img/branding/start-bootstrap-logo-500x500.png">
    <meta name="twitter:site" content="@SBootstrap">
    
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/icons/favicon-16x16.png">
    <link rel="manifest" href="/assets/img/icons/site.webmanifest">
    <link rel="mask-icon" href="/assets/img/icons/safari-pinned-tab.svg" color="#dd3d31">
    <meta name="msapplication-TileColor" content="#dd3d31">
    <meta name="theme-color" content="#ffffff">
    </head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="padding: 0px !important;">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img  class="banner-largo" src="images/biocampo-productos-verduras-frutas-organicas.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
           <li class="nav-item">
            <a class="nav-link" href="#">Contactanos : 962372221</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center my-4">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
              <div class="carousel-caption d-none d-md-block">
                <h3>First Slide</h3>
                <p>This is a description for the first slide.</p>
              </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
              <div class="carousel-caption d-none d-md-block">
                <h3>Second Slide</h3>
                <p>This is a description for the second slide.</p>
              </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url('http://placehold.it/1900x1080')">
              <div class="carousel-caption d-none d-md-block">
                <h3>Third Slide</h3>
                <p>This is a description for the third slide.</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
    <?php 
        $sentencia=$PDO->prepare("SELECT * FROM `categorias_productos`");
        $sentencia->execute();
        $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
       ?>
       <div class="row">
       <?php foreach ($listaProductos as $producto) { ?> 

 
      <div class="col-md-4 mb-5">
        <div class="card" style="height: 250px;padding-left: 50px;padding-top: 30%; background-position: center; background-image:url(<?php echo $producto['img']; ?>);" > 
          <a href="" style="text-decoration: none; color: black;">
            <h3 class="center-cat">  
              <a href="categoria.php" style="color:white; "><?php echo $producto['nombre'] ; ?></a>
          </h3>
        </div>
      </div>
    </a>

  <?php   } ?></div>

</div>
      <!-- /.col-md-4 -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

  <footer class="py-4 bg-light">
    <div class="container">
      <div class="container text-aling-center">
      <img  class="banner-largo" src="images/biocampo-logo-pequeno-delivery.jpg">
    </div>
      <div class="row" style="margin-top: 20px;">

        <div class="col-lg">
            <H5>Bioferias</H5>
        </div>

        <div class="col-lg">
           <H5>Delivery</H5>
        </div>

        <div class="col-lg">
           <H5>Mapa del sitio</H5>
        </div>
      </div>
    </div>
      
    </div>
    <!-- /.container -->
  </footer>
</html>
