<?php
require_once 'usuario.entidad.php';
require_once 'usuario.modelo.php';

// Logica
$alm = new persona();
$model = new usuarioModelo();

if(isset($_REQUEST['action']))
{
    switch($_REQUEST['action'])
    {
        case 'actualizar':
            $alm->__SET('Documento_Pesona',            $_REQUEST['Documento_Pesona']);
            $alm->__SET('Nombre_Persona',    $_REQUEST['Nombre_Persona']);
            $alm->__SET('Apellido_Persona',    $_REQUEST['Apellido_Persona']);
            $alm->__SET('contrasena',             $_REQUEST['contrasena']);
            
            


            $model->Actualizar($alm);
            header('Location: modificar.php');
            break;

        case 'registrar':
            $alm->__SET('Documento_Pesona',              $_REQUEST['Documento_Pesona']);
            $alm->__SET('Nombre_Persona',          $_REQUEST['Nombre_Persona']);
            $alm->__SET('Apellido_Persona',        $_REQUEST['Apellido_Persona']);
            $alm->__SET('contrasena',            $_REQUEST['contrasena']);
            
            

            $model->Registrar($alm);
            header('Location: mensaje1.php');
            break;

        case 'eliminar':
            $model->Eliminar($_REQUEST['Documento_Pesona']);
            header('Location: mensaje3.php');
            break;

        case 'editar':
            $alm = $model->Obtener($_REQUEST['Documento_Pesona']);
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
                
                <form action="?action=<?php echo $alm->Documento_Pesona > 0 ? 'actualizar' : 'registrar'; ?>" method="post" class="pure-form pure-form-stacked" >
                    <input type="hidden" name="Documento_Pesona" value="<?php echo $alm->__GET('Documento_Pesona'); ?>" />
                    
                    <table >
                        <tr>
                            <th >Numero de persona</th>
                            <td><input type="text" name="Documento_Pesona" value="<?php echo $alm->__GET('Documento_Pesona'); ?>"  /></td>
                        </tr>
                        <tr>
                            <th >Documento</th>
                            <td><input type="text" name="Nombre_Persona" value="<?php echo $alm->__GET('Nombre_Persona'); ?>"  /></td>
                        </tr>

                        <tr>
                            <th >Nombre Pelicula</th>
                            <td><input type="text" name="Apellido_Persona" value="<?php echo $alm->__GET('Apellido_Persona'); ?>"  /></td>
                        </tr>
                                                <tr>
                            <th >Numero de Sala</th>
                            <td><input type="text" name="contrasena" value="<?php echo $alm->__GET('contrasena'); ?>"  /></td>
                        </tr>
                        <tr>
                            
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
                            <th >Numero de persona</th>
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
                            <td><?php echo $r->__GET('Documento_Pesona'); ?></td>
                            <td><?php echo $r->__GET('Nombre_Persona'); ?></td>
                            <td><?php echo $r->__GET('Apellido_Persona'); ?></td>
                            <td><?php echo $r->__GET('contrasena'); ?></td>
                                       
                            <td>
                                <a href="?action=editar&Documento_Pesona=<?php echo $r->Documento_Pesona; ?>">Editar</a>
                            </td>
                            <td>
                                <a href="?action=eliminar&Documento_Pesona=<?php echo $r->Documento_Pesona; ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>     
              
            </div>
        </div>

    </body>
</html>