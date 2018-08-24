<?php
class Persona {
  private $nombre;
  private $sueldo;
  public function inicializar ($nom, $suel) {
    $this->nombre = $nom;
    $this->sueldo= $suel;
  }
  public function imprimir () {
    echo $this->nombre;
    echo "<br>";
    if ($this->sueldo>3000) {
      echo "La persona debe pagar impuestos";
      echo "<br>";
    }
    else {
      echo "La persona NO debe pagar impuestos";
      echo "<br>";
    }

  }


}

$per1 = New Persona();
$per1-> inicializar('Aaron',50000);
$per1-> imprimir();

$per2 = New Persona();
$per2-> inicializar('Lorena',10000);
$per2-> imprimir();

$per3 = New Persona();
$per3-> inicializar('Andres',1000);
$per3-> imprimir();

?>
