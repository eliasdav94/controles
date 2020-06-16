<html>
<head>
    <meta charset="utf-8">
    <title>Ingreso</title>
    </head>
    <body background="fondo.jpg">
        <html>
        <?php
        echo "Today is " . date("Y/m/d") . "<br>";
         include ('conexion.php');
         $docente=$_POST['nombre'];
              $cont=$_POST['cont'];
            $consulta="select * from docente where nombre='$docente' and cont='$cont' and cont='$cont'";
            $rsconsulta=mysqli_query($conexion, $consulta);
            $row=mysqli_fetch_assoc($rsconsulta);
            $id_docente=$row['id_docente'];
            $nombre=$row['nombre'];
            $pass=$row['cont'];
            if($docente==$nombre&&$cont==$pass) {
require ('bienbd.php');
            }
            else 
            echo"No existe usuario o contraseña"; 

             ?>
    </body>
</html>