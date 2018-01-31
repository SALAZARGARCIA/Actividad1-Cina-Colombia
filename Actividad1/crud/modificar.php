<?php
require_once 'usuario.entidad.php';
require_once 'usuario.modelo.php';

// Logica
$alm = new Boleta();
$model = new usuarioModelo();

if(isset($_REQUEST['action']))
{
    switch($_REQUEST['action'])
    {
        case 'actualizar':
            $alm->__SET('Numero_Boleta',              $_REQUEST['Numero_Boleta']);
            $alm->__SET('Cliente_Documento_Cliente',          $_REQUEST['Cliente_Documento_Cliente']);
            $alm->__SET('Cartelera_Nombre_Pelicula',        $_REQUEST['Cartelera_Nombre_Pelicula']);
            $alm->__SET('Sala_Numero_Sala',            $_REQUEST['Sala_Numero_Sala']);
            $alm->__SET('Letra_Asiento', $_REQUEST['Letra_Asiento']);
            $alm->__SET('Numero_Columna_Asiento',        $_REQUEST['Numero_Columna_Asiento']);


            $model->Actualizar($alm);
            header('Location: modificar.php');
            break;

        case 'registrar':
            $alm->__SET('Numero_Boleta',              $_REQUEST['Numero_Boleta']);
            $alm->__SET('Cliente_Documento_Cliente',          $_REQUEST['Cliente_Documento_Cliente']);
            $alm->__SET('Cartelera_Nombre_Pelicula',        $_REQUEST['Cartelera_Nombre_Pelicula']);
            $alm->__SET('Sala_Numero_Sala',            $_REQUEST['Sala_Numero_Sala']);
            $alm->__SET('Letra_Asiento',                 $_REQUEST['Letra_Asiento']);
            $alm->__SET('Numero_Columna_Asiento',                   $_REQUEST['Numero_Columna_Asiento']);
            
            

            $model->Registrar($alm);
            header('Location: mensaje1.php');
            break;

        case 'eliminar':
            $model->Eliminar($_REQUEST['Numero_Boleta']);
            header('Location: mensaje3.php');
            break;

        case 'editar':
            $alm = $model->Obtener($_REQUEST['Numero_Boleta']);
            break;
    }
}

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Anexsoft</title>
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
    </head>
    <body >

        <div class="pure-g">
            <div class="pure-u-1-12">
                
                <form action="?action=<?php echo $alm->Numero_Boleta > 0 ? 'actualizar' : 'registrar'; ?>" method="post" class="pure-form pure-form-stacked" >
                    <input type="hidden" name="Numero_Boleta" value="<?php echo $alm->__GET('Numero_Boleta'); ?>" />
                    
                    <table >
                        <tr>
                            <th >Numero de Boleta</th>
                            <td><input type="text" name="Numero_Boleta" value="<?php echo $alm->__GET('Numero_Boleta'); ?>"  /></td>
                        </tr>
                        <tr>
                            <th >Documento</th>
                            <td><input type="text" name="Cliente_Documento_Cliente" value="<?php echo $alm->__GET('Cliente_Documento_Cliente'); ?>"  /></td>
                        </tr>

                        <tr>
                            <th >Nombre Pelicula</th>
                            <td><input type="text" name="Cartelera_Nombre_Pelicula" value="<?php echo $alm->__GET('Cartelera_Nombre_Pelicula'); ?>"  /></td>
                        </tr>
                                                <tr>
                            <th >Numero de Sala</th>
                            <td><input type="text" name="Sala_Numero_Sala" value="<?php echo $alm->__GET('Sala_Numero_Sala'); ?>"  /></td>
                        </tr>
                        <tr>
                            <th >Letra Asiento</th>
                            <td><input type="text" name="Letra_Asiento" value="<?php echo $alm->__GET('Letra_Asiento'); ?>"  /></td>
                        </tr>

                        <tr>
                            <th >Columna Asiento</th>
                            <td><input type="text" name="Numero_Columna_Asiento" value="<?php echo $alm->__GET('Numero_Columna_Asiento'); ?>"  /></td>
                        </tr>
                        
                        <tr>
                            <td colspan="2">
                                <button type="submit" class="pure-button pure-button-primary">Guardar</button>
                            </td>
                        </tr>
                    </table>
                </form>

                <table class="pure-table pure-table-horizontal">
                    <thead>
                        <tr>
                            <th >Numero de Boleta</th>
                            <th >Documento</th>
                            <th >Nombre Pelicula</th>
                            <th >Numero de Sala</th>
                            <th >Letra Asiento</th>
                            <th >Columna Asiento</th>
                            
                            
                            <th ></th>
                            
                        </tr>
                    </thead>
                    <?php foreach($model->Listar() as $r): ?>
                        <tr>
                            <td><?php echo $r->__GET('Numero_Boleta'); ?></td>
                            <td><?php echo $r->__GET('Cliente_Documento_Cliente'); ?></td>
                            <td><?php echo $r->__GET('Cartelera_Nombre_Pelicula'); ?></td>
                            <td><?php echo $r->__GET('Sala_Numero_Sala'); ?></td>
                            <td><?php echo $r->__GET('Letra_Asiento'); ?></td>
                            <td><?php echo $r->__GET('Numero_Columna_Asiento'); ?></td>            
                            <td>
                                <a href="?action=editar&Numero_Boleta=<?php echo $r->Numero_Boleta; ?>">Editar</a>
                            </td>
                            <td>
                                <a href="?action=eliminar&Numero_Boleta=<?php echo $r->Numero_Boleta; ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>     
              
            </div>
        </div>

    </body>
</html>