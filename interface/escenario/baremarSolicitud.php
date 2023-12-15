<?php
// Primero, necesitas conectar a tu base de datos.
// Asegúrate de reemplazar 'nombre_base_de_datos', 'nombre_usuario' y 'contraseña' con tus propios valores.
// $db = new PDO('mysql:host=localhost;dbname=nombre_base_de_datos', 'nombre_usuario', 'contraseña');
include_once 'helper/autocargar.php';
include_once 'db.php';
Database::abreConexion();
// Luego, ejecuta tu consulta SQL.
$query = "
    SELECT 
        C.Id_Convocatoria AS 'ID Convocatoria',
        I.nombre_itemBaremo AS 'Nombre ItemBaremo',
        CB.valor_min AS 'Valor Mínimo',
        CB.valor_max AS 'Valor Máximo',
        B.URL AS 'URL',
        B.NOTA AS 'Nota'
    FROM 
        ConvocatoriaBaremo CB
    JOIN 
        ItemBaremo I ON CB.Id_itemBaremo = I.Id_itemBaremo
    JOIN 
        Baremacion B ON I.Id_itemBaremo = B.Id_itemBaremo
    JOIN 
        Convocatoria C ON CB.Id_Convocatoria = C.Id_Convocatoria;
";
$result = $db->query($query);

// Ahora, puedes mostrar los resultados en una tabla.
echo "<table border='1'>";
echo "<tr><th>ID Convocatoria</th><th>Nombre ItemBaremo</th><th>Valor Mínimo</th><th>Valor Máximo</th><th>URL</th><th>Nota</th><th>Actualizar Nota</th></tr>";
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>" . $row['ID Convocatoria'] . "</td>";
    echo "<td>" . $row['Nombre ItemBaremo'] . "</td>";
    echo "<td>" . $row['Valor Mínimo'] . "</td>";
    echo "<td>" . $row['Valor Máximo'] . "</td>";
    echo "<td>" . $row['URL'] . "</td>";
    echo "<td>" . $row['Nota'] . "</td>";
    echo "<td><form action='actualizar_nota.php' method='post'><input type='hidden' name='id_convocatoria' value='" . $row['ID Convocatoria'] . "'/><input type='number' name='nota' min='0' max='10' step='1'/><input type='submit' value='Actualizar Nota'/></form></td>";
    echo "</tr>";
}
echo "</table>";
?>