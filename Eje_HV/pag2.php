<?php

require('pagina1.class.php');


class ConexionBD
{
    private $servidor="192.168.0.83";
    private $user="userquery";
    private $password="user12345";
    private $nameBD="hojavida";
    private $pname;
    private $ptipoDoc;
    private $pdoc;
    private $paddr;
    private $ptel;
    private $pprof;

    public function __construct()
    {
        if (empty($_REQUEST)) {
            $miVista = new Vista();
            $miVista->mostrarVista();
        } else {
            copy($_FILES['foto']['tmp_name'], "imagen.png");
            $nom=$_FILES['foto']['name'];
            echo "<img src='imagen.png'>";
            $this->insertarSQL($this->conectar(), $_REQUEST['name'], $_REQUEST['tipoDoc'], $_REQUEST['doc'], $_REQUEST['addr'], $_REQUEST['tel'], $_REQUEST['prof']);
            $this->mostrar();
        }
    }
    public function conectar()
    {
        $c=mysqli_connect($this->servidor, $this->user, $this->password, $this->nameBD) or
                die("Problemas con la conexión");
        return $c;
    }
    public function insertarSQL($conexion, $name, $tipoDoc, $doc, $addr, $tel, $prof)
    {
        $this->pname=$name;
        $this->ptipoDoc=$tipoDoc;
        $this->pdoc=$doc;
        $this->paddr=$addr;
        $this->ptel=$tel;
        $this->pprof=$prof;
        $s=mysqli_query($conexion, "insert into personas (nombre, tipodoc, numdoc,direccion, telefono, profesion) values
                  ('$this->pname','$this->ptipoDoc',' $this->pdoc',' $this->paddr',' $this->ptel',' $this->pprof')")
                  or die("Problemas en la selección" .mysqli_error($conexion));

        return $s;
    }
    public function mostrar()
    {
        echo "Nombre:".$this->pname."<br>";
        echo "Tipo de Documento:".$this->ptipoDoc."<br>";
        echo "Número de documento :".$this->pdoc."<br>";
        echo "Dirección:".$this->paddr."<br>";
        echo "Telefono:".$this->ptel."<br>";
        echo "Profesión:".$this->pprof."<br>";
    }
}

$myConec= new ConexionBD();
