<head>
  <script src="./js/convocatoria.js" defer></script>
  <link href="./css/convocatoria.css" rel="stylesheet" type="text/css" /> 
</head>
<form id="FormConvocatoria" action="./api/insertConvocatoria.php" method="post" enctype="multipart/form-data">
<div class="form-section">   
    <fieldset>
        <legend>Convocatoria</legend>
        <div class="form-group">
            <label for="movilidades">Movilidades:</label>
            <input type="number" id="movilidades" name="movilidades" min="1" max="10" required>
        </div>
        <div class="form-group">
            <label for="tipo">Tipo:</label>
            <input type="radio" id="larga" name="tipo" value="larga duracion">
            <label for="larga">Larga duración</label>
            <input type="radio" id="corta" name="tipo" value="corta duracion">
            <label for="corta">Corta duración</label>
        </div>

        <div class="form-group">
            <label for="codProyecto">Código proyecto:</label>
            <select id="codProyecto" name="codProyecto" required>
                <option value="PT01">PT01</option>
                <option value="PT02">PT02</option>
                <option value="PT03">PT03</option>
                <option value="PT04">PT04</option>
                <option value="PT05">PT05</option>
            </select>
        </div>
        <div class="form-group">
            <label for="destino">Destino:</label>
            <select id="destino" name="destino" required>
                <option value="Alemania">Alemania</option>
                <option value="Francia">Francia</option>
                <option value="Italia">Italia</option>
                <option value="Portugal">Portugal</option>
                <option value="Reino Unido">Reino Unido</option>
            </select>
        </div>

    </fieldset>
    </div>
    <div class="form-section">  
    <fieldset>
        <legend>Fechas</legend>
        <div class="form-group">
            <label for="fechaInicio_Solicitudes">Fecha inicio solicitudes:</label>
            <input type="date" id="fechaInicio_Solicitudes" name="fechaInicio_Solicitudes" required>
        </div>
        <div class="form-group">
            <label for="fechaFin_Solicitudes">Fecha fin solicitudes:</label>
            <input type="date" id="fechaFin_Solicitudes" name="fechaFin_Solicitudes" required>
        </div>
        <div class="form-group">
            <label for="fechaInicio_Pruebas">Fecha inicio pruebas:</label>
            <input type="date" id="fechaInicio_Pruebas" name="fechaInicio_Pruebas" required>
        </div>
        <div class="form-group">
            <label for="fechaFin_Pruebas">Fecha fin pruebas:</label>
            <input type="date" id="fechaFin_Pruebas" name="fechaFin_Pruebas" required>
        </div>
        <div class="form-group">
            <label for="fecha_Lista_Provisional">Fecha lista provisional:</label>
            <input type="date" id="fecha_Lista_Provisional" name="fecha_Lista_Provisional" required>
        </div>
        <div class="form-group">
            <label for="Fecha_Lista_Definitiva">Fecha lista definitiva:</label>
            <input type="date" id="Fecha_Lista_Definitiva" name="fecha_Lista_Definitiva" required>
        </div>
    </fieldset>
</div>
        <!-- <div class="form-group">
            <label for="codProyecto">Código proyecto:</label>
            <select id="codProyecto" name="codProyecto" required>
                <option value="PT01">PT01</option>
                <option value="PT02">PT02</option>
                <option value="PT03">PT03</option>
                <option value="PT04">PT04</option>
                <option value="PT05">PT05</option>
            </select>
        </div>
        <div class="form-group">
            <label for="destino">Destino:</label>
            <select id="destino" name="destino" required>
                <option value="Alemania">Alemania</option>
                <option value="Francia">Francia</option>
                <option value="Italia">Italia</option>
                <option value="Portugal">Portugal</option>
                <option value="Reino Unido">Reino Unido</option>
            </select>
        </div> -->
    <div class="form-section">
    <fieldset>
        <legend>Convocatoria Baremo</legend>
        <table id="convocatoria_baremo">
            <tr>
                <th>SELECCION</th>
                <th>ID_BAREMO</th>
                <th>REQUISITOS</th>
                <th>VALOR MIN</th>
                <th>VALOR MAX</th>
                <th>PRESENTAUSUARIO</th>
                <th>OBLIGATORIO</th>
            </tr>
            <tr>
                <td><input id="seleccion" type="checkbox" name="Id_itembaremo[]" value="1"></td>
                <td>1</td>
                <td>IDIOMA<input type="hidden" name="requisitos[]" value="1"> </td>
                <td><input id="no" name="valor_min[]" type="number" min="0" max="12" disabled></td>
                <td><input id="no" name="valor_max[]" type="number" min="0" max="12" disabled></td>
                <td><input id="no" name="presentausuario[]" type="checkbox" value="1" disabled></td>
                <td><input id="no" name="obligatorio[]" type="checkbox" value="1" disabled></td>
                
            </tr>
            <tr>
                <td><input id="seleccion" type="checkbox" name="Id_itembaremo[]" value="2"></td>
                <td>2</td>
                <td>ENTREVISTA<input type="hidden" name="requisitos[]" value="1"></td>
                <td><input id="no" name="valor_min[]" type="number" min="0" max="12" disabled></td>
                <td><input id="no" name="valor_max[]" type="number" min="0" max="12" disabled></td>
                <td><input id="no" name="presentausuario[]" type="checkbox" value="1" disabled></td>
                <td><input id="no" name="obligatorio[]" type="checkbox" value="1" disabled></td>
                
            </tr>
            <tr>
            <td><input id="seleccion" type="checkbox" name="Id_itembaremo[]" value="3"></td>
                <td>3</td>
                <td>NOTAS<input type="hidden" name="requisitos[]" value="1"></td>
                <td><input id="no" name="valor_min[]" type="number" min="0" max="12" disabled></td>
                <td><input id="no" name="valor_max[]" type="number" min="0" max="12" disabled></td>
                <td><input id="no" name="presentausuario[]" type="checkbox" value="1" disabled></td>
                <td><input id="no" name="obligatorio[]" type="checkbox" value="1" disabled></td>
                
            </tr>
            <tr>
            <td><input id="seleccion" type="checkbox" name="Id_itembaremo[]" value="4"></td>
                <td>4</td>
                <td>INFORME IDONEIDAD<input type="hidden" name="requisitos[]" value="1"></td>
                <td><input id="no" name="valor_min[]" type="number" min="0" max="12" disabled></td>
                <td><input id="no" name="valor_max[]" type="number" min="0" max="12" disabled></td>
                <td><input id="no" name="presentausuario[]" type="checkbox" value="1" disabled></td>
                <td><input id="no" name="obligatorio[]" type="checkbox" value="1" disabled></td>
                
            </tr>
        </table>
    </fieldset>
    </div>
    <div class="form-section">
    <fieldset id="convocatoria_baremo_idioma">
        <legend>Idioma</legend>
        <table id="nivel_idioma">
            <tr>
                <th>A1<input id="seleccion" type="checkbox"  value="1"></th>
                <th>A2<input id="seleccion" type="checkbox"  value="2"></th>
                <th>B1<input id="seleccion" type="checkbox"  value="3"></th>
                <th>B2<input id="seleccion" type="checkbox"  value="4"></th>
                <th>C1<input id="seleccion" type="checkbox"  value="5"></th>
                <th>C2<input id="seleccion" type="checkbox"  value="6"></th>
            </tr>
            <tr>
                <td><input type="number" min="0" max="12" name="A1"></td>
                <td><input type="number" min="0" max="12" name="A2"></td>
                <td><input type="number" min="0" max="12" name="B1"></td>
                <td><input type="number" min="0" max="12" name="B2"></td>
                <td><input type="number" min="0" max="12" name="C1"></td>
                <td><input type="number" min="0" max="12" name="C2"></td>
            </tr>
        </table>
    </fieldset>
    </div>
   
      <div class="form-butt">
        <input type="submit" value="Enviar">
      </div>
    
  </form>
