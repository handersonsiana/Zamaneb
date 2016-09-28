
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="image/zam.ico">

    <title>INICIO</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
     <script src="js/validacionesjs.js"></script>
    


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    
  </head>
<!-- NAVBAR
================================================== navbar navbar-inverse navbar-fixed-top , para que la barra este arriba-->
<!-- NAVBAR
================================================== navbar navbar-inverse navbar-static-top , para que la barra estatica-->

  <body>

<?php
require_once('include/menu_cabecera.php');

?>

			
    

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" srcset = " 1x small.jpg, 2x large.jpg "  src="image/img10.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Misión</h1>
              <p>Somos una Institución educativa privada comprometida a propocionar una formación acádemica con la finalidad de formar ciudadanos preparados para enfrentar con éxito los retos del futuro en un mundo globalizado a través de sólidas bases científicas, tecnológicas y morales. Para ello contamos con personal altamente calificado y promovemos la actualización docente.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Leer mas...</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" srcset = " 1x small.jpg, 2x large.jpg " src="image/img9.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Visión</h1>
              <p>Ser líderez en la formación integral de alumnos capaces de trazar y alcanzar sus metas y ser elementos propositivos y participativos en una Guatemala ávida de líderez visionarios y profesionales dispuestos a triunfar y transformar la sociedad en que viven, bajo los conceptos de equidad y valores.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Leer mas...</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" srcset = " 1x small.jpg, 2x large.jpg " src="image/img11.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Familia Zamaneb</h1>
              <p>Formar alumnos críticos, creativos, cooperativos, participativos e Investigadores, que asuman papeles protagónicos en la sociedad donde viven, evalúen críticamente los mensajes recibidos a través de diferentes medios y desarrollen una conciencia de solidaridad nacional e internacional.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Leer mas...</a></p>
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
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="image/img4.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Mecanografía</h2>
          <p>Mantener las muñecas levitando alzadas sobre el teclado, no apoyadas sobre el escritorio, para evitar lesiones.</p>
          <p><a class="btn btn-default" href="#" role="button">Ver Detalles &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="image/img6.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Computación</h2>
          <p>El cuerpo de conocimiento de las ciencias de la computación es frecuentemente descrito como el estudio sistemático de los procesos algorítmicos que describen y transforman información: su teoría, análisis, diseño.</p>
          <p><a class="btn btn-default" href="#" role="button">Ver Detalles &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="image/img4.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Reparación</h2>
          <p>El Alumno adquirirá capacidades para proveer asistencia técnica en la instalación, uso, mantenimiento, actualización y reparación de hardware como de software.</p>
          <p><a class="btn btn-default" href="#" role="button">Ver Detalles &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

     

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">Contacto:Rabinal Baja Verapaz</div>
        <div class="col-md-5">Dirección:Zona1</div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
    

<?php
require_once('include/footer.php');
?>




    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

