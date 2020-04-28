<?php

/* Creamos nuestro modelo de Producto a partir de una clase */

require(__DIR__ . '/../config/class.Conexion.php');

class Producto{

    public function __construct(){

    }

    // método agregar Producto
    public function agregarProducto($nombreProducto, $idUsuario){

        $db = new Conexion();

        # NOW() función propia de PHP que nos permite guardar en BD la fecha actual extraída desde el pc
        $sql = "INSERT INTO productos (nombre, fecha, idUsuario) VALUES ('$nombreProducto', NOW(), '$idUsuario')";

        $db->query($sql) ? header('Location: ../perfil.php?res=Producto_Agregado') : header('Location: ../perfil.php?res=error');
    }

    // método mostrar Productos
    public function mostrarProductos(){
        $db = new Conexion();

        $sql = "SELECT p.*, u.* FROM productos AS p INNER JOIN usuarios AS u ON p.idUsuario = u.id";

        $result = $db->query($sql);

        if($result->num_rows > 0){
            $row = mysqli_fetch_all($result);
            return $row;
        } else {
            return 'error';
        }
    }

}

?>