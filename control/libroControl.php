<?php

$accion = $_GET['accion'];

switch($accion){
    case 'nuevo':
                 nuevoProducto();
    break;
    case 'modificar':
                 modificarProducto();
    break;
    case 'categoria':
                 categoria();
    break;
    case 'subCategoria':
                 subCategoria();
    break;        
    
}

function nuevoProducto(){
    $producto = new Producto();
    $nombre = $_POST[''];
    $autor = $_POST[''];
    $editorial = $_POST[''];
    $existencias = $_POST[''];
    $precio = $_POST[''];
    $cate = $_POST[''];
    $subCate = $_POST[''];
    $estado = $_POST[''];
    $result = $producto->nuevoProducto($nombre,$autor,$editorial,$existencias,$precio,$cate,$subCate,$estado);
    header('location: ../sudo.php?value=ProductoNuevo');
}

function modificarProducto(){
    $producto = new Producto();
    $idProducto = $_POST[''];
    $columnaProducto = $_POST[''];
    $nuevoValor = $_POST[''];
    $producto->modificarProducto($idProducto,$columnaProducto,$nuevoValor);
    header('location: ../sudo.php?value=modificarProducto');

}

function categoria(){
    $producto = new Producto();
    $nueCategoria = $_POST[''];
    $estado = $_POST[''];
    $producto->agregarCategoria($nueCategoria,$estado);
}

function subCategoria(){
    $producto = new Producto();
    $nueCategoria = $_POST[''];
    $estado = $_POST[''];
    $producto->agregarsubCategoria($nueCategoria,$estado);
}

?>
