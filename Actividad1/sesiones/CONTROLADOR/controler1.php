<?php
include("../modelo/clases.php"); //Trae el archivo clases.php en cual se creara más adelante
if(isset($_POST["registrar"])) { // Verifica si el botón oprimido es el de registro



$usu=$_REQUEST['usu']; // Captura de valor de campos de formulario


$nom=$_REQUEST['nom'];
$ape=$_REQUEST['ape'];
$pass=$_REQUEST['pass'];
$pass = password_hash($pass,PASSWORD_DEFAULT); //Encriptación de la contraseña digitada
$objeto= new clases; // Creación de un objeto de la clase clases del archivo clases.php
$res=$objeto->verifica($usu); //Llamada mediante el objeto creado del método “verifica” con el parámetro usuario
//el resultado del método se asigna a la variable $res
if($res->num_rows == 1) //Verifica cuantos registro hay en el valor retornado $res (num_rows)
{
header("location:../vista/registro.php?dato1=no"); //si es = a 1, el usuario ya existe
}
else
{
$res=$objeto->registro($usu,$nom,$ape,$pass); //Si no es = 1 , llama al método “resgistro” con 4 parámetros
header("location:../vista/registro.php?dato=no"); //Redirige a página registro sin errores
}
$objeto->CloseDB(); // Cierra conexión a base de datos
}



if(isset($_POST["enviar"]))
{
$loginNombre = $_REQUEST["usu"];
$loginPassword=$_REQUEST['pass'];
$objeto= new clases;
$res=$objeto->logueo($loginNombre); //Ejecuta método y devuelve consulta para saber si el usuario esta
header("Location:vista/header.php?a=$loginNombre");


if($res->num_rows == 0)
{
header("location:../vista/seguridaddb.php?error=si"); //Redirige al index pasando la variable error
}
//En otro caso En $reg se guarda el resultado de la consulta. Al segundo posición de SESION se le asigna el id
//del usuario
else //Redirige a página logueada
{
$actor = $res->fetch_array(); // Obtiene una fila de resultados como un array asociativo, numérico, o ambos
if (password_verify($loginPassword,$actor["contrasena"]))
{
session_start();
$_SESSION["session"]= $actor["nombre"]." ".$actor["apellido"];
$_SESSION["validar"]="true";
if($actor["idrol"]=2)
{
header("location:../vista/usuario.php"); //Redirige a página de usuario

}
else
{
header("location:../vista/admin.php "); //Redirige a página de administrador
}
}
else // Si el password no es correcto
{
header("location:../vista/seguridaddb.php?usu=$usu");
}
}
$objeto->CloseDB();
}


/*OPERACION*/

if ($_REQUEST['radio1']=="suma") 

{
$result=$_REQUEST['valor1'] + $_REQUEST['valor2'];
echo "La suma es:".$result;
}

if ($_REQUEST['radio1']=="resta") 

{
$result=$_REQUEST['valor1'] - $_REQUEST['valor2'];
echo "La suma es:".$result;
}


header("Location:../VISTA/usuario.php?a=$result")
 

?>



?>
