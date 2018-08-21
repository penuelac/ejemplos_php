<?php
if (isset($_REQUEST['pos']))
  $inicio=$_REQUEST['pos'];
else
  $inicio=0;
?>
<html>
<head>
<title>Problema</title>
</head>
<body>

<?php
$conexion=mysqli_connect("localhost","root","mysql","testPHP") or
    die("Problemas con la conexión");

$registros=mysqli_query($conexion,"select alu.codigo as
                                      codigo,
				      nombre,
				      mail,
				      codigocurso,
                                      nombrecurso
		                    from alumnos as alu
                                    inner join cursos as cur on cur.codigo=alu.codigocurso
                                    order by codigo
                                    limit $inicio,2") or
  die("Problemas en el select:".mysqli_error($conexion));
$impresos=0;
while ($reg=mysqli_fetch_array($registros))
{
  $impresos++;
  echo "Codigo:".$reg['codigo']."<br>";
  echo "Nombre:".$reg['nombre']."<br>";
  echo "Mail:".$reg['mail']."<br>";
  echo "Curso:".$reg['nombrecurso']."<br>";
  echo "<hr>";
}
if ($inicio==0)
  echo "anteriores ";
else
{
  $anterior=$inicio-2;
  echo "<a href=\"limitBD.php?pos=$anterior\">Anteriores </a>";
}
if ($impresos==2)
{
  $proximo=$inicio+2;
  echo "<a href=\"limitBD.php?pos=$proximo\">Siguientes</a>";
}
else
  echo "siguientes";
mysqli_close($conexion);
?>

</body>
</html>
