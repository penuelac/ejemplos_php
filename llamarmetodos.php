<html>
<head>

  <title> llamar metodos dentro de una clase POO</title>
</head>

<body>
  <?php
  class Titulo {
    private $tabla=array();
    private $numFilas;
    private $numColumnas;
    private $colorletra=array();
    private $colorfondo=array();
    public function __construct($filas, $columnas) {
      $this->numFilas=$filas;
      $this->numColumnas=$columnas;


    }
    public function leerDatos($fil,$col,$valor,$coll,$colf){
      $this->tabla[$fil][$col]=$valor;
      $this->colorletra[$fil][$col]=$coll;
      $this->colorfondo[$fil][$col]=$colf;
    }
    private function iniTabla(){
      echo '<table border="1">';
    }
    private function iniFila(){
      echo '<tr>';
    }
    private function mostrar($fi,$co){
      echo '<td style="color:'.$this->colorletra[$fi][$co] .';background-color:'.$this->colorfondo[$fi][$co] .'">' .$this->tabla[$fi][$co] .'</td>' ;
      }


    private function finTabla(){
      echo '</table>';
    }
    private function finFila(){
      echo '</tr>';
    }

    public function graficarTabla(){
      $this->iniTabla();
      for ($f=1; $f <= $this->numFilas ; $f++) {
        $this->iniFila();
        for ($c=1; $c <= $this->numColumnas; $c++) {
          $this->mostrar($f,$c);
        }
        $this->finFila();
      }
      $this->finTabla();
    }
  }

$tabla1= New Titulo(10,3);
  for($f=1;$f<=10;$f++)
  {
    $tabla1->leerDatos($f,1,"x","#0000ff","#EEEEEE");
    $tabla1->leerDatos($f,2,"x","#0000ff","#EEEEEE");
    $tabla1->leerDatos($f,3,"x","#0000ff","#EEEEEE");
  }
$tabla1->graficarTabla();

  ?>



 </body>


 </html>
