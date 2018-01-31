<?php
include("conexion.php"); // incluye el archivo conexion.php el cual se conecta a la base de datos
$df=new conexion; // Crea un objeto a partir de la clase conexión para inicializar constructor
class clases extends conexion { // Crea una clase que hereda de la clase conexión

public function verifica($dato) //Método que verifica si el usuario existe
{
$q = "select * from usuario where usuario='$dato'";
$consulta = $this->con->query($q) or die ('Error!' . mysql_error());
return $consulta;
}
public function registro($usu,$nom,$ape,$pass) // Método que recibe 4 parámetros
{
//$q = "INSERT INTO 'usuario' ('usuario','nombre','apellido','contrasena') VALUES ('$usu','$nom','$ape','$pass')";

$q="INSERT INTO `usuario`(`usuario`, `nombre`, `apellido`, `contrasena`) VALUES ('$usu','$nom','$ape','$pass')";
$consulta = $this->con->query($q) or die ('failed!' . mysql_error());
return $consulta;
}
// Se realiza inserción a la base de datos y retorna el resultado en la variable $consulta

public function logueo($usuario)
{
$q = "select * from usuario where usuario='$usuario'";
$consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
return $consulta;
}
}

header("Location:vista/formulario1.php?a=$dato")


?>