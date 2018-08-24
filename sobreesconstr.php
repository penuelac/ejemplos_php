<html>
<head>

  <title> Sobreescribir constructor</title>
</head>

<body>
  <?php
 abstract class Persona
 {
   protected $nombre;
   protected $edad;

   public function __construct($name, $age)
   {
     $this->nombre=$name;
     $this->edad=$age;
   }
   public function imprimir(){
     echo "<br>";
     echo "Nombre: ".$this->nombre ."- Edad: ".$this->edad."<br>";
   }
 }

class Empleado extends Persona
{
  protected $sueldo;

  public function __construct($n,$e,$suel)
  {
    parent::__construct($n,$e);
    $this->sueldo=$suel;
  }
  public function imprimirEm(){
    /*parent::imprimir();
    var_dump($this->nombre);
    echo "- Sueldo: ".$this->sueldo."<br>";*/
    echo "Nombre: ".$this->nombre ."- Edad: ".$this->edad."- Sueldo: ".$this->sueldo."<br>";
  }
}
/*$per1= New Persona('Lukas',16);
$per1->imprimir();*/
$emp1 = New Empleado('Juan',25,1500);
$emp1-> imprimirEm();

  ?>






 </body>


 </html>
