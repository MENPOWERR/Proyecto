<?php
	include_once 'app/conexion.inc.php';
	include_once 'app/usuario.inc.php';
	include_once 'app/validarRegistro.inc.php';
	include_once 'app/localstorage.inc.php';
	include_once 'app/redireccionamientos.inc.php';
    
	
	if (isset($_POST['enviar'])) {
		conexion :: abrir_conexion();

		$validar = new Validar_Registro($_POST['Username'],$_POST['pass1'], $_POST['pass2'], conexion :: obtener_conexion());
		
		
		if ($validar -> Registro_Validado()) {
			$Usuario = new Usuario( '',$validar -> obtener_Correo(), '',2,
					password_hash($validar -> obtener_Clave(), PASSWORD_DEFAULT));
			
			$Usuario_insertado = localstorage :: Insertar_Usuario(conexion :: obtener_conexion(), $Usuario);

			if ($Usuario_insertado) {
			   Redireccion :: Redirigir(RUTA_REGISTRO_CORRECTO . '?nombres=' . $Usuario -> Obtener_Correo());
			}
		}
		conexion :: cerrar_conexion();
	}

	$titulo = 'Pagina Registro';
	include_once 'plantillas/header.inc.login.php';
 ?>
  
    

    <div class="limiter">
		<div class="container-login100" style="background-image: url('assets/images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				
				<form role="form" id="login" class="login100-form validate-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
					<span class="login100-form-title p-b-49">
						Registro
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="Username" placeholder="Type your username"<?php if (isset($_POST['enviar'])) {echo 'value="' . $_POST['Username'] . '"';} ?>>
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
					<?php
						if (isset($_POST['enviar'])) {
							$validar->mostrar_error_correo();
						}
                    ?>
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass1" placeholder="Type your password1"<?php if (isset($_POST['enviar'])) {echo 'value="' . $_POST['pass1'] . '"';} ?>>
						<span class="focus-input100" data-symbol="&#xf190;"></span>
						
					</div>
					<?php
						if (isset($_POST['enviar'])) {
							$validar->mostrar_error_clave1();
                                }
                        ?>
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass2" placeholder="Type your password2"<?php if (isset($_POST['enviar'])) {echo 'value="' . $_POST['pass2'] . '"';} ?>>
						<span class="focus-input100" data-symbol="&#xf190;"></span>
						
					</div></br>
					<?php
						if (isset($_POST['enviar'])) {
							$validar->mostrar_error_clave2();
                                }
                        ?>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" name="enviar">
								Registrar
							</button>
						</div>
					</div>
					
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
    
  <?php
  include_once 'plantillas/footer.inc.login.php';

