<head>
<title> Request datos </title>
</head>

<body>

<?php


$conexion = mysqli_connect("localhost","root","mysql","testPHP") or
            die("Probelmas con la conexión");
$registros= mysqli_query($conexion,"select * from alumnos where mail ='$_REQUEST[mailold]'")
              or die("Problemas en la selección" .mysqli_error($conexion));

if ($reg=mysqli_fetch_array($registros)){
?>

<form method="post" action="updatemail3.php">
  Ingrese el nuevo correo:
  <input type="text" name = "mailnew" value="<?php $reg['mail'] ?>">
  <input type="hidden" name = "mailold" value="<?php $reg['mail'] ?>">
  <br>
  <br>
  <input type="submit" value="Modificar">

</form>
<?php
}

else {
  echo "No existe nignun alumnso con ese correo";

}


?>

</body>

</html>
