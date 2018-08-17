<head>
<title> Request datos </title>
</head>

<body>

<?php


$tra= $_REQUEST['trabajo'];
echo $_REQUEST ['nombre'];
if ($tra==noTiene)
{
  echo " No tiene estudios";
}
elseif ($tra==estPrim) {
  echo " Tiene estudios primarios";
}
else {
  echo " Tiene estudios Secundarios";
}


?>

</body>





</html>
