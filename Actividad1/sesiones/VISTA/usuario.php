
<?php include '../vista/header.php'; ?>

 <style type="text/css">
     h3, h4{
     	text-shadow: 5px 5px 5px #0006ff;
     	color: #0019ff;
     }

    h5{
    	color: #0019ff;
    }
</style>



<div class="container">
<div class="row">

<div class="col-md-2 column margintop20">
<ul class="nav nav-pills nav-stacked">
<li><a href="#"><span class="glyphicon glyphicon-tower"></span> Inicio</a></li>
<li class="active"><a href="#">Formularios<span class="glyphicon glyphicon-new-window pull-right"></span> </a></li>
<li><a href="#">Condicionales<span class="glyphicon glyphicon-hand-left pull-right"></span> </a></li>
<li><a href="#">Repetitivas<span class="glyphicon glyphicon-cog pull-right"></span> </a></li>
<li><a href="#">Seguridad<span class="glyphicon glyphicon-briefcase pull-right"></span> </a></li>
<li><a href="#">Base de datos<span class="glyphicon glyphicon-chevron-right pull-right"></span> </a></li>
</ul>
</div>

<div class="col-sm-10 col-md-10">
<div class="panel panel-default">
<!-- contenedor del titulo-->
<div class="panel-heading">
<h4 class="panel-title">EJERCICIOS DE PRACTICA PHP</h4>
</div>
<!-- contenedor de descripcion ejercicios-->
<div class="panel-body">

<!-- contenedor menu de ejercicios-->
<p><ul class="nav nav-tabs">
<li><a href="usuario.php">Radio - Suma y resta</a></li>
<li class="active"><a href="#">Text /Button - Triangulo</a></li>
<li><a href="select - cervezas.php">Select - Cervezas</a></li>
</ul></p>


<!-- Contenedor ejercicio-->
<div class="alert alert-success" style="background-color: #68b3f7">
<div class="row">
<div class="col-sm-12 col-md-12">


<!--FORMULARIO-->
<form action="../CONTROLADOR/problema.php" method="post"><table class="table">



<tr><td colspan="2" style="color:#0019ff" ><center><h4>EJERCICIO DE CALCULO DE SUMA Y RESTA</h4></center></td></tr>





<td align="right" style="color:#0019ff"><h5>valor 1</h5></td><td><input  type="text" name="valor1"></td>

<tr><td align="right" style="color:#0019ff"><h5>Valor 2</h5></td><td><input   type="text" name="valor2"></td></tr>

<tr><td align="right"><h5>Sumar</h5></td><td><input type="radio" name="radio1" value="suma"></td></tr>

<tr><td align="right"><h5>Restar</h5></td><td><input style="color:#0019ff" type="radio" name="radio1" value="resta"></td></tr>



<!--BOTON DE RESULTADO-->
<tr><td colspan="2" align="center"><input type="submit" name="Realizar" width="1000" style="background:#b3b0af " Value="resultado"></td></tr>


<tr><td align="right" "><h5>Resultado Area</h5></td><td><input type="text"  name="valor3" value="<?php if(isset($_REQUEST['a']))
{ echo $_REQUEST['a']; } ?>" disabled="disabled" ></td></tr>
</table>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</body>
</html>

</body>
</html>