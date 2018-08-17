</head>

<body>

<?php



echo $_REQUEST ['nombre'];
echo "<br>";
if ($_REQUEST['ingresos']==3)
{
  echo "Debe pagar impuestos";
}
else {
  echo "No debe pagar impuestos";
}

?>

</body>





</html>
