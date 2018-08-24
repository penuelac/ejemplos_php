<html>
<head>

  <title> Formulario Pizza </title>

</head>

<body>




<?php

$ped = fopen("pedidos.txt","r") or
      die("NO se pudo abrir el rchivo");
while (!feof($ped))
{
  $linea = fgets($ped);
  $lineasinsalto = nl2br($linea);
  echo $lineasinsalto;
}
fclose($ped);

?>

</body>

</html>
