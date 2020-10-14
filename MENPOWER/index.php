<?php
	include_once 'app/conexion.inc.php';
	include_once 'app/Controlsesion.inc.php';
	include_once 'app/validarlogin.inc.php';
	include_once 'app/redireccionamientos.inc.php';
    
	
	if(Control_Sesion::sesion_iniciada()){    
	}
	
	if (isset($_POST['butlogin'])) {
    conexion:: abrir_conexion();

    $validar = new Validar_Login($_POST['username'], $_POST['pass'], conexion::obtener_conexion());

    if ($validar->Obtener_Error() === '' && !is_null($validar->Obtener_usuariol())) {
        //iniciar sesion       
		
		Control_Sesion::Iniciar_Sesion($validar -> Obtener_usuariol() -> Obtener_ususario(), $validar -> Obtener_usuariol() -> Obtener_Correo(),
		$validar -> Obtener_usuariol() -> Obtener_Id_Rol(),$validar -> Obtener_usuariol() -> Obtener_Seltiporol());
        
		$rol=$validar -> Obtener_usuariol() -> Obtener_Seltiporol();
        
        //redirigir a la pagina p
        if($rol == 2){
            echo $rol;
            Redireccion :: Redirigir(RUTA_INICIO_ADMIN);
            
        }        
        else  {
            echo $rol;
            Redireccion :: Redirigir(RUTA_INICIO_ADMIN);
        }
		
		} 
    
    conexion::cerrar_conexion();
}

$titulo = 'Pagina Login';


	include_once 'plantillas/header.inc.login.php';
 ?>
  
    

    <div class="limiter">
		<div class="container-login100" style="background-image: url('assets/images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				
				<form role="form" id="login" class="login100-form validate-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
					<span class="login100-form-title p-b-49">
						Login
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Type your username" <?php if (isset($_POST['butlogin']) && isset($_POST['username']) && !empty($_POST['username'])) {echo 'value="' . $_POST['username'] . '"';}?>>						
						<span class="focus-input100" data-symbol="&#xf206;"></span>						
					</div>
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>						
					</div>
					<?php
						if (isset($_POST['butlogin'])) {
							$validar->Mostrar_Error();
						}
                    ?>
					<div class="text-right p-t-8 p-b-31">
						<a href="#">
							Forgot password?
						</a>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" name="butlogin">
								Login
							</button>
						</div>
					</div>

					<div class="txt1 text-center p-t-54 p-b-20">
						<span>
							<a href="crearusuario.php" class="txt2">
								Registrarse
							</a>
						</span>
					</div>

					<div class="flex-c-m">
						<a href="#" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="login100-social-item bg2">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="#" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div>

					<div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							Or Sign Up Using
						</span>

						<a href="#" class="txt2">
							Sign Up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
    
  <?php
  include_once 'plantillas/footer.inc.login.php';

