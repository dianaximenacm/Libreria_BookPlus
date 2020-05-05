<?php
// la carpeta donde esta el archivo de conexion.
require(__DIR__ . '/../config/class.Conexion.php');

class Libro {

   public function __construct(){

   }

   //producto nuevo 
   public function nuevoProducto($img,$nomLibro,$autLibro,$edi,$exiLibro,$preLibro,$categoria,$subCaLibro,$estado){
        $db = new Conexion();
        $nombreImg = $img;
        $carpeta = '../files/';
        $carpeta2 = 'files/';
        opendir($carpeta); #abrimos la carpeta donde queremos guardar los archivos
        $destino = $carpeta.$_FILES['imagen']['name'];#capturamos la imagen/files/imagen.png
        $destino2 = $carpeta2.$_FILES['imagen']['name'];
        move_uploaded_file($_FILES['imagen']['tmp_name'],$destino);
        $sql = "INSERT INTO libros (imagen,nombre,autor,editorial,existencias,precio,idCategoria,idSubcategoria,idEstado) VALUES ('$destino2','$nomLibro','$autLibro','$edi','$exiLibro','$preLibro','$categoria','$subCaLibro','$estado')";
        $db->query($sql);  
        print_r($img);
   }

   public function consulta($dato){
        $db = new Conexion();
        $sql = "SELECT * FROM libros WHERE nombre LIKE '%$dato'";
        $respuesta = $db->query($sql);
        $datos = mysqli_fetch_all($respuesta);
        $id = $datos[0][0];
        $imagen = $datos[0][1];
        $nombre = $datos[0][2];
        $autor = $datos[0][3];
        $editorial = $datos[0][4];
        $existencias = $datos[0][5];
        $precio = $datos[0][6];
        $idCat = $datos[0][7];
        $idSub = $datos[0][8];
        $estado = $datos[0][9];

        echo "<script>
               localStorage.setItem('id','$id');
               localStorage.setItem('imagen','$imagen');
               localStorage.setItem('nombre','$nombre');
               localStorage.setItem('autor','$autor');
               localStorage.setItem('editorial','$editorial');
               localStorage.setItem('existencias','$existencias');
               localStorage.setItem('precio','$precio');
               localStorage.setItem('idCat','$idCat');
               localStorage.setItem('idSub','$idSub');
               localStorage.setItem('estado','$estado');
               window.location=' ../sudo.php?value=ConsultaLibro';
              </script>";
   }

   // modificar producto
   public function modificarProducto($id,$campo,$valor){
        $db = new Conexion();
        $sql = "UPDATE libros SET $campo = '$valor' WHERE idLibro = '$id'";
        $db->query($sql);
   }

   // eliminar un libro

   public function eliminar($fila){
        $db = new Conexion();
        $sql = "DELETE FROM libros WHERE idLibro='$fila'";
        $db->query($sql);
   }

   // agregar nuevo admin

   public function nuevoAdm($nombre,$apellido,$correo,$telefono){
        $db = new Conexion();
        $sql = "INSERT INTO administradores (nombre,apellido,correo,telefono) VALUES ('$nombre','$apellido','$correo','$telefono')";
        $db->query($sql);
   }
   
   // agregar categoria  

   public function agregarCategoria($categoria,$estado){
        $db = new Conexion();
        $sql = "INSERT INTO categorias (descripcionCate,idEstado) Values ('$categoria','$estado')";
        $db->query($sql);

   }

   // agregar subCategoria

   public function agregarsubCategoria($subCate,$estado){
        $db = new Conexion();
        $sql = "INSERT INTO subcategorias (subcategoria,idEstado) Values ('$subCate','$estado')";
        $result = $db->query($sql);
   }
}
?>
