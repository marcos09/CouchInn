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

  <title>CouchInn</title>

  <!-- Bootstrap core CSS -->
  <link href="../dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="../dist/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

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
  ================================================== -->
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
              <a class="navbar-brand page-scroll" href="../index.php/inicio"> <img src="../images/couchinn.png" class="img-responsive" alt="CouchInn" width="169" height="136"> </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#about">Sobre nosotros</a></li>
                <li><a href="#preguntas">Preguntas frecuentes</a></li>
                <?php if($this->session->userdata('login')){?>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">nombre_usuario<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                     <li><a href="#">Mis couchs</a></li>
                     <li><a style="background-color: #95AC3C" href="#">Hacerme premium</a></li>
                     <li><a href="#">Mis hospedajes</a></li>
                     <li><a href="#">Modificar datos</a></li>
                     <li><a href="#">Reservas</a></li>               
                     <li role="separator" class="divider"></li>
                     <!--      <li class="dropdown-header">Nav header</li> -->
                     <li><a href="../index.php/usuarios/cerrar_sesion">Salir</a></li>


                   </ul>
                 </li>
                 <?php }else{ ?>
                  <li><a class="button" data-toggle="modal" href="#registrarse">Registrarse</a></li>
                  <li><a class="button" data-toggle="modal" href="#iniciar">Ingresar</a></li>
                  <?php } ?>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div> 

    
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="../images/caviahue.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Caviahue, Neuqu&eacute;n</h1>
              <p>Ven&iacute; a disfrutar y respirar aire puro del sur. <br>¡Caviahue te espera!</p>
              <p><a class="btn btn-lg btn-success" href="inicio/ver_couchs" role="button">Ver Couchs</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="../images/sur.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>El sur argentino te espera</h1>
              <p>Variedad en tipos de hospedajes y hermosos paisajes para disfrutar de una larga estad&iacute;a</p>
              <p><a class="btn btn-lg btn-success" href="inicio/ver_couchs" role="button">Ver Couchs</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="../images/cata.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Las Cataratas del Iguaz&uacute;</h1>
              <p>Paisajes &uacute;nicos para contemplar y disfrutar, mientras te hospedes en uno de los couchs disponible.</p>
              <p><a class="btn btn-lg btn-success" href="inicio/ver_couchs" role="button">Ver Couchs</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="../images/rio.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>R&iacute;o Limay, Bariloche</h1>
              <p>Alojate en uno de nuestros couchs y despreocupate de todo lo dem&aacute;</p>
              <p><a class="btn btn-lg btn-success" href="inicio/ver_couchs" role="button">Ver Couchs</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- Fin Carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

     <!-- Three columns of text below the carousel -->
     <div align="center" id="preguntas" class="row">
      <div class="title">
        <h1>Preguntas frecuentes</h1>
        <br>
      </div>
      <div>
        <h3 align="center">¿Qu&eacute; es y c&oacute;mo funciona?</h3>
        <p>Hay muchos viajeros que no saben c&oacute;mo usar <b>CouchInn</b>, una plataforma de alojamiento gratuito que es crucial para otros viajeros 
          los cuales se la pasan de hostel en hostel, reduciendo su presupuesto a la mitad. Algunos hasta trabajan la mañana para 
          pagar el alojamiento de la noche, adem&aacute;s, de esta forma,conviven con otros viajeros, lo que es sin 
          lugar a dudas enriquecedor y divertido, tienen mucho menos contacto con la gente local, pasando a veces por los sitios.<br><br>
          Hay mucha gente tambi&eacute;n que no se anima a viajar, porque cree no tener dinero suficiente, pero a&uacute;n prevalece la idea de que viajar es caro,
          sobre todo si pensamos en alojarnos en un resort. Tambi&eacute;n hay mucha gente que no viaja por ese miedo, por la idea de llegar solo a
          un lugar desconocido, solo y perdido. Por eso, aunque nunca lo cre&iacute; necesario, les hablo hoy de c&oacute;mo usar CouchInn: qu&eacute; es, c&oacute;mo 
          funciona, c&oacute;mo ser parte y tambi&eacute;n, por qu&eacute; no, c&oacute;mo ha sido una herramienta b&aacute;sica en mi viaje que me ha abierto muchas puertas y me ha dado la
          oportunidad de vivir muy valiosas y hermosas experiencias que, si me hubiese quedado siempre en hostales, seguramente no habr&iacute;a experimentado.</p><br>
          <h3 align="center">¿Cómo buscar alojamiento en CouchInn?</h3>
          <p>Inn <b>(hu&eacute;sped)</b><br><br>

            Eres un inn cuando necesitas alojamiento.<br><br>

            Para encontrar un couch dispuesto a alojarte deber&aacute;s usar la secci&oacute;n ver couchs en la p&aacute;gina principal. Solo debes escribir el nombre de la ciudad a la cual vas y la fecha de tu viaje...<br><br>
            Luego de eso aparece una lista con todos los couchs disponibles en esa regi&oacute;n y fechas que hayas especificado. A partir de ah&iacute; tendr&aacute;s que empezar a visitar los perfiles de cada uno para ver qu&eacute; es lo que ofrecen.<br><br>
            <p class="pull-center"><a href="../preguntas_frecuentes.php">Leer más...</a></p>
          </div>
          
        </div>
        <!-- /.row -->

        <!-- START THE FEATURETTES -->
        <hr class="featurette-divider">

        <!-- Three columns of text below the carousel -->
        <div align="center" id="about" class="row">
          <div class="title">
            <h1>Sobre Nosotros</h1>
            <h3>Los desarrolladores</h3>
            <br>
          </div>
          <div>
            <p>Itt cuenta con muchos desarrollos en su corta experiencia, ofreciendo el mejor servicio de desarrollo y mantenimiento en el mercado de software. Est&aacute; integrado por arduos trabajadores inform&aacute;ticos que cumplen con sus responsabilidades d&iacute;a a d&iacute;a. Actualmente nos encontramos trabajando para varios proyectos.<br>CouchInn est&aacute; en proceso de desarrollo, toda critica constructiva sera muy bien recibida para nuestro crecimiento.</p>
          </div>
          <br>
          <div class="col-lg-4">
            <img class="img-circle" src="../images/marcos.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Marcos Matias</h2>
            <p>Apasionado del piano, le gusta el pollito Pio y la excusa es Ronnie. Es de pocas pulgas.</p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="img-circle" src="../images/yato.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Yato</h2>
            <p>Es de esas que canta en el bondi. Si la haces reir, llora. Adora a los viejitos simpaticos.</p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="img-circle" src="../images/lucia.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Lucia</h2>
            <p>La Acade le corre por las venas. Amante de Milito y fanatica del dulce de leche.</p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
          </div>      
          <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->

