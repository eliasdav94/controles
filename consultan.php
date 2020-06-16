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
         $administrativos=$_POST['nombre'];
              $cont=$_POST['cont'];
            $consulta="select * from administrativos where nombre='$administrativos' and cont='$cont' and cont='$cont'";
            $rsconsulta=mysqli_query($conexion, $consulta);
            $row=mysqli_fetch_assoc($rsconsulta);
            $id_admin=$row['id_admin'];
            $nombre=$row['nombre'];
            $pass=$row['cont'];
            if($administrativos==$nombre&&$cont==$pass) {
require ('bienbn.php');
            }
            else 
            echo"No existe usuario o contraseña"; 

             ?>
    </body>
</html>