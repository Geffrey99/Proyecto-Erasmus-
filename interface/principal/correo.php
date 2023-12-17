<!--------INTERFAZ DE CORREO--------->
<head>
    <link rel="stylesheet" type="text/css" href="./css/correo.css">
</head>
<body id="correoErazmuz">
    <form action="./interface/principal/enviarCorreo.php" method="post" id="formCorreo">
    <fieldset>
        <legend> Envia tu consulta a CORREO.ERAZMUZ </legend>
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" placeholder="Geffrey" required><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" placeholder="gef@gmail.com" required><br>
        <!--------SE SUPONE QUE EL USUARIO NO ESCRIBE EL CORREO POR ESO HIDDEN --------->
        <input type="hidden" id="destinatario" name="destinatario" value="gzamzam287@g.educaand.es"><br>
        <input type="hidden" id="nombreDestinatario" name="nombreDestinatario" value="proyectoERAZMUZ"><br>
        <label for="mensaje">Mensaje:</label><br>
        <textarea id="mensaje" name="mensaje" placeholder="He tenido un problema con mi beca id:01...." required></textarea><br>
        <input type="submit" id="enviaCorreo" value="Enviar">
        <?php
if (isset($_GET['mensaje'])) {
    if ($_GET['mensaje'] == 'enviado') {
        echo '<p class="mensaje-exito">VA PERFECTO! NOS PONDREMOS EN CONTACTO CONTIGO</p>';
    } else if ($_GET['mensaje'] == 'error') {
        echo '<p class="mensaje-error">No enviado algo fue jodido ' . urldecode($_GET['error']) . '</p>';
    }
}
?>
  </fieldset>
    </form>
</body>
