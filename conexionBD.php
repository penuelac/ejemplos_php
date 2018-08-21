<html>
<head>
<title> Formulario </title>
</head>

<body>

<h1> Alumnos </h1>

<form method="post" action="conexionBD1.php">
  Ingrese su nombre:
  <input type="text" name = "nombre">
  <br>
  <br>
  Ingrese su correo:
  <input type="text" name = "mail">
  <br>
  <br>
  Seleccione el curso:
  <select name="codigocurso">
    <option value="1"> PHP </option>
    <option value="2"> ASP </option>
    <option value="3"> JSP </option>
  </select>
  <br>
  <br>
  <input type="submit" value="Enviar">



</form>


</body>





</html>
