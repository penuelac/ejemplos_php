<html>
<head>

  <title> Sobreescribir constructor</title>
</head>

<body>
  <?php
class Calculadora
{

  public static function sumar($a,$b){
    $resultado=$a+$b;
    echo "Resultado de la suma: ".$resultado."<br>";
  }
  public static function restar($a,$b){
    $resultado=$a-$b;
    echo "Resultado de la resta: ".$resultado."<br>";
  }
  public static function multiplicar($a,$b){
    $resultado=$a*$b;
    echo "Resultado de la multiplicación: ".$resultado."<br>";
  }
  public static function dividir($a,$b){
    $resultado=$a/$b;
    echo "Resultado de la división: ".$resultado."<br>";
  }
}

Calculadora::sumar(10,5);
Calculadora::restar(10,5);
Calculadora::multiplicar(10,5);
Calculadora::dividir(10,5);















  ?>






 </body>


 </html>
