<head>
<title> Request datos </title>
</head>

<body>

<?php


$numDep = 0;
echo $_REQUEST ['nombre'];
if (isset($_REQUEST['futbol']))
{
  $numDep++;
}
if (isset($_REQUEST['voley']))
{
  $numDep++;
}
if (isset($_REQUEST['basket']))
{
  $numDep++;
}
if (isset($_REQUEST['tennis']))
{
  $numDep++;
}
echo "<br>";
echo "Practica $numDep deportes";
?>

</body>





</html>
