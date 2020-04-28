<?php

/* 
Este archivo validará los campos que se envían desde el formulario y
instanciará la clase Usuario para acceder al método agregarUsuario()
*/

require(__DIR__ . '/../modelo/class.Usuario.php'); #requerimos el archivo de la clase Usuario

$accion = $_GET['accion'];

switch($accion){
    case 'registrar':
        insertar();
        break;
    case 'login':
        login();
        break;
    case 'cerrar':
        cerrarSesion();
        break;
}

// $usuario = new Usuario();

function insertar(){
    $usuario = new Usuario(); #instanciamos la clase Usuario

    // Traemos los datos del formulario
    $nom = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['correo'];
    $pass = $_POST['contrasena'];

    $usuario->agregarUsuario($nom, $apellido, $email, $pass);

}

function login(){
    $usuario = new Usuario();

    $email = $_POST['correo'];
    $pass = $_POST['contrasena'];

    $result = $usuario->iniciarSesion($email, $pass);

    if($result != 'error'){
        // vamos a crear una sesión para nuestro usuario con PHP
        session_start(); #abrimos una sesión de usuario
        $_SESSION['loggedin'] = true; #verdadero en el caso de existir datos de la sentencia sql para crear la sesión
        $_SESSION['user'] = $result; #guardamos los datos de nuestro usuario logueado en un campo del array asociativo

        header('Location: ../perfil.php'); #redirigimos a una nueva pestaña
    } else {
        // header('Location: ../index.php?res=usuario_inexistente');
        echo 'Tus datos no son válidos';
    }
}

function cerrarSesion(){
    session_destroy(); #destruimos la sesión
    header('Location: ../index.php');
}

?>