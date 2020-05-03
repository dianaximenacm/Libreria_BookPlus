<?php
// la carpeta donde esta el archivo de conexion.
require(__DIR__ . '/../config/class.Conexion.php');

class Producto {

   public function __construct(){

   }

   //producto nuevo 
   public function nuevoProducto($nomLibro,$autLibro,$ediLibro,$exiLibro,$preLibro,$catLibro,$subCaLibro,$estado){
        $db = new Conexion();
        $sql = "INSERT INTO libros (nombre,autor,editorial,existencias,precio,idCategoria,idSubcategoria,idEstado) VALUES ('$nomLibro','$autLibro','$ediLibro','$exiLibro','$preLibro','$catLibro','$subCaLibro','$estado')";
        $result = $db->query($sql);
        
   }

   // modificar producto
   public function modificarProducto($id,$campo,$valor){
        $db = new Conexion();
        $sql = "UPDATE libros SET $campo = '$valor' WHERE idLibro = '$id'";
        result = $db->query($sql);
   }

   // agregar categoria

   public function agregarCategoria($categoria,$estado){
        $db = new Conexion();
        $sql = "INSERT INTO categorias (descripcionCate,idEstado) Values ('$categoria','$estado')";
        $result = $db->query($sql);

   }

   // agregar subCategoria

   public function agregarsubCategoria($subCate,$estado){
        $db = new Conexion();
        $sql = "INSERT INTO subcategorias (subcategoria,idEstado) Values ('$subCate','$estado')";
        $result = $db->query($sql);
   }
}
<?
