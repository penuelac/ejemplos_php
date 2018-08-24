
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


        <div class="callout secondary" style="padding:5% 10% 5% 10%;">
        <form action="pag2.php" method="post" enctype="multipart/form-data">
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

            <br>
            <label>  Ingrese el número de documento:
              <input type="text" class=".medium-6.cell" name="doc" placeholder="Número documento">
            </label>
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

            <label for="exampleFileUpload" class="button alert">Subir Archivo</label>
            <input type="file"  name="foto" id="exampleFileUpload" class="show-for-sr">
            <br>
            <br>
            <div style="text-align:center">
              <input type="submit"  class="button primary large" value="Enviar" >
            </div>
            </form>
            </div>';
    }

    private function crearPlantilla()
    {
        $script = "
                  <script src='js/vendor/jquery.js'></script>
                  <script src='js/vendor/what-input.js'></script>
                  <script src='js/vendor/foundation.min.js'></script>";

        $this->plantilla = "<!DOCTYPE html>\n";
        $this->plantilla .= "<html lang='en' dir='ltr'>\n\n";
        $this->plantilla .= "<head>\n";
        $this->plantilla .= "<meta charset='utf-8'>\n";
        $this->plantilla .= "<link rel='stylesheet' href='css/foundation.css' />";
        $this->plantilla .= "<link rel='stylesheet' href='css/style.css' />";
        $this->plantilla .= "</head>\n";
        $this->plantilla .= "<body style='margin: 0 auto;'>\n";
        $this->plantilla .= $this->formulario;
        $this->plantilla .=  $script;
        $this->plantilla .= "</body>\n";
        $this->plantilla .= "</html>";
    }

    public function mostrarVista()
    {
        echo $this->plantilla;
    }
}
?>
