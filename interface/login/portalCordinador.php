<?php
// include_once './helper/autocargar.php';
include_once './repository/loginSession.php';


$sesion = new Sesion();
$sesion->inicia_sesion();

//------------ Verificar si el usuario está autenticado como Candidato
if (!$sesion->estaLogeado() || $sesion->comprobar('nombre') !== 'Coordinador') {
    // Si no está autenticado, redirigir a la página de inicio de sesión-----EL INDEX
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
<!---RECUPERO EL DNI DE LA SESION Y LO MUESTRO OCULTO EN LA CABEZERA PARA QUE SE VEA QUE ESTA DENTRO CON SU DNI------------>
    <div id="nombreUsuario">
    <p>
    <?php 
        $dni = $sesion->comprobar('dni'); 
        $dniOculto = substr($dni, 0, 1) . str_repeat('*', strlen($dni) - 3) . substr($dni, -2); //Se oculta algunos caracteres del DNI
        echo "BIENVENIDO COORDINADOR <br>" .$dniOculto; 
    ?>
    </p>
    </div>

<!---SUBPAGE DE COORDINADOR------------>
    <div>
        <P title="CREAR CONVOCATORIAS"><a href="?menu=PortalCoordinador&subpage=crearconvocatoria"> <img src="img/convocatoria.png"> </a><p>
    </div>
    
    <div>
    <p title="CRUD CONVOCATORIAS"><a href="?menu=PortalCoordinador&subpage=CrudConvocatorias"> <img src="img/crud.png"> </a><p>
    </div>

    <div>
        <p title="ASIGNAR CONVOCATORIAS"><a href="?menu=PortalCoordinador&subpage=AsignarConvocatorias"> <img src="img/asignar.png"> </a></p>
    </div>

    <div>
        <p title="BAREMAR SOLICITUDES"><a href="?menu=PortalCoordinador&subpage=BaremarSolicitudes"> <img src="img/baremar.png"> </a></p>
    </div>


   
<!---HACE LOGOUT------------>

    <div id="cerrarSession">
    <form method="post" action="">
        <button type="submit" name="logout" class="logout">
        <img src="img/logout.png" alt="Cerrar sesión">
        </button>
    </form>
    </div>
</div>


