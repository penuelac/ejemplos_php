<?php

require('pagina1.class.php');
require('pagina2.class.php');


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
        $resultado= New Vista2(['name'=>$this->pname,
                                'prof'=>$this->pprof,
                                'tipoDoc'=>$this->ptipoDoc,
                                'doc'=>$this->pdoc,
                                'addr'=>$this->paddr,
                                'tel'=>$this->ptel]);
        $resultado->mostrarVista2();
    }
}

$myConec= new ConexionBD();
