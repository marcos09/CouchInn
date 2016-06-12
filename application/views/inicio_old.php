<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Usage Instructions: Make sure to include the scrolling-nav.js, jquery.easing.min.js, and scrolling-nav.css files. To make a link smooth scroll to another section on the page, give the link the .page-scroll class and set the link target to a corresponding ID on the page. -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
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

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

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
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>CouchInn</h1>
                    <!-- <p><strong>Usage Instructions:</strong> Make sure to include the <code>scrolling-nav.js</code>, <code>jquery.easing.min.js</code>, and <code>scrolling-nav.css</code> files. To make a link smooth scroll to another section on the page, give the link the <code>.page-scroll</code> class and set the link target to a corresponding ID on the page.</p>
                    <a class="btn btn-default page-scroll" href="#about">Click Me to Scroll Down!</a> -->
                </div>
            </div>
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
                    <h1>Sección Sobre Nosotros</h1>
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

</body>

</html>
