<head>
<title> Request datos </title>
</head>

<body>

<?php


$conexion = mysqli_connect("localhost","root","mysql","testPHP") or
            die("Probelmas con la conexión");

  mysqli_query($conexion,"insert into alumnos (nombre,mail,codigocurso) values
                          ('$_REQUEST[nombre]', '$_REQUEST[mail]', $_REQUEST[codigocurso])")
                or die("Problemas en la selección" .mysqli_error($conexion));
  mysqli_close($conexion);
  echo "Se ingreso exitosamente al estudiante";




?>

</body>

</html>
