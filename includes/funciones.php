<?php

function debuguear($variable) : string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}
function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}
function pagina_actual($path)  : bool{
    return str_contains($_SERVER['PATH_INFO'], $path ) ? true : false;
}
function is_auth() : bool {
    session_start();
    return isset($_SESSION['nombre']) && !empty($_SESSION);
}
function iniciarSesion()
{
    // Verifica si la sesión no está iniciada
    if (!isset($_SESSION)) {
        // Inicia la sesión
        session_start();
    }
}
function is_admin(): bool
{
    session_start();
    return isset($_SESSION['admin']) && !empty($_SESSION['admin']);
}
function mostrarNotificacion($resultado)
{
    $mensaje = '';

    switch ($resultado) {
        case 1:
            $mensaje = '¡¡Creado Correctamente!!';
            break;
        case 2:
            $mensaje = '¡¡Actualizado Correctamente!!';
            break;
        case 3:
            $mensaje = '¡¡Eliminado Correctamente!!';
            break;
        case 4:
            $mensaje = '¡¡No Se Pudo Eliminar!!';
            break;
        default:
            $mensaje = false;
            break;
    }
    return $mensaje;
}
