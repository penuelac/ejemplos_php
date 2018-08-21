<head>
<title> Request datos </title>
</head>

<body>

<?php


$conexion = mysqli_connect("localhost","root","mysql","testPHP") or
            die("Probelmas con la conexión");
$registros= mysqli_query($conexion,"select * from alumnos where nombre ='$_REQUEST[nombre]'")
              or die("Problemas en la selección" .mysqli_error($conexion));
$cant =0;
  while ($reg=mysqli_fetch_array($registros)) {
    echo "Código: " .$reg['codigo'];
    echo "<br>";
    echo "Nombre: " .$reg['nombre'];
    echo "<br>";
    echo "Correo: " .$reg['mail'];
    echo "<br>";
    echo "Curso: ";
    switch ($reg['codigocurso']) {
      case 1:
        echo "PHP";
        break;
      case 2:
        echo "ASP";
        break;
      case 3:
        echo "JSP";
        break;

      }
      echo "<br>";
      echo "<br>";
      $cant++;
  }

if ($cant==0) {
  echo "No existe ningun estudiante con ese nombre";
}

mysqli_close($conexion);

?>

</body>

</html>
