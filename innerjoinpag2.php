<html>
<head>

  <title> Busqueda de estudiantes </title>
</head>

<body>




<?php

$connect= mysqli_connect("localhost","root","mysql","testPHP")
          or die ("problemas en la conexion");
$registros= mysqli_query($connect,"select al.nombre as nombreal, al.mail,
            cur.nombrecurso from alumnos as al inner join cursos as cur
            on al.codigocurso= cur.codigo where al.codigo = $_REQUEST[codigoal]")
            or die("Problemas en la selección" .mysqli_error($connect));
if ($reg=mysqli_fetch_array($registros)) {

  echo "Nombre:" .$reg['nombreal'] ."<br>";
  echo "Correo:" .$reg['mail'] ."<br>";
  echo "Curso:" .$reg['nombrecurso'] ."<br>";

}










 ?>


 </body>



 </html>
