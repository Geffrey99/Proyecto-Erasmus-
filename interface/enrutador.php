<?php
$menu = isset($_GET['menu']) ? $_GET['menu'] : 'inicio';


switch ($menu) {
    case 'inicio':
        require_once './interface/principal/principal.php';
        require_once './interface/principal/main.php';
        break;
    case 'candidato':
        require_once './interface/principal/principal.php';
        require_once './interface/login/logeoCandidato.php';
        break;
    case 'coordinador':
        require_once './interface/principal/principal.php';
        require_once './interface/login/LogueoCordinador.php';
        break;
    case 'registro':
        require_once './interface/principal/principal.php';
        require_once './interface/escenario/registroCandidato.php';
        break;
    case 'registroTerminado':
        require_once './interface/principal/principal.php';
        require_once './interface/escenario/todoOk.php';
        break;
    case 'convocatorias':
        require_once './interface/principal/principal.php';
        require_once './interface/escenario/tablaConv.php';
        break;   
    case 'PortalCandidato':
        require_once './interface/login/portalCandidato.php';    
        if (isset($_GET['subpage'])) {
            $subpage = $_GET['subpage'];
            if ($subpage == 'HacerSolicitud') {
                require_once './interface/escenario/solicitud.php';
            } elseif ($subpage == 'VerSolicitud') {
                require_once './interface/escenario/solicitudesCandidato.php';
            } elseif ($subpage == 'BaremarSolicitud') {
                require_once './interface/subpagina2.php';
            } 
           
        }
        break;
    case 'PortalCoordinador':
        require_once './interface/login/portalCordinador.php';
            if (isset($_GET['subpage'])) {
                $subpage = $_GET['subpage'];
                if ($subpage == 'crearconvocatoria') {
                    require_once './interface/escenario/convocatoria.php';
                } elseif ($subpage == 'AsignarConvocatorias') {
                    require_once './interface/escenario/asignarConvocatoria.php';
                } elseif ($subpage == 'BaremarSolicitudes') {
                    require_once './interface/escenario/baremacion.php';
                } elseif ($subpage == 'BaremarSolicitudSeleccionada') {
                    require_once './interface/escenario/baremarSolicitud.php';
                } elseif ($subpage =='CrudConvocatorias') {
                    require_once './interface/escenario/tablaConv.php';
                }
            }
            break;  
    case '':
        require_once './interface/convocatoria.php';

    default:
        require_once 'index.php';
}

?>

