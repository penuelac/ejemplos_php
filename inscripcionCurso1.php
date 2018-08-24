<head>
<title> Request datos </title>
</head>

<body>

<form method="post" action="inscripcionCurso2.php">
 Ingrese Nombre:
 <input type="text" name="nombre"> <br>
 Ingrese Correo:
 <input type="text" name="mail"> <br>
 Seleccione el curso:
 <select name="codigocurso">
 <?php
 $conexion = mysqli_connect("localhost","root","mysql","testPHP") or
             die("Problemas con la conexión");
 $registros= mysqli_query($conexion,"select * from cursos")
               or die("Problemas en la selección" .mysqli_error($conexion));


 while($reg=mysqli_fetch_array($registros)){
   echo "<option value= \"$reg[codigo]\"> $reg[nombrecurso]</option>";
 }
 ?>
</select>
 <br>

  <input type="submit" value="Enviar">

</form>


</body>

</html>
