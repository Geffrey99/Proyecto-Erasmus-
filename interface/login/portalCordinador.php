<?php
// include_once './helper/autocargar.php';
include_once './repository/loginSession.php';

// Iniciar la sesión
$sesion = new Sesion();
$sesion->inicia_sesion();

// Verificar si el usuario está autenticado como Candidato
if (!$sesion->estaLogeado() || $sesion->comprobar('nombre') !== 'Coordinador') {
    // Si no está autenticado, redirigir a la página de inicio de sesión
    header("Location: index.php");
    exit();
}

if (isset($_POST['logout'])) {
    $sesion->cierra_sesion();
    header("Location: index.php");
    exit();
}
?>

<div id="cabezera">
    <div id="logo">
        <P> <img src="img/cordinador.png" alt="Logo de cordinador" /><p>
    </div>

    <div id="nombreUsuario">
    <p>
    <?php 
        $dni = $sesion->comprobar('dni'); // Recupera el DNI de la sesión
        $dniOculto = substr($dni, 0, 1) . str_repeat('*', strlen($dni) - 3) . substr($dni, -2); // Oculta algunos caracteres del DNI
        echo "BIENVENIDO COORDINADOR <br>" .$dniOculto; // Muestra el DNI oculto
    ?>
    </p>
</div>


    <div>
        <P title="Crear convocatorias"><a href="?menu=PortalCoordinador&subpage=crearconvocatoria"> <img src="img/convocatoria.png"> </a><p>
    </div>
    
    <div>
    <p title="Crear convocatorias"><a href="?menu=PortalCoordinador&subpage=CrudConvocatorias"> <img src="img/crud.png"> </a><p>
    </div>

    <div>
        <p title="Asignar convocatorias"><a href="?menu=PortalCoordinador&subpage=AsignarConvocatorias"> <img src="img/asignar.png"> </a></p>
    </div>

    <div>
        <p title="Baremar solicitudes"><a href="?menu=PortalCoordinador&subpage=BaremarSolicitudes"> <img src="img/baremar.png"> </a></p>
    </div>


   


    <div id="cerrarSession">
    <form method="post" action="">
        <button type="submit" name="logout">
            <img src="img/cerrar-sesion.png" alt="Cerrar sesión">
        </button>
    </form>
</div>
</div>


