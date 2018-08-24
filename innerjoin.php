<html>
<head>
<title> Request datos </title>
</head>

<body>

 <?php
 $conexion = mysqli_connect("localhost","root","mysql","testPHP") or
             die("Problemas con la conexión");
 $registros= mysqli_query($conexion,"select al.codigocurso, al.nombre as nombreal, al.mail,cur.nombrecurso from alumnos as al inner join cursos as cur on al.codigocurso= cur.codigo")
               or die("Problemas en la selección" .mysqli_error($conexion));


 while($reg=mysqli_fetch_array($registros)){
   echo "Nombre: " .$reg['nombreal'] ."<br>";
   echo "Correo: " .$reg['mail'] ."<br>";
   echo "Curso: " .$reg['nombrecurso'] ."<br>";
   echo "<br> <br>";

 }
 ?>



</body>

</html>
