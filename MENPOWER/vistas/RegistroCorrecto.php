<?php
	include_once '../app/config.inc.php';
	include_once '../app/redireccionamientos.inc.php';
	

	if(isset($_GET['nombres']) && !empty($_GET['nombres'])){
		$nombres = $_GET['nombres'];
	} else{
		Redireccion :: Redirigir(SERVIDOR);
	}
	$titulo = 'Registro Correcto';


	include_once '../plantillas/header.vistas.inc.login.php';
 ?>
  
    

    <div class="limiter">
		<div class="container-login100" style="background-image: url('../assets/images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				
					<span class="login100-form-title p-b-49">
						Registro Correcto
					</span>
					<span class="login100-form-title p-b-49">
						Bienvenido <?php echo $nombres;?> 
					</span>					
					<span class="login100-form-title p-b-49">
						<a href="<?php echo RUTA_INICIO_2; ?>" id="i"><span class="glyphicon glyphicon glyphicon-log-out"></span> INICIAR SESION </a>
					</span>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="" name="butlogin">
								
                                <a href="<?php echo RUTA_INICIO_2; ?>" id="i"><span class="glyphicon glyphicon glyphicon-log-out"></span> Login </a>
							</button>
						</div>
					</div>
					
				
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
    
  <?php
  include_once '../plantillas/footer.vistas.inc.login.php';

