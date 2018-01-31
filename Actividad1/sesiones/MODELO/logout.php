<?php
session_start();
session_destroy();
echo 'Cerraste sesion';
echo '<script> wiondow.location="../VISTA/seguridaddb.php"; </script>';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Saliendo</title>
        <meta charset="utf-8">
    </head>
    <body>
        <script language="javascript">location.href = "../VISTA/seguridaddb.php";</script>
    </body>
</html>