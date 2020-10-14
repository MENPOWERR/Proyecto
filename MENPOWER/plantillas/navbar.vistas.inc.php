<?php
include_once '../app/config.inc.php';
include_once '../app/Controlsesion.inc.php';
?>

<div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

	<?php
		if (Control_Sesion::sesion_iniciada()) {
			?>
    <header class="site-navbar py-4" role="banner">

      <div class="container">
        <div class="row align-items-center">


          <div class="col-3">
            <h1 class="site-logo"><a href="index.html" class="h2">MENPOWER<span class="text-primary">.</span> </a></h1>
          </div>
          <div class="col-9">
            <nav class="site-navigation position-relative text-right text-md-right" role="navigation">



              <div class="d-block d-lg-none ml-md-0 mr-auto"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="active">
                  <a href="<?php echo RUTA_INICIO_ADMIN; ?>">Home</a>
                </li>
                <li><a href="#">About</a></li>
                <li>!Hola!  <?php echo $_SESSION['Username']; ?></li>
                <li><a href="<?php echo RUTA_LOGOUT; ?>" id="i"><span class="glyphicon glyphicon glyphicon-log-out"></span> CERRAR SESION </a></li>
              </ul>
            </nav>


          </div>

        </div>
      </div>
      
    </header>

<?php } ?>



