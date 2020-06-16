<html>
    <head>
        <meta charser="utf8">
        <title> Datos Docente </title>
    </head>
    <body  background="fondo.jpg">
<br>
<br>
<br>
        <form name="registro" method="post" action="guarda_doc.php">
            <fieldset style="border: solid">
              <legend>Actualizar datos</legend>
              <center>
            <div>
                <label>Nombre:   </label>
                   <input type="text" name="nombre">
            </div>
            <div>
                <label>Contraseña: </label>
                   <input type="password" name="cont">
            </div>
              </div>
            <label>Telefono </label>
                   <input type="text" name="telefono">
              <div>
              </div>
            <label>Correo </label>
                   <input type="text" name="correo">
              <div> </div>

            </div>
            <br>
            <div>
             <label> Docente </label>
            </div>
            <div>
                <input type="submit" name="guardar" value="Guardar">
            </div>
            </center>
        </form>
        </fieldset>
        
    </body>
</html>