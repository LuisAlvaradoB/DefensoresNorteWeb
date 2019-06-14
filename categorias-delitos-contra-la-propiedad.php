<!DOCTYPE html>
<html lang="en">
<title>Noticias - Defensa Penal Norte</title>
<?php require 'partials/head.php' ?>

<body class="subpage" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

  <!-- Navigation Section -->
  <div class="navbar custom-navbar" role="navigation" id="header">
    <div class="container">

      <!-- NAVBAR HEADER -->
      <?php require 'partials/navbar-header.php' ?>

      <!-- NAVIGATION LINKS -->
      <div class="collapse navbar-collapse">
      <ul id="ejm2" class="nav navbar-nav navbar-right">
        <li class="active"><a href="noticias.php">NOTICIAS</a></li>
        <li class=""><a href="nuestro-equipo.php">NUESTRO EQUIPO</a></li>
        <li class=""><a href="servicios.php">NUESTROS SERVICIOS</a></li>
        <li><a href="nuestros-casos.php">NUESTROS CASOS</a></li>
        <li><a href="contacto.php">CONTACTANOS</a></li>
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
          <h1 class="page-heading">DELITOS CONTRA LA PROPIEDAD</h1>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="breadCrumb"><a href="index.php">Home</a> / <a href="noticias.php">Noticias</a> / <span>Delitos contra la propiedad</span></div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page Title End -->

  <div class="listpgWraper">
    <div class="container">
      <!-- Blog start -->
      <div class="row">
        <div class="col-md-8">
          <!-- Blog List start -->
          <div class="blogWraper">
            <ul class="blogList">
              <li>
                <div class="row">
                  <div class="col-md-5">
                    <div class="postimg"><img src="images/casos/casocarabineros21(1).jpg" alt="Blog Title">
                      <div class="date"> 10 JUN</div>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div class="post-header">
                      <h4><a href="noticia-10-06-19.php">Libertad para la detenida por irregularidad en el procedimiento policial.</a></h4>
                      <div class="postmeta">Por : <span>Cecilia Álvarez </span> Categoria : <a href="categorias-delitos-contra-la-propiedad.php">Delitos contra la propiedad</a></div>
                    </div>
                    <p>La autorización judicial para entrada y registro, solicitada con motivo de la detención de un sujeto con orden previa; se enmarca dentro de la primera hipótesis...</p>
                    <a href="noticia-10-06-19.php" class="Leer más">Leer más</a>
                  </div>
                </div>
              </li>
              <!-- <li>
                <div class="row">
                  <div class="col-md-5">
                    <div class="postimg"><img src="images/blog/2.jpg" alt="Blog Title">
                      <div class="date"> 17 SEP</div>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div class="post-header">
                      <h4><a href="#.">Duis ultricies aliquet mauris</a></h4>
                      <div class="postmeta">By : <span>Luck Walker </span> Category : <a href="#.">Movers, Shifting, Packers </a></div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu nulla eget nisl dapibus finibus. Maecenas quis sem vel neque rhoncus dignissim. Ut et eros rhoncus...</p>
                    <a href="#." class="readmore">Read More</a>
                  </div>
                </div>
              </li>
              <li>
                <div class="row">
                  <div class="col-md-5">
                    <div class="postimg"><img src="images/blog/3.jpg" alt="Blog Title">
                      <div class="date"> 17 SEP</div>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div class="post-header">
                      <h4><a href="#.">Duis ultricies aliquet mauris</a></h4>
                      <div class="postmeta">By : <span>Luck Walker </span> Category : <a href="#.">Movers, Shifting, Packers </a></div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu nulla eget nisl dapibus finibus. Maecenas quis sem vel neque rhoncus dignissim. Ut et eros rhoncus...</p>
                    <a href="#." class="readmore">Read More</a>
                  </div>
                </div>
              </li> -->
            </ul>
          </div>

          <!-- Pagination -->
          <div class="pagiWrap">
            <div class="row">
              <div class="col-md-4 col-sm-6">
                <div class="showreslt">Mostrando 1-10</div>
              </div>
              <div class="col-md-8 col-sm-6 text-right">
                <ul class="pagination">
                  <li class="active"><a href="#.">1</a></li>
                  <!-- <li><a href="#.">2</a></li>
                  <li><a href="#.">3</a></li>
                  <li><a href="#.">4</a></li>
                  <li><a href="#.">5</a></li>
                  <li><a href="#.">6</a></li>
                  <li><a href="#.">7</a></li>
                  <li><a href="#.">8</a></li> -->
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <!-- Side Bar -->
          <div class="sidebar">
        
            <!-- Categories -->
            <div class="widget">
              <h5 class="widget-title">Categorias</h5>
              <ul class="categories">
                <li><a href="#.">Ley de drogas</a></li>
                <li><a href="#.">Ley de armas</a></li>
                <li><a href="#.">Delitos sexuales</a></li>
                <li><a href="#.">Delitos contra la propiedad</a></li>
              </ul>
            </div>
            <!-- Recent Posts -->
            <?php require 'partials/recent-post-sidebar.php' ?>
            
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php require 'partials/footer.php' ?>

  <!-- Bootstrap -->
  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>