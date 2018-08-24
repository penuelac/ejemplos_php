<html>
<head>
  <title> Clonar objetos </title>
</head>
<body>
  <?php

  class Persona
  {
    private $nombre;
    private $edad;

    public function __construct($n,$e)
    {
      $this->nombre=$n;
      $this->edad=$e;
    }
    public function mostrar (){
      echo "Nombre: ".$this->nombre." - Edad: ".$this->edad."<br>";
    }
    public function __clone(){
      $this->edad++;
    }
  }

  $per1=New Persona('Ana',22);
  $per2=clone($per1);
  $per1->mostrar();
  $per2->mostrar();






   ?>
</body>
</html>
