<html>
     <hedad>
         <meta charset="utf-8">
         <title> Guardar</title>
     </hedad>
     <body  background="fondo.jpg">
         <?php
         include ('conexion.php');
         $docente=$_POST['nombre'];
              $cont=$_POST['cont'];
              $correo=$_POST['correo'];
         $consulta="insert into docente (nombre, cont, correo)
             values('$docente','$cont', '$correo')";
         $rsconsulta=mysqli_query($conexion, $consulta);
         if($rsconsulta)
             echo'<center>Usuario ingresado<br> <a href="logind.php"> Login </a> </center>';
             ?>
     </body>
 </html>