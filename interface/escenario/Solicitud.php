<head>
    <link rel="stylesheet" href="css/solicitud.css">
    <script src="js/foto.js" defer></script>
    <script src="js/pdf.js" defer></script>
    <script src="js/solicitud.js" defer></script>
</head>

<body id="BodySolicitud" >
    <?php
    $convocatorias = convocatoriaRepos::ObtenerConvocatorias();
    $destinatarios = destinatarioRepos::ObtenerDestinatarios();
    ?>

    <div id="capturedImagesContainer"></div>

    <div id="form-container">
        <h2>SOLICITUD</h2>
        <form method="post" id="FormSolicitudd" action="./api/insertSolicitud.php" enctype="multipart/form-data">
            <!--SE AUTORELLENA EL CAMPO DEL DNI CON EL INICIO DE SESION--->
            <label for="dni_Candidato">DNI:</label>
            <input type="text" id="dni_Candidato" name="dni_Candidato" value="<?php echo $dni; ?>" readonly><br>

            <label for="ID_CONVOCATORIA">CONVOCATORIAS:</label>
            <select id="ID_CONVOCATORIA" name="ID_CONVOCATORIA">
                <?php foreach ($convocatorias as $convocatoria) : ?>
                    <option value="<?= $convocatoria['Id_Convocatoria'] ?>">
                        <?= $convocatoria['movilidades'] ?>, <?= $convocatoria['tipo'] ?>, <?= $convocatoria['codProyecto'] ?>, <?= $convocatoria['destino'] ?>
                    </option>
                <?php endforeach; ?>
            </select><br>
            <label for="DESTINATARIO">GRUPO:</label> <!--ES MI TABLA DESTINATARIO EN DB-->
            <select id="DESTINATARIO" name="DESTINATARIO">
                <?php foreach ($destinatarios as $destinatario) : ?>
                    <option value="<?= $destinatario['Cod_Grupo'] ?>">
                        <?= $destinatario['nombre'] ?>
                    </option>
                <?php endforeach; ?>
            </select><br>

            <label for="TELEFONO">TELEFONO:</label>
            <input type="text" id="TELEFONO" name="TELEFONO">
            <span id="error_TELEFONO" style="color: red;"></span><br>
            
            <label for="EMAIL">EMAIL:</label>
            <input type="email" id="EMAIL" name="EMAIL">
            <span id="error_EMAIL" style="color: red;"></span><br>

            <label for="DOMICILIO">DOMICILIO:</label>
            <input type="text" id="DOMICILIO" name="DOMICILIO">
            <span id="error_DOMICILIO" style="color: red;"></span><br>

            <label for="OTRO_PDF">Informe de idoneidad:</label>
            <input type="file" id="OTRO_PDF" name="OTRO_PDF" accept="application/pdf">
            <span id="error_OTRO_PDF" style="color: red;"></span><br>

            <!-- Aquí está el campo oculto para la imagen capturada -->
            <input type="hidden" id="captured_image" name="captured_image">

            <input type="submit" id="formSolicitud" value="Enviar">
        </form>
    </div>

    <div id="buttons-container">
        <button id="abrir">MOSTRAR PDF</button>
        <button id="openModal">SACAR FOTO</button>
    </div>

    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close">×</span>

            <div id="contenedor">
                <video id="player" controls autoplay></video>
                <canvas width="320" height="240" id="canvas"></canvas>
                <div id="recuadro"></div>
            </div>
            <button id="capture">Capture</button>
        </div>
    </div>
</body>
</html>
