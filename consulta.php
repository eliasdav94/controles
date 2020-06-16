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
         $alumno=$_POST['nombre'];
              $cont=$_POST['cont'];
            $consulta="select * from alumno where nombre='$alumno' and cont='$cont' and cont='$cont'";
            $rsconsulta=mysqli_query($conexion, $consulta);
            $row=mysqli_fetch_assoc($rsconsulta);
            $id_alumno=$row['id_alumno'];
            $nombre=$row['nombre'];
            $pass=$row['cont'];
            if($alumno==$nombre&&$cont==$pass) {
require ('biena.php');
            }
            else 
            echo"No existe usuario o contraseña"; 

             ?>
    </body>
</html>