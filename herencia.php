<html>
<head>

  <title> llamar metodos dentro de una clase POO</title>
</head>

<body>
  <?php
 class Persona
 {
   protected $nombre;
   protected $edad;

   public function cargarDatosPer($name, $age)
   {
     $this->nombre=$name;
     $this->edad=$age;
   }
   public function imprimirPer(){
     echo "Nombre: ".$this->nombre ."- Edad: ".$this->edad."<br>";
   }
 }

class Empleado extends Persona
{
  protected $sueldo;

  public function cargarSuel($suel)
  {
    $this->sueldo=$suel;
  }
  public function imprimirEm(){
    echo "Sueldo: ".$this->sueldo."<br>";
  }
}
$per1= New Persona();
$per1-> cargarDatosPer('Lukas',16);
$per1->imprimirPer();
$emp1 = New Empleado();
$emp1-> cargarDatosPer('Juan',25);
$emp1-> cargarSuel(1500);
$emp1-> imprimirPer();
$emp1->imprimirEm();

  ?>






 </body>


 </html>
