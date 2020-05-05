<?php
// necesitamos la conexion por eso llamamos nuestra conexion
require(__DIR__ . '/../config/class.Conexion.php');
class Usuario{
	public function __construct() {

	}

	// la persona puede ingresar
	public function nuevoUsuario($email,$password){
		if(isset($email)&&empty($email)) {
			if(isset($password)&&empty(($password))){
				return 'error';
			}
		} else {
			$db = new Conexion();
		    $sql = "SELECT*FROM registros WHERE correo='$email' AND contrasena='$password'";
		    $result = $db->query($sql);
		    if($result->num_rows > 0){
				return 'error';
		    } else {
				$db = new Conexion();
		    	$sql = "INSERT INTO registros (correo,contrasena) VALUES ('$email','$password')";
		   		$nuevoUsu = $db->query($sql);
		   		$sql2 = "SELECT @@IDENTITY FROM registros ";
		   		$posi= $db->query($sql2);
		   		$posicion = mysqli_fetch_all($posi);
		   		$posReg = $posicion[0][0];
                $sql3 = "INSERT INTO usuarios (nombre,apellido,genero,fechaNacimiento,idEstado,idTipoUsuario,idRegistros) VALUES ('nombre','apellido','genero','cumpleaños','1','3','$posReg')";
		   		$db->query($sql3);
		   		
			}
		}
		
	}

	// la persona puede ingresar
	public function ingresoUsuario($email,$password){
		if(isset($email)&&empty($email)&&isset($password)&&empty($password)){
			return 'error';
		} else {
			$db = new conexion();
			$sql = "SELECT*FROM registros WHERE correo='$email' AND contrasena ='$password'";
			$busqueda = $db->query($sql);
			if($busqueda->num_rows > 0){
				$columna = $busqueda ->fetch_assoc();
				return $columna;
			} else{
				return 'error';
			}
		}
	}

	// actualizar datos
    public function actualizarDatos($nombre,$apellido,$genero,$cumpleaños){
    	
    }
	//buscar

	public function buscarDato($dato){
		$db = new Conexion();
		$sql = "SELECT*FROM libros WHERE nombre LIKE '%$dato%'";
		$busqueda = $db->query($sql);
		$bus = mysqli_fetch_all($busqueda);
		$rows = $busqueda->num_rows;
			for($i = 0 ; $i < $rows ; $i++){
				$imagen = $bus[$i][1];
				$nombre = $bus[$i][2];
				$autor = $bus[$i][3];
				$editorial = $bus[$i][4];
				$existencia = $bus[$i][5];
				$precio = $bus[$i][6];
				$categoria = $bus[$i][7];
                $subCat = $bus[$i][8];

	   			echo "<script language='javascript' type='text/javascript'>	 
	   			imagen = 'imagen' + '$i';
	   			nombre = 'nombre' + '$i';
	   			autor = 'autor' + '$i';
	   			editorial = 'edit' + '$i';
	   			existencias = 'exis' + '$i';
	   			precio = 'prec' + '$i';
	   			categoria = 'cat' + '$i';
	   			subcategoria = 'sub' + '$i';
	   			localStorage.setItem('cantidad','$rows');
	   			localStorage.setItem(imagen,'$imagen'); 			
		    	localStorage.setItem(nombre,'$nombre');
		    	localStorage.setItem(autor,'$autor');
		    	localStorage.setItem(editorial,'$editorial');
		    	localStorage.setItem(existencias,'$existencia');
		    	localStorage.setItem(precio,'$precio');
		    	localStorage.setItem(categoria,'$categoria');
		    	localStorage.setItem(subcategoria,'$subCat');
		 		</script>"; 			
	   		}
	    echo "<script>
	   	    function redireccionar(){
	   	    console.log('listo');	
	   	    window.location='../perfil.php';	
		    }
		    setTimeout(redireccionar,500);
			</script>";
        }
}

?>
