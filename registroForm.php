<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/registroStyle.css">
	<title>Inicio</title>
</head>
<body>

	<!-- primer nav de mi paguina-->
	<div id="contNav">
        <div id="logo">
			<img class="imglogo" src="files/Icons/logo.png" alt="">
        </div>	
	</div>	

	<div class="container" id="container">			 
			<div class="contenidoLibro">
				<div class="libro">
					<div class="paginaFrente" id="portada"></div>
					<div class="paginaAtras" id="trsf">
						<h1>Registrate</h1>
						<form action="control/usuarioControl.php?accion=registrar" method="POST">
  							<div class="form">
    							<label type="email"><b>Email</b></label><br>
    							<input type="text" placeholder="Email" name="email">

    							<label for="psw"><b>Contraseña</b></label>
    							<input type="password" placeholder="Contraseña" name="contrasena">

    							<label for="psw-repeat"><b>Repite Contraseña</b></label>
    							<input type="password" placeholder="Repite contraseña" name="psw-repeat">
								
								<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    							<button type="submit" class="registerbtn">Register</button>
  							</div>
						</form>
					</div>
				</div>
				<div class="libro">
					<div class="paginaFrente">
						<h1>Inicia Sesión</h1>
						<form action="control/usuarioControl.php?accion=ingresar" method="POST">
      						<div class="form">
								<label type="email"><b>Email</b></label><br>
        						<input type="text" name="email" placeholder="Email"><br>
								
								<label type="passwd"><b>Contraseña</b></label><br>
								<input type="password" name="contrasena" placeholder="Password"><br>
								
								<input type="submit" class="registerbtn" value="Login">
      						</div>
  						</form>
					</div>
					<div class="paginaAtras" id="portadaAtras"></div>
				</div>	
			</div>
		</div>
	</div>

<script src="js/registroApp.js"></script>
</body>
</html>