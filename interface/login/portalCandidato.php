<?php
// include_once './helper/autocargar.php';
include_once './repository/loginSession.php';

// Se inicia la sesion....................... 
$sesion = new Sesion();
$sesion->inicia_sesion();

// Lo verifico...........
if (!$sesion->estaLogeado() || $sesion->comprobar('nombre') !== 'Candidato') {
    // Si no está autenticado lo redirigo al index............
    header("Location: index.php");
    exit();
}
// Para cerrar session con el boton.............
if (isset($_POST['logout'])) {
    // Cerrar la sesión y al index..........
    $sesion->cierra_sesion();
    header("Location: index.php");
    exit();
}
?>

<div id="cabezera">
    <div id="logo">
        <P> <img src="img/candidato.png" alt="Logo de candidato" /><p>
    </div>
<!---RECUPERO EL DNI DE LA SESION Y LO MUESTRO OCULTO EN LA CABEZERA PARA QUE SE VEA QUE ESTA DENTRO CON SU DNI------------>
    <div id="nombreUsuario">
    <p>
    <?php 
        $dni = $sesion->comprobar('dni'); // Recupera el DNI de la sesión
        $dniOculto = substr($dni, 0, 1) . str_repeat('*', strlen($dni) - 3) . substr($dni, -2); // Oculta algunos caracteres del DNI
        echo "BIENVENIDO CANDIDATO <br>" .$dniOculto; // Muestra el DNI oculto
    ?>
    </p>
    </div>

    <div>
        <P title="Hacer solicitud"><a href="?menu=PortalCandidato&subpage=HacerSolicitud"> <img src="img/solicitud.png"> </a><p>
    </div>

    <div>
        <p title="Ver solicitud"><a href="?menu=PortalCandidato&subpage=VerSolicitud">  <img src="img/archivo.png"> </a></p>
    </div>

    <div id="cerrarSession">
    <form method="post" action="">
        <button type="submit" name="logout" class="logout">
            <img src="img/logout.png" alt="Cerrar sesión">
        </button>
    </form>
    </div>
</div>


