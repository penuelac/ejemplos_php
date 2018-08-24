<html>
<head>

  <title> llamar metodos dentro de una clase POO</title>
</head>

<body>
  <?php

class Empleado {
  private $nombre;
  private $sueldo;
  public function __construct($nom,$suel='1000')
  {
    $this->nombre=$nom;
    $this->sueldo=$suel;
  }
  public function imprimir()
  {
    echo "Nombre: " .$this->nombre ."<br>";
    echo "Sueldo: " .$this->sueldo ."<br>";
  }
}

$empleado1= New Empleado('Juan');
$empleado1->imprimir();
$empleado2= New Empleado('Pedro',2000);
$empleado2->imprimir();


  ?>



 </body>


 </html>
