<html>
     <hedad>
         <meta charset="utf-8">
         <title> Guardar</title>
     </hedad>
     <body  background="fondo.jpg">
         <?php
         include ('conexion.php');
         $administrativos=$_POST['nombre'];
              $cont=$_POST['cont'];
              $correo=$_POST['correo'];
         $consulta="insert into administrativos (nombre, cont, correo)
             values('$administrativos','$cont', '$correo')";
         $rsconsulta=mysqli_query($conexion, $consulta);
         if($rsconsulta)
             echo'<center>Usuario ingresado<br> <a href="loginn.php"> Login </a> </center>';
             ?>
     </body>
 </html>