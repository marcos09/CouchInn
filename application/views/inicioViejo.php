<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Usage Instructions: Make sure to include the scrolling-nav.js, jquery.easing.min.js, and scrolling-nav.css files. To make a link smooth scroll to another section on the page, give the link the .page-scroll class and set the link target to a corresponding ID on the page. -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description
    " content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="/favicon.ico">

    <title>CouchInn</title>

    <!-- Bootstrap Core CSS -->
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/scrolling-nav.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <style type="text/css">
            .carousel{
                background: transparent;
                margin-top: 20px;
            }
            
            .carousel .item img{
                margin: 0 auto; /* Align slide image horizontally center */
            }

            .row_one{ 
                padding:10px; 
                overflow:hidden;
                max-height: 500px;
            }

            .img-circle{
                height: 140px;
                width: 140px; 
                style = margin:2em 2em 2em 2em; 
                align: center;
            } 

            .left {
                float:left;   
                padding:15px; 
                width:285px; 
                margin:40px;
            }

            .center{
               float: left;
               padding:15px; 
               width:285px; 
               margin:40px;  
           }

           .right{
            float:left;    
            padding:15px; 
            width:285px; 
            margin:40px; 
        }    

        .back-to-top {
            background: none;
            margin: 0;
            position: fixed;
            bottom: 0;
            right: 0;
            width: 80px;
            height: 25px;
            z-index: 100;
            display: none;
            text-decoration: none;
            color: #ffffff;
            background-color: #6B8E23;
        }
    </style>
</head>
<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->
<body
<div id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"> <img src="../images/couchinn.png" class="img-responsive" alt="CouchInn" width="169" height="136"> </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#experiencias">Experiencias</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#nosotros">Sobre Nosotros</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#faqs">Preguntas Frecuentes</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="./inicio/ver_couchs">Ver Couchs</a>
                    </li>
                    <li>
                        <a class="page-scroll" data-toggle="modal" href="./inicio/registrarse">Registrarse</a>
                    </li>
                    <li>
                        <a class="page-scroll" data-toggle="modal" href="#">Iniciar Sesión</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Section -->
    <section id="intro" class="intro-section">

        <!--Carousel-->
        <div class="container">
     
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="../images/couchinn.png" alt="CouchInn">
            </div>

            <div class="item">
                <img src="../images/couchinn.png" alt="CouchInn">
            </div>

            <div class="item">
                <img src="../images/couchinn.png" alt="CouchInn">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
      </a>
  </div>
  <!-- Fin del Carousel -->
</div>
</section>

<!-- About Section -->
<section id="experiencias" class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Sección de Experiencias</h1>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="nosotros" class="services-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Sobre Nosotros</h1>
                <div class="row_one">
                    <p>Itt cuenta con muchos desarrollos en su corta experiencia, ofreciendo el mejor servicio de desarrollo y mantenimiento en el mercado de software.<br>CouchInn esta en proceso de desarrollo, toda critica constructiva sera muy bien recibida.</p>
                    <div class="left">
                        <img class="img-circle" src="../images/marcos.jpg" tittle="Iriarte Bosnic">
                        <h2>Marcos Matias</h2>
                        <p>Apasionado del piano, le gusta el pollito Pio y la excusa es Ronnie. Es de pocas pulgas.</p>
                    </div>

                    <div class="center">
                        <img class="img-circle" src="../images/yato.jpg" tittle="Taus">
                        <h2>Yato</h2>
                        <p>Es de esas que canta en el bondi. Si la haces reir, llora. Ama innemsamente a los viejitos simpaticos.</p>
                        </div>

                        <div class="right">
                            <img class="img-circle" src="../images/lucia.jpg" title="Torres Collivadino">
                            <h2>Lucia</h2>
                            <p>La Acade le corre por las venas. 
                                Amante de Milito y fanatica del dulce de leche.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="faqs" class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Sección de Preguntas Frecuentes</h1>
                    </div>
                </div>
            </div>
        </section>

        <!-- jQuery -->
        <script src="../dist/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Scrolling Nav JavaScript -->
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/scrolling-nav.js"></script>
    </div>
</body>
<!-- FOOTER -->
<footer>
  <p align="center">Ingenieria de Software II - FI UNLP</p>
  <a align="center" class="back-to-top" style="display: inline" href=#>Back to Top</a>
</footer>
</html>   