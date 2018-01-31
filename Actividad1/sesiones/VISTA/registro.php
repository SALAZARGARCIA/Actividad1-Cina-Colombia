<!DOCTYPE html>
<html lang="en">
<head>
  <style type="text/css">
     h3{
     	text-shadow: 5px 5px 5px #0006ff;
     }
</style>

<title>Mi Proyecto</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="navbar-header">
<a class="navbar-brand" href="#">Cine Colombia</a>
</div>
<ul class="nav navbar-nav">
<li class="active"><a href=../menulateral.php>Inicio</a></li>
<li><a href="#">Ficha</a></li>
<li><a href="#">Jornada</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li class="pull-right"><a href="#"> <span class="glyphicon glyphicon-user"></span> Registro</a></li>
<li><a href="seguridaddb.php"><span class="glyphicon glyphicon-log-in"></span> Iniciar sesion</a></li>
</ul>
</div>
</nav>
</div>


<div class="container">
<header>
<nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="navbar-header">
<a class="navbar-brand" href="#">Geraldine Garcia</a>
</div>
<ul class="nav navbar-nav">
<li class="active"><a href="index.php">Inicio</a></li>
<li><a href="#">Page 1</a></li>
<li><a href="#">Page 2</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li><a href="registro.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
<li><a href="#"><span class="glyphicon glyphicon-log-in"></span>
Login</a></li>
</ul>
</div>
</nav>
</header>
<form name="areat" action="../controlador/controler1.php" method="post">
<table class="" style="" align="center" width="400">


<tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif">Usuario / Email</td><td>


<input class="form-control input-sm" type="email" name="usu" class="form-control" placeholder="Correo
electrónico" required></td></tr>


<tr><td style="padding:2px"></td></tr>
<tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif">Nombre</td><td>
<input class="form-control input-sm" type="text" name="nom" class="form-control" placeholder="Nombre"
required></td></tr>
<tr><td style="padding:2px"></td></tr>
<tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif">Apellido</td><td>
<input class="form-control input-sm" type="text" name="ape" class="form-control" placeholder="Apellido"
required></td></tr>
<tr><td style="padding:2px"></td></tr>
<tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif">Contraseña</td><td>
<input class="form-control input-sm" type="password" name="pass" class="form-control"
placeholder="Contraseña" required></td></tr>
<tr><td style="padding:4px"></td></tr>
<tr><td colspan="2"><hr></td></tr>
<tr><td align="center" colspan="2"><input type="submit" name="registrar" style="width:400px"
value="REGISTRAR"></td></tr>
<tr><td style="padding:4px"></td></tr>


<tr><?PHP if(isset($_REQUEST['dato'])){ echo "<td colspan='2' align='center'>
<div class='alert alert-success'>"."REGISTRO CORRECTO"."</div>";} if(isset($_REQUEST['dato1'])){ echo "<td colspan='2' align='center'><div

class='alert alert-warning'>"."USUARIO YA SE ENCUENTRA EN EL SISTEMA"."</div>"; }?></td></tr>


</table>
</form>

</body>
</html>