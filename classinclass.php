<html>
<head>

  <title> llamar metodos dentro de una clase POO</title>
</head>

<body>
  <?php

class Celda
{
  private $text;
  private $colorFuente;
  private $colorFondo;

  public function __construct($texto,$colorFu,$colorFo){
    $this->text=$texto;
    $this->colorFuente=$colorFu;
    $this->colorFondo=$colorFo;
  }

  public function graficarCelda(){
    echo '<td style="background-color:'.$this->colorFondo .'; color:' .$this->colorFuente .'">';
    echo $this->text .'</td>';
  }

}


class Tabla
{
  private $numFilas;
  private $numColumnas;
  private $celda=array();

  public function __construct($fil, $col)
  {
    $this->numFilas=$fil;
    $this->numColumnas=$col;
onstructor de la clase M

  }
  public function insertarCelda($fila,$columna,$texto,$colorFu,$colorFo){
    $this->celda[$fila][$columna]= new Celda($texto,$colorFu,$colorFo);

  }
  public function mostrarCelda ($fi, $co){
    $this->celda[$fi][$co]->graficarCelda();
  }

  public function graficarTabla(){
    echo '<table "border=1">';
    for ($f=1; $f <=$this->numFilas ; $f++) {
      echo '<tr>';
      for ($c=1; $c <=$this->numColumnas; $c++) {
        $this->mostrarCelda($f,$c);
      }
      echo '</tr>';
    }
    echo "</table>";
  }
}
$tabla1= New Tabla(8,4);
for($f=1;$f<=8;$f++)
{
  $tabla1->insertarCelda($f,1,"x","#0000ff","#EEEEEE");
  $tabla1->insertarCelda($f,2,"a","#0000ff","#EEEEEE");
  $tabla1->insertarCelda($f,3,"z","#0000ff","#EEEEEE");
  $tabla1->insertarCelda($f,4,"y","#0000ff","#EEEEEE");
}
$tabla1->graficarTabla();


  ?>



 </body>


 </html>
