<html>
<head>
<title> Request datos </title>
</head>

<body>

 <?php
 $conexion = mysqli_connect("localhost","root","mysql","testPHP") or
             die("Problemas con la conexión");
 $registros= mysqli_query($conexion,"select cur.nombrecurso, count(*) as cantidad, al.codigocurso
              from alumnos as al inner join cursos as cur on al.codigocurso= cur.codigo
              group by cur.nombrecurso")
               or die("Problemas en la selección" .mysqli_error($conexion));


 while($reg=mysqli_fetch_array($registros)){
   echo "Curso: " .$reg['nombrecurso'] ."<br>";
   echo "Inscritos: " .$reg['cantidad'] ."<br>";
   echo "Nombre inscritos:";
   if ($reg['cantidad']>0) {
        $filas= mysqli_query($conexion,"select nombre from alumnos
        where codigocurso= $reg[codigocurso]")
        or die("Problemas en la selección" .mysqli_error($conexion));
         while($fl=mysqli_fetch_array($filas)){
           echo " ".$fl['nombre'];

         }
         echo "<br>";
       }
    else {
      echo "No hay inscritos";
    }

   }


   echo "<br> <br>";


 ?>



</body>

</html>
