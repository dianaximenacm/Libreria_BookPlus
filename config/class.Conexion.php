<?php 
class Conexion extends mysqli{
    // Declaramos las variables
	private $DB_HOST ='localhost'; // nombre del host
	private $DB_USER = 'root';     // nombre del usuario por defecto root
	private $DB_PASS = '';    // password del usuario por defecto mysql
	private $DB_NAME = 'libreria'; // nombre de la base de datos
    // Declaramos el contructor

    public function __construct(){
    // se aplica la herencia
    parent:: __construct($this->DB_HOST,$this->DB_USER,$this->DB_PASS,$this->DB_NAME);
    $this->set_charset('utf-8'); // como se envian los datos desde php
    // Declaramos si la conexion fue exitosa o no

    $this->connect_errno ? die('Error desde la conexion' . mysqli_connect_errno()) : $conectado = "Conectado";

    }
}

?>
