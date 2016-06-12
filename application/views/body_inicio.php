    <?php
    $accion = $this->session->flashdata('accion');
    if ($accion == 'premium') {
          ?>
          <div class="alert alert alert-success" style="margin-top: 50px">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>¡Bien!</strong> Ahora sos premium. Disfruta de los beneficios.
          </div>
          <?php
    } 
    ?>

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
