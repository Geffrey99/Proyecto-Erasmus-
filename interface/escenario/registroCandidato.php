
<head>
<script src="js/candidato.js" defer></script>
<link href="css/registroCandidato.css" rel="stylesheet" type="text/css" />
</head>

<body id="registroCandidato">

<form action="./api/insertCandidato.php" id="Formulario" class="form_candidato" method="post" enctype="multipart/form-data">

<div class="form-group"> 
    <p>REGISTRO.CANDIDATO</p> 
</div>

<div class="columna">   
    <!-- <legend>REGISTRO.CANDIDATO</legend> -->
    <label for="dni_Candidato">DNI Candidato:</label><br>
    <input type="text" id="dni_Candidato" class="input_cs" name="dni_Candidato" maxlength="9"><br>
    <span id="error_dni" class="inputError" style="color: red;"></span>
    
    <label for="fecha_nac_Candidato">Fecha de Nacimiento:</label><br>
    <input type="date" id="fecha_nac_Candidato" class="input_cs" name="fecha_nac_Candidato" required><br>
    <span id="error_fecha" style="color: red;"></span> <!-- Mensaje de error -->
    <button type="button" id="abrir" style="display: none;">Registro Tutor</button> <!-- Botón para abrir el modal -->
    
    <label for="nombre_Candidato">Nombre:</label><br>
    <input type="text" id="nombre_Candidato" class="input_cs" name="nombre_Candidato" maxlength="50"><br>
    <span id="error_nombre" style="color: red;"></span>
    
    <label for="ap1_Candidato">Primer Apellido:</label><br>
    <input type="text" id="ap1_Candidato" class="input_cs" name="ap1_Candidato" maxlength="50"><br>
    <span id="error_ap1" style="color: red;"></span>
    
    <label for="ap2_Candidato">Segundo Apellido:</label><br>
    <input type="text" id="ap2_Candidato" class="input_cs" name="ap2_Candidato" maxlength="50"><br>
    <span id="error_ap2" style="color: red;"></span>
</div>

<div class="columna">
    <label for="telefono_Candidato">Teléfono:</label><br>
    <input type="text" id="telefono_Candidato" class="input_cs" name="telefono_Candidato" maxlength="15"><br>
    <span id="error_telefono" style="color: red;"></span>

    <label for="correo_Candidato">Correo:</label><br>
    <input type="email" id="correo_Candidato" class="input_cs" name="correo_Candidato" maxlength="50"><br>
    <span id="error_correo" style="color: red;"></span>

    <label for="domicilio_Candidato">Domicilio:</label><br>
    <input type="text" id="domicilio_Candidato" class="input_cs" name="domicilio_Candidato" maxlength="50"><br>
    <span id="error_domicilio" style="color: red;"></span>

    <label for="cod_Grupo">Código de grupo:</label><br>
            <select id="Cod_Grupo" name="Cod_Grupo" required>
                <option value="1AG">1AG</option>
                <option value="2AG">2AG</option>
                <option value="3AG">3AG</option>
                <option value="4AG">4AG</option>    
                <option value="5AG">5AG</option>
            </select>
    <br>
    
    <label for="password">Contraseña:</label><br>
    <input type="password" id="password" class="input_cs" name="password" maxlength="30"><br>
    <span id="error_password" style="color: red;"></span>
    

   
 <div id="modal" class="modal">
    <div class="modal-content">
     <span class="close">&times;</span>   
        <fieldset id="tutor_legal">
        <legend>TUTOR LEGAL</legend>
            <label for="dni_TutorLegal">DNI Candidato:</label><br>
            <input type="text" id="dni_TutorLegal" class="input_csmodal" name="dni_TutorLegal" maxlength="9"><br>
            <span id="error_dni_tutor" class="inputError" style="color: red;"></span>
            
            <label for="nombre_TutorLegal">Nombre:</label><br>
            <input type="text" id="nombre_TutorLegal" class="input_csmodal" name="nombre_TutorLegal" maxlength="50"><br>
            <span id="error_nombre_tutor" class="inputError" style="color: red;"></span>
            
            <label for="apellido_TutorLegal">Primer Apellido:</label><br>
            <input type="text" id="apellido_TutorLegal" class="input_csmodal" name="apellido_TutorLegal" maxlength="50"><br>
            <span id="error_apellido_tutor" class="inputError" style="color: red;"></span>
            
            <label for="telefono_TutorLegal">Teléfono:</label><br>
            <input type="text" id="telefono_TutorLegal" class="input_csmodal" name="telefono_TutorLegal" maxlength="15"><br>
            <span id="error_telefono_tutor" class="inputError" style="color: red;"></span>
            
            <label for="domicilio_TutorLegal">Domicilio:</label><br>
            <input type="text" id="domicilio_TutorLegal" class="input_csmodal" name="domicilio_TutorLegal" maxlength="50"><br> 
            <span id="error_domicilio_tutor" class="inputError" style="color: red;"></span>
            <div id="guardar_info">
            <input type="button" value="guardar">
            </div>
        </fieldset>
    </div>
 </div>
 </div>
    <div class="form-group">
        <input type="submit" value="Enviar">
    </div>

</form>
</body>