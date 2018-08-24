
<?php


/**
 * Mi vista
 */
class Vista2
{
    public $plantilla;

    public function __construct($parametros=[])
    {
        $this->crearFormulario($parametros);

        $this->crearPlantilla();
    }
    private function crearFormulario($parametrosHV)
    {

        $this->formulario = '
        <div class="callout secondary" style="padding:1% 1% 1% 1%;">
        <table>
          <tr>
            <td rowspan="3" style="width:20%;"><img src="imagen.png"></td>
            <td>
              <div id="rotulo" >
              <p>Nombre:</p>
              </div>
              <p id="textos">'.$parametrosHV['name'].'</p>
            </td>
            <td>
              <div id="rotulo" >
              <p>Profesión:</p>
              </div>
              <p id="textos">'.$parametrosHV['prof'].'</p>
            </td>
          </tr>
          <tr>
            <td>
              <div id="rotulo" >
              <p>Tipo de Documento:</p>
              </div>
              <p id="textos">'.$parametrosHV['tipoDoc'].'</p>
            </td>
            <td>
              <div id="rotulo" >
              <p>Número:</p>
              </div>
              <p id="textos">'.$parametrosHV['doc'].'</p>
            </td>
          </tr>
          <tr>
            <td>
              <div id="rotulo" >
              <p>Dirección:</p>
              </div>
              <p id="textos">'.$parametrosHV['addr'].'</p>
            </td>
            <td>
              <div id="rotulo" >
              <p>Teléfono:</p>
              </div>
              <p id="textos">'.$parametrosHV['tel'].'</p>
            </td>
          </tr>
        </table>
      </div>

    ';
    }

    public function crearPlantilla()
    {
        $script = "
                  <script src='js/vendor/jquery.js'></script>
                  <script src='js/vendor/what-input.js'></script>
                  <script src='js/vendor/foundation.min.js'></script>";

        $this->plantilla = "<!DOCTYPE html>\n";
        $this->plantilla .= "<html lang='en' dir='ltr'>\n";
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

    public function mostrarVista2()
    {
        echo $this->plantilla;
    }
}
?>
