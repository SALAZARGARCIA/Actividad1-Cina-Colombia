<?php
class conexion //clase principal
{
public function __construct() //Método Constructor de la clase
{
$this->con = new mysqli("localhost", "root", "", "poo"); // servidor , usuario db, base de datos
if($this->con->connect_errno)
{
die("Fallo al conectar a la BD: (". $this->con->connect_errno.")"); //Muestra error si
}
}
public function CloseDB() // Método que Cierra conexión a DB
{
$this->con->close();
}

public function logueo($usuario)
{
$q = "select * from usuario where usuario='$usuario'";
$consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
return $consulta;
}
}

?>