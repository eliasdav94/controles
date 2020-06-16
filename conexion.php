<html>
<head>
    <meta charset="utf-8">
    <title>conexion</title>
    </head>
    <body>
    <?PHP
        $conexion=mysqli_connect("localhost", "root", "12345678", "control") or die ("No hay conexion con BD");
    ?>
    </body>
</html>