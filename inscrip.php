<html>
     <hedad>
         <meta charset="utf-8">
         <title> Guardar</title>
     </hedad>
     <body background="fondo.jpg" >
         <?php
         include ('conexion.php');
         $inscripcion=$_POST['nombre'];
              $direccion=$_POST['direecion'];
              $telefono=$_POST['telefono'];
              $correo=$_POST['correo'];
              $carrera=$_POST['carrera'];
              $cont=$_POST['cont'];
         //echo $usuario, $cont, $nivel;
         $consulta="insert into inscripcion (nombre, cont, telefono, correo, carrera)
             values('$inscripcion', '$cont', '$telefono', '$correo', '$carrera')";
         $rsconsulta=mysqli_query($conexion, $consulta);
         if($rsconsulta)
             echo'<center>Alumno guardado<br> </center>';
             ?>
     </body>
 </html>