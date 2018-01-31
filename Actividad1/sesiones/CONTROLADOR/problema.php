<?php

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