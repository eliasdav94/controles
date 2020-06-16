<html>
     <hedad>
         <meta charset="utf-8">
         <title> Guardar</title>
     </hedad>
     <body  background="fondo.jpg" >
         <?php
         include ('conexion.php');
         $alumno=$_POST['nombre'];
              $cont=$_POST['cont'];
              $correo=$_POST['correo'];
              $semestre=$_POST['semestre'];
         $consulta="insert into alumno (nombre, cont, correo, semestre)
             values('$alumno','$cont', '$correo', '$semestre')";
         $rsconsulta=mysqli_query($conexion, $consulta);
         if($rsconsulta)
             echo'<center>Usuario ingresado<br> <a href="logina.php"> Login </a> </center>';
             ?>
     </body>
 </html>