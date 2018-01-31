<!DOCTYPE html>
<html lang="en">
<head>
 

<title>Mi Proyecto</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</head>
<body>
<div class="container">
<header>
<nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="navbar-header">
<a class="navbar-brand" href="#">Cine Colombia</a>
</div>
<ul class="nav navbar-nav">
<li class="active"><a href="index.php">Inicio</a></li>
<li><a href="#">Page 1</a></li>
<li><a href="#">Page 2</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li><a href="registro.php"><span class="glyphicon glyphicon-user"></span> Resgistrarse</a></li>
<li><a href="#"><span class="glyphicon glyphicon-log-in"></span>
Login</a></li>
</ul>
</div>
</nav>
</header>



<div class="row">
<div class="col-sm-12 col-md-12">


<form name="areat" action="../CONTROLADOR/controler1.php" method="post">
<table class="" style="" align="center">
<tr><td style="color:#800000; font-family:Tahoma, Geneva, sans-serif" align="center">INICIO DE SESION</td></tr>


<tr><td style="padding:5px"></td></tr><tr><td><div class="input-group input-group-sm">
<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>

<!--CORREO-->
<input type="text" name="usu" class="form-control" placeholder="Correo electrónico" >
</div></td></tr>
<tr><td style="padding:2px"></td></tr>
<tr><td><div class="input-group input-group-sm">
<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>

<!--CONTRASEÑA-->
<input  type="password" name="pass" class="form-control" placeholder="Contraseña" >
</div></td></tr>
<tr><td style="padding:4px"></td></tr>

<!--BOTO PARA INGRESAR-->
<tr><td align="center"><input value="Ingresar" type="submit" name="enviar" class="" width="300px"></td></td>
<tr><td style="padding:4px"></td></tr>
<tr><td style="color:#F00"><?php if(isset($_REQUEST['error'])) { echo "Usuario o contraseña
incorrecta";}?></td></tr>
</table>
</form>
</div>
</div>
</table>

</body>
</html>
