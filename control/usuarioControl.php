<?php

require( __DIR__ . '/../modelo/class.Usuario.php');

$accion = $_GET['accion'];

switch($accion){
	case 'registrar':
				regDatos();
	break;
	case 'ingresar':
				ingDatos();
	break;
	case 'actualizar':
				actualizar();
	break;
    case 'buscar':
    			buscar();
    break;
	case 'cerrar':
				cerrarSes();
	break;
}

	function regDatos(){
		$usuario = new Usuario(); // llamamos la clase usuario;
		$correo = $_POST['email'];
		$contrasena = md5($_POST['contrasena']);
		$respuesta = $usuario->nuevoUsuario($correo,$contrasena);
		if($respuesta != 'error'){
			header('location:../registroForm.php?valor=registrado');
		}else {
			header('location:../registroForm.php?valor=no-registrado');
		}
	}

	function ingDatos(){
		$usuario = new Usuario();
		$correo = $_POST['email'];
		$contrasena = md5($_POST['contrasena']);

		$respuesta = $usuario->ingresoUsuario($correo,$contrasena);
		if($respuesta != 'error'){
			if($respuesta["idRegistros"] == 1){
				session_start();
				$_SESSION['loggedin'] = true;
				$_SESSION['user'] = $respuesta;
				$correo = $respuesta['correo'];
				echo "<script>
				sessionStorage.setItem('usuario','$correo');
				window.location='../sudo.php';
				</script>";
			} else {
				session_start();
				$_SESSION['loggedin'] = true;
				$_SESSION['user'] = $respuesta; 
				$correo = $respuesta['correo'];
				echo "<script>
				sessionStorage.setItem('usuario','$correo');
				window.location='../perfil.php';
				</script>";
				//header('location:../perfil.php');
			}
		} else {
			header('location:../registroForm.php?datos-invalidos');
		}
	}

	function actualizar(){
		$usuario = new Usuario;
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$genero = $_POST['genero'];
		$cumpleaños = $_POST['cumpleaños'];
		$respuesta = $usuario->actualizarDatos($nombre,$apellido,$genero,$cumpleaños);
		header('location: ../perfil.php');
	}

	function buscar(){
		$usuario = new Usuario();
		$dato = $_POST['buscador'];
		echo "<script>
		localStorage.clear();
		</script>";
		$usuario->buscarDato($dato);
	}

	function cerrarSes(){
		session_destroy();
		echo "<script>
			sessionStorage.clear();
			localStorage.clear();
			window.location='../index.html';
		</script>";
	}
?>

