<html>
<head>

  <title> Atributos de una clase POO</title>
</head>

<body>

<?php
class menu {
  private $enlaces=array();
  private $titulos=array();
  public function cargar ($enl,$tit){
    $this->enlaces[]=$enl;
    $this->titulos[]=$tit;
  }
  public function mostrarHorizontal() {
    for ($f=0; $f < count($this->enlaces); $f++) {
      echo '<a href="'.$this->enlaces[$f].'">'.$this->titulos[$f].'</a>';
      echo "--";
    }
  }
  public function mostrarVertical() {
    for ($f=0; $f < count($this->enlaces); $f++) {
      echo "<br>";
      echo '<a href="'.$this->enlaces[$f].'">'.$this->titulos[$f].'</a>';
      echo "<br>";
    }
  }
}

$menu1=new Menu();
$menu1->cargar('http://www.google.com','Google');
$menu1->cargar('http://www.yahoo.com','Yahoo');
$menu1->cargar('http://www.msn.com','MSN');
$menu1->mostrarHorizontal();

$menu2=new Menu();
$menu2->cargar('http://www.google.com','Google');
$menu2->cargar('http://www.yahoo.com','Yahoo');
$menu2->cargar('http://www.msn.com','MSN');
$menu2->mostrarVertical();


 ?>


 </body>



 </html>
