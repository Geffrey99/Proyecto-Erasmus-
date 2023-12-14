<?php
$convocatorias = convocatoriaRepos::ObtenerConvocatorias();
$destinatarios = destinatarioRepos::ObtenerDestinatarios();
$destinatarioConvocatorias = destinatarioConvocatoriaRepos::ObtenerDestinatarioConvocatorias();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Convocatorias</title>
    
    <link href="css/asignarConvocatoria.css" rel="stylesheet" type="text/css" />
    <script src="js/asignarConvocatoria.js" defer></script>
</head>
<body id="asignarConvocatorias">
    <h1 id="TituloConv" >Convocatorias disponibles</h1>
    <table>

        <tr>
            <th>ID_CONVOCATORIA</th>
            <th>TIPO</th>
            <th>CODPROYECTO</th>
            <th>DESTINO</th>
            <th id="destinatarios" >ASIGNAR A GRUPO</th> <!--EN MI TABLA db DESTINATANRIOS" -->
        </tr>
        <?php foreach ($convocatorias as $convocatoria): ?>
        <tr>
            <td><?php echo $convocatoria['Id_Convocatoria']; ?></td>
            <td><?php echo $convocatoria['tipo']; ?></td>
            <td><?php echo $convocatoria['codProyecto']; ?></td>
            <td><?php echo $convocatoria['destino']; ?></td>
            <td>
                <form action="./api/asignarConvocatoria.php" method="post">
                    <input type="hidden" name="id_convocatoria" value="<?php echo $convocatoria['Id_Convocatoria']; ?>">
                    <select id="DESTINATARIO" name="DESTINATARIO">
                <?php foreach ($destinatarios as $destinatario) : ?>
                    <option value="<?= $destinatario['Cod_Grupo'] ?>">
                        <?= $destinatario['nombre'] ?>
                    </option>
                <?php endforeach; ?>
            </select><br>
                    <input type="submit" id="btnAsignar" value="Asignar">
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <button id="myBtn">Asignaciones</button>

<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
    <h1>Asignaciones de convocatorias</h1>
    <table>
        <tr>
            <th>ID_CONVOCATORIA</th>
            <th>COD_GRUPO</th>
            <th>NOMBRE DEL GRUPO</th>
            <th>TIPO CONVOCATORIA</th>
            <th>DESTINO</th>
        </tr>
        <?php foreach ($destinatarioConvocatorias as $destinatarioConvocatoria): ?>
        <tr>
            <td><?php echo $destinatarioConvocatoria['Id_Convocatoria']; ?></td>
            <td><?php echo $destinatarioConvocatoria['Cod_Grupo']; ?></td>
            <td><?php echo $destinatarioConvocatoria['nombre']; ?></td>
            <td><?php echo $destinatarioConvocatoria['tipo']; ?></td>
            <td><?php echo $destinatarioConvocatoria['destino']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    </div>
    </div>

</body>
</html>


