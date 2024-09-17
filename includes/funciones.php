<?php

function debuguear($variable): string
{
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}
function s($html): string
{
    $s = htmlspecialchars($html);
    return $s;
}
function pagina_actual($path): bool
{
    return str_contains($_SERVER['PATH_INFO'] ?? '/', $path) ? true : false;
}
function is_auth(): bool
{
    if (!isset($_SESSION)) {
        session_start();
    }
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
    if (!isset($_SESSION)) {
        session_start();
    }
    return isset($_SESSION['admin']) && !empty($_SESSION['admin']);
}
function mostrarNotificacion($resultado)
{
    $mensaje = '';
    $tipo = '';

    switch ($resultado) {
        case 1:
            $mensaje = '¡¡Creado Correctamente!!';
            $tipo = 'exito';
            break;
        case 2:
            $mensaje = '¡¡Actualizado Correctamente!!';
            $tipo = 'exito';
            break;
        case 3:
            $mensaje = '¡¡Eliminado Correctamente!!';
            $tipo = 'exito';
            break;
        case 4:
            $mensaje = '¡¡No Se Pudo Eliminar!!';
            $tipo = 'error';
            break;
        default:
            $mensaje = 'Resultado desconocido';
            $tipo = 'info'; // Puedes usar un tipo genérico como 'info' si el resultado no es reconocido
            break;
    }
    return [
        'mensaje' => $mensaje,
        'tipo' => $tipo
    ];

}
function aos_animacion(): void
{
    $efectos = ['fade-up', 'fade-down', 'fade-left', 'fade-right', 'flip-left', 'flip-right', 'zoom-in', 'zoom-in-up', 'zoom-in-down', 'zoom-out'];
    $efecto = array_rand($efectos, 1);
    echo ' data-aos="' . $efectos[$efecto] . '" ';
}
