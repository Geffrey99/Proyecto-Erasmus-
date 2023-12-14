<?php
// include_once './helper/autocargar.php';
include_once './repository/loginSession.php';

// Iniciar la sesión
$sesion = new Sesion();
$sesion->inicia_sesion();

// Verificar si el usuario está autenticado como Candidato
if (!$sesion->estaLogeado() || $sesion->comprobar('nombre') !== 'Candidato') {
    // Si no está autenticado, redirigir a la página de inicio de sesión
    header("Location: index.php");
    exit();
}
// Si se hace clic en el botón de logout
if (isset($_POST['logout'])) {
    // Cerrar la sesión
    $sesion->cierra_sesion();
    
    // Redirigir a la página de inicio de sesión
    header("Location: index.php");
    exit();
}
?>

<div id="cabezera">
    <div id="logo">
        <P> <img src="img/candidato.png" alt="Logo de candidato" /><p>
    </div>

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
        <button type="submit" name="logout">
            <img src="img/cerrar-sesion.png" alt="Cerrar sesión">
        </button>
    </form>
</div>
</div>


