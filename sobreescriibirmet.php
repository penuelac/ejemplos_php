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
   public function imprimir(){
     echo "<br>";
     echo "Nombre: ".$this->nombre ."- Edad: ".$this->edad;
   }
 }

class Empleado extends Persona
{
  protected $sueldo;

  public function cargarSuel($suel)
  {
    $this->sueldo=$suel;
  }
  public function imprimir(){
    parent::imprimir();
    echo "- Sueldo: ".$this->sueldo."<br>";
  }
}
$per1= New Persona();
$per1-> cargarDatosPer('Lukas',16);
$per1->imprimir();
$emp1 = New Empleado();
$emp1-> cargarDatosPer('Juan',25);
$emp1-> cargarSuel(1500);
$emp1-> imprimir();

  ?>






 </body>


 </html>
