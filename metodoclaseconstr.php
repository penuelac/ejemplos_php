<html>
<head>

  <title> Atributos de una clase POO</title>
</head>

<body>
  <?php
  class titulo {
    private $titulo;
    private $ubicacion;
    private $colorfondo;
    private $colorletra;
    public function __construct($tit, $ubic,$colf,$coll) {
      $this->titulo=$tit;
      $this->ubicacion=$ubic;
      $this->colorfondo=$colf;
      $this->colorletra=$coll;
    }
    public function mostrarTitulo(){
      echo '<div style="font-size:40px; background-color:'.$this->colorfondo.'; color:' .$this->colorletra .'; text-align:'.$this->ubicacion.'">';
      echo $this->titulo;
      echo "</div>";
    }


  }

  $title1 = New titulo('Metodos en PHP','center','red','white');
  $title1-> mostrarTitulo();

  ?>



 </body>



 </html>
