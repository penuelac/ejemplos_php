<head>
<title> Request datos </title>
</head>

<body>

<?php


$conexion = mysqli_connect("localhost","root","mysql","testPHP") or
            die("Probelmas con la conexión");

  mysqli_query($conexion,"update alumnos
                          set mail = '$_REQUEST[mailnew]'
                          where mail ='$_REQUEST[mailold]'")
                or die("Problemas en la selección" .mysqli_error($conexion));
  echo "Se actualizo el correo exitosamente";




?>

</body>

</html>
