<!DOCTYPE html>
<html lang="en">
<title>Contacto - Defensa Penal Norte</title>
<?php require 'partials/head.php'?>
<body class="subpage" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- Navigation Section -->
<div class="navbar custom-navbar wow fadeInDown" data-wow-duration="2s" role="navigation" id="header">
  <div class="container"> 
    
    <!-- NAVBAR HEADER -->
    <?php require 'partials/navbar-header.php'?>
    
    <!-- NAVIGATION LINKS -->
    <div class="collapse navbar-collapse">
      <ul id="ejm2" class="nav navbar-nav navbar-right">
        <li class=""><a href="noticias.php">NOTICIAS</a></li>
        <li class=""><a href="nuestro-equipo.php">NUESTRO EQUIPO</a></li>
        <li class=""><a href="servicios.php">NUESTROS SERVICIOS</a></li>
        <li><a href="nuestros-casos.php">NUESTROS CASOS</a></li>
        <li class="active"><a href="contacto.php">CONTACTANOS</a></li>
        <li><span class="calltxt"><i class="fa fa-whatsapp" aria-hidden="true"></i> +56966753828</span></li>
      </ul>
    </div>
  </div>
  <br>
</div>

<!-- Page Title start -->
<br><br><br><br><br>
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">CONTACTANOS</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="index.php">Home</a> / <span>Contáctanos</span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End --> 

<!-- Google Map Section -->
<div id="mapa">
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5588.855344737103!2d-71.24833367652559!3d-29.913955116637265!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9691ca7ea4655ed1%3A0x707ac43439e09f02!2sDefensores+Norte+Spa!5e0!3m2!1ses!2scl!4v1558406647001!5m2!1ses!2scl" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen>
  </iframe>
</div>

<!-- Contact Section -->
<div id="contact" class="parallax-section">
  <div class="container"> 
    
    <!-- SECTION TITLE -->
    <div class="section-title">
      <h3>Escríbenos</h3>
    </div>
    <div class="row">
      <div class="col-md-5">
        <div class="contact-now">
          <div class="contact"> <span><i class="fa fa-home"></i></span>
            <div class="information"> <strong>Dirección:</strong>
              <p>Benavente #1435, La Serena</p>
            </div>
          </div>
          <!-- Contact Info -->
          <div class="contact"> <span><i class="fa fa-envelope"></i></span>
            <div class="information"> <strong>Email:</strong>
              <p>contacto@defensoresnorte.cl</p>
            </div>
          </div>
          <!-- Contact Info -->
          <div class="contact"> <span><i class="fa fa-phone"></i></span>
            <div class="information"> <strong>Teléfonos:</strong>
              <p><strong>Mesa Central</strong> : 51 252 1413 / 51 221 4097 </p>
              <p><strong>Fono Celular</strong> : +56 51 221 4097 </p>
              <p><strong>Finanzas</strong> : +569 66753828</p>
            </div>
          </div>
          <!-- Contact Info -->
          <div class="contact"> <span><i class="fa fa-bullhorn"></i></span>
            <div class="information"> <strong>Redes Sociales:</strong>
              <a href=""><i class="fa fa-2x fa-linkedin-square" aria-hidden="true"></i></a>
              <a href="https://www.facebook.com/www.defensoresnorte.cl/"><i class="fa fa-2x fa-facebook-square" aria-hidden="true"></i></a>
              <a href=""><i class="fa fa-2x fa-instagram" aria-hidden="true"></i></a>
            </div>
          </div>  
 
        </div>
      </div>
      <div class="col-md-7"> 
        <!-- CONTACT FORM HERE -->
        <br><br>
        <div class="contact-form">
          <form id="contact-form" class="row">
            <div class="col-md-6 col-sm-6">
              <input type="text" class="form-control" name="name" placeholder="Nombre">
            </div>
            <div class="col-md-6 col-sm-6">
              <input type="email" class="form-control" name="name" placeholder="Apellido">
            </div>
            <div class="col-md-6 col-sm-12">
              <input type="text" class="form-control" name="phone" placeholder="Teléfono">
            </div>
            <div class="col-md-6 col-sm-12">
              <input type="text" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="col-md-12 col-sm-12">
              <textarea class="form-control" rows="5" name="message" placeholder="Mensaje"></textarea>
            </div>
            <div class="col-md-12">
              <button id="submit" type="submit" class="form-control" name="submit">Enviar Mensaje</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
 
<!-- footer -->
<?php require 'partials/footer.php'?>

<!-- Bootstrap --> 
<script src="js/jquery-2.1.4.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 

<!-- Google Map --> 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMqMG_n4C0aAi3F8a82Q6s3hxDLrTXxe8&callback=initMap" async defer></script> 
<script src="js/gmap.js"></script>
</body>
</html>