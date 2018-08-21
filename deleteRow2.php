<head>
<title> Request datos </title>
</head>

<body>

<?php


$conexion = mysqli_connect("localhost","root","mysql","testPHP") or
            die("Probelmas con la conexión");
$registros= mysqli_query($conexion,"select * from alumnos where mail ='$_REQUEST[mail]'")
              or die("Problemas en la selección" .mysqli_error($conexion));

if ($reg=mysqli_fetch_array($registros)) {
  mysqli_query($conexion,"delete from alumnos where mail ='$_REQUEST[mail]'")
                or die("Problemas en la selección" .mysqli_error($conexion));
  echo "Se borro el estudiante";

  }

else {
  echo "No existe ningun estudiante con ese nombre";
}

mysqli_close($conexion);

?>

</body>

</html>
