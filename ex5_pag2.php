<html>
<head>

  <title> Formulario Pizza </title>

</head>

<body>




<?php

$ped = fopen("pedidos.txt","a") or
      die("Problemas para abrir el rchivo");
fputs($ped,$_REQUEST['nombre']);
fputs($ped,"\n");
fputs($ped,$_REQUEST['direccion']);
fputs($ped,"\n");
if (isset($_REQUEST['jamonyq']))
{
  $cant = $_REQUEST['cant1'];
  fputs($ped,"Jamon y queso: ".$cant);
  fputs($ped,"\n");

}
if (isset($_REQUEST['napo']))
{
  $cant = $_REQUEST['cant2'];
  fputs($ped,"Napolitana: ".$cant);
  fputs($ped,"\n");

}
if (isset($_REQUEST['mozz']))
{
  $cant = $_REQUEST['cant3'];
  fputs($ped,"Mozzarella: ".$cant);
  fputs($ped,"\n");

}
fputs($ped,"--------------------------------------------------------");
fputs($ped,"\n");
fclose($ped);

echo "Datos cargados";


?>




</body>






</html>