<div class="modal fade" id="iniciar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="Registrar usuario" id="myModalLabel">Iniciar sesión</h4>
      </div>
      <div class="modal-body">
        <form style="padding: .5em" action="../index.php/usuarios" name="iniciar_sesion" method="post" onsubmit= "return validar2();">
          <div>               
            <p style="text-align: center">
              <label style="display: block; margin: .5em 0 0 0" for="email">Email</label> 
              <input type="email" name="mail" id="email" placeholder="usuario@ejemplo.com" required />
              
              <label style="display: block; margin: .5em 0 0 0" for="contraseña">Contraseña</label>
              <input type="password" name="passwd" required />
            </p>      

            <br>

       <!--  <div class="caption"> 
          <p class="text-right">
            <a class="btn btn-default" data-dismiss="modal" role="button">Cancelar</a>
            <a style="margin-left: 5px" type="submit" class="btn btn-success" role="button">Iniciar Sesión</a>
            </p>
          </div>
        -->
        <button class="btn btn-success" type="submit">Iniciar sesión</button>   
        <buttom class="btn btn-success" data-dismiss="modal">Cancelar</button>

          
        </div> 
      </form>
    </div>
    <div class="modal-footer">
      
    </div>
  </div>

</div>
</div>


<div class="modal fade" id="registrarse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="Registrar usuario" id="myModalLabel">Registrarse</h4>
      </div>
      <div class="modal-body">
        <form action="../agregar_usuario.php" name="registrar_usuario" method="post" onsubmit="return validar();">
          <div> 
            <label style="display: block; margin: .5em 0 0 0" for="name">Nombre:</label> 
            <input type="text" placeholder="Angélica Lopez" name="name" id="name" required />  * <br>
            
            <label style="display: block; margin: .5em 0 0 0" for="email">Email:</label> 
            <input type="email" name="email" placeholder="usuario@ejemplo.com" id="email" required /> *

            <label style="display: block; margin: .5em 0 0 0" for="contraseña">Contraseña:</label>
            <input type="password" name="contraseña" id="pass" required /> * <br>

            <label style="display: block; margin: .5em 0 0 0" for="contraseña2">Repetir contraseña:</label>
            <input type="password" name="contraseña2" id="pass2" required /> * <br>

            <label style="display: block; margin: .5em 0 0 0" for="telefono">Telefono:</label>
            <input type="number" name="telefono" placeholder=02214534394 id="phone" required /> <br>
            <span class="form_hint">No se aceptan espacios ni guiones. Solamente números</span> <br>

            <label style="display: block; margin: .5em 0 0 0" for="edad">Edad:</label>
            <input type="number" name="edad" placeholder= 20 id="edad" /> *<br>

            <div class="checkbox">
              <label>
                <input type="checkbox" required> Declaro ser mayor de 18 años y haber leido y aceptado los términos y condiciones del servicio
              </label>
            </div>
            Los campos marcados con * son obligatorios
            <br>
            
            <button class="btn btn-success" type="submit" id="registrarse">Registrar usuario</button> 
            <buttom class="btn btn-success" data-dismiss="modal">Cancelar</button>
             
            </form>

          </div> 
        </form> 
      </div>
    </div>
  </div>
</div>
<hr class="featurette-divider">

<!-- FOOTER -->
<footer>
  <p align="center">Ingenieria de Software II - FI UNLP</p>
  <p class="pull-right"><a href="#">↑ Arriba</a></p>
  <p>&copy; 2016 Itt. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
</footer>
</div> <!-- /.container -->

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

  </body>
  </html>