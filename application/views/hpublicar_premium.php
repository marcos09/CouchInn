<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="/favicon.ico">
  <script src="../dist/js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/holder.min.js"></script>
  <script src="js/ie10-viewport-bug-workaround.js"></script>


  <title>Publicar Couch</title>


<!-- jQuery -->
<script src="../dist/js/jquery.js"></script>

    <!-- Placed at the end of the document so the pages load faster
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script> -->

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/holder.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

  <!-- Bootstrap core CSS -->
  <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="../../dist/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="js/ie-emulation-modes-warning.js"></script>
  <!-- Custom CSS -->
  <link href="../dist/css/scrolling-nav.css" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script type='text/javascript' src="../validacion.js"></script>


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

      <style type="text/css">

          /* GLOBAL STYLES
          -------------------------------------------------- */
          /* Padding below the footer and lighter body text */

          body {
            padding-bottom: 40px;
            color: #5a5a5a;
          }


/* CUSTOMIZE THE NAVBAR
-------------------------------------------------- */

/* Special class on .container surrounding .navbar, used for positioning it into place. */
.navbar-wrapper {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  z-index: 20;
}

/* Flip around the padding for proper display in narrow viewports */
.navbar-wrapper > .container {
  padding-right: 0;
  padding-left: 0;
}
.navbar-wrapper .navbar {
  padding-right: 15px;
  padding-left: 15px;
}
.navbar-wrapper .navbar .container {
  width: auto;
}


/* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

/* Carousel base class */
.carousel {
  height: 500px;
  margin-bottom: 60px;
}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  z-index: 10;
}

/* Declare heights because of positioning of img element */
.carousel .item {
  height: 500px;
  background-color: #777;
}
.carousel-inner > .item > img {
  position: absolute;
  top: 0;
  left: 0;
  min-width: 100%;
  height: 500px;
}

/* MARKETING CONTENT
-------------------------------------------------- */

/* Center align the text within the three columns below the carousel */
.marketing .col-lg-4 {
  margin-bottom: 20px;
  text-align: center;
}
.marketing h2 {
  font-weight: normal;
}
.marketing .col-lg-4 p {
  margin-right: 10px;
  margin-left: 10px;
}


/* Featurettes
------------------------- */

.featurette-divider {
  margin: 30px 0; /* Space out the Bootstrap <hr> more */
}

.row-featurette{
  background: #EAFAF1;
}


/* Thin out the marketing headings */
.featurette-heading {
  font-weight: 300;
  line-height: 1;
  letter-spacing: -1px;
}


/* RESPONSIVE CSS
-------------------------------------------------- */

@media (min-width: 768px) {
  /* Navbar positioning foo */
  .navbar-wrapper {
    margin-top: 20px;
  }
  .navbar-wrapper .container {
    padding-right: 15px;
    padding-left: 15px;
  }
  .navbar-wrapper .navbar {
    padding-right: 130px;
    padding-left: 130px;
    padding-top: 0px;
    padding-bottom: 5px;
  }

  /* The navbar becomes detached from the top, so we round the corners */
  .navbar-wrapper .navbar {
    border-radius: 4px;
  }

  /* Bump up size of carousel content */
  .carousel-caption p {
    margin-bottom: 20px;
    font-size: 21px;
    line-height: 1.4;
  }

  .featurette-heading {
    font-size: 25px;
    margin-left: 15px;
  }
  .lead {
    font-size: 16px;
    margin-left: 15px;
  }

  .text-muted{
    margin-left: 15px;
  }
}

@media (min-width: 992px) {
  .featurette-heading {
    margin-top: 100px;
  }
}

.experience{
  background: #EAFAF1;
}

.btn-lg{
  background-color: #2ECC71;
  color: white;
}

.title{
  font-family: "Gabriola";
}

</style>

</head>
<!-- NAVBAR
  ================================================== 


VER EL USO DEL BODY



  -->
<body>
  <div class="navbar-wrapper">
    <div class="container">

      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="../../index.php/inicio"> <img src="../../images/couchinn.png" class="img-responsive" alt="CouchInn" width="169" height="136"> </a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php 

                    $nombre = $user->nombre;
                    echo $nombre?><span class="caret"></span></a>
                    <?php
                    $idUsuario = $user->idUsuario;
                    $ruta = '../inicio/premium/' . "$idUsuario"
                    ?>
                <ul class="dropdown-menu">
                 <li><a active>Publicar couch</a></li>
                 <li><a href="#">Mis couchs</a></li>
                 <li><a href="#">Mis hospedajes</a></li>
                 <li><a href="#">Modificar datos</a></li>
                 <li><a href="#">Reservas</a></li>               
                 <li role="separator" class="divider"></li>
                 <!--      <li class="dropdown-header">Nav header</li> -->
                 <li><a href="../../index.php/usuarios/cerrar_sesion">Salir</a></li>
               </ul>
             </li>
           </ul>
         </div>
       </div>
     </nav>
   </div>
 </div>
