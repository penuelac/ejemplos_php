<html>
<head>
<title> Request datos </title>
</head>

<body>

<?php


$edad = $_REQUEST["edad"];
echo $_REQUEST ["nombre"];
echo "<br>";
if ($edad>=18)
{
  echo "Es mayor de edad";
}
else {
  echo "Es menor de edad";
}

?>

</body>





</html>
