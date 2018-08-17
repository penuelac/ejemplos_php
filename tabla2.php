<html>
<head> </head>

<body>

<?php

echo "Funcion for <br>";
for ($f = 2; $f<=20;$f=$f+2)
{
  echo $f;
  echo "<br>";
}

echo "Funcion while  <br>";

$d = 2;
while ($d<=20)
{
  echo $d;
  echo "<br>";
  $d=$d+2;
}

echo "Funcion do - while  <br>";
$a =2;

do {
  echo $a;
  echo "<br>";
  $a=$a+2;
} while ($a <= 20);

?>

</body>





</html>
