
<?php


/**
 * Mi vista
 */
class Vista
{
    public $plantilla;

    public function __construct($var='')
    {
        $this->crearFormulario();

        $this->crearPlantilla();
    }
    private function crearFormulario()
    {
        $this->formulario = '
        <form action="pag2.php" method="POST" enctype="multipart/form-data">
            Ingrese el nombre :<br>
            <input type="text" name="name"> <br> <br>
            Seleccione su tipo de documento:<br>
            <select name="tipoDoc">
              <option value="cc"> Cédula de ciudadanía </option>
              <option value="ti"> Tarjeta de identidad </option>
              <option value="ps"> Pasaporte </option>
              <option value="cc"> NIT </option>
            </select>
            <br>
            <br>
            Ingrese el número de documento:
            <br>
            <input type="text" name="doc">
            <br>
            <br>
            Ingrese la dirección:
            <br>
            <input type="text" name="addr">
            <br>
            <br>
            Ingrese el número de telefono:
            <br>
            <input type="text" name="tel">
            <br>
            <br>
            Seleccione su profesión:
            <br>
            <select name="prof">
              <option value="Abogado"> Abogado </option>
              <option value="Medico"> Médico </option>
              <option value="Ingeniero"> Ingeniero</option>
              <option value="Biologo"> Biólogo </option>
              <option value="Agricultor"> Agricultor </option>
            </select>
            <br>
            <br>
            Seleccione la imagen:
            <br>
            <input type="file" name="foto">
            <br>
            <br>
            <input type="submit" value="Enviar">
            </form>';
    }

    private function crearPlantilla()
    {
        $this->plantilla = "<!DOCTYPE html>\n";
        $this->plantilla .= "<html lang='en' dir='ltr'>\n\n";
        $this->plantilla .= "<head>\n";
        $this->plantilla .= "<meta charset='utf-8'>\n";
        $this->plantilla .= "</head>\n";
        $this->plantilla .= "<body>\n";
        $this->plantilla .= $this->formulario;
        $this->plantilla .= "</body>\n";
        $this->plantilla .= "</html>";
    }

    public function mostrarVista()
    {
        echo $this->plantilla;
    }
}
?>
