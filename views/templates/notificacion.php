    <?php
    include_once __DIR__ . '/../templates/alertas.php';
    $resultado = $_GET['resultado'] ?? '';

    if ($resultado === '1' || $resultado === '2' || $resultado === '3') {
        $mensaje = mostrarNotificacion(intval($resultado));
        if ($mensaje) { ?>
            <p class="alerta alerta__exito"> <?php echo s($mensaje) ?> </p>
        <?php }
    } else if ($resultado === '4') {
        $mensaje = mostrarNotificacion(intval($resultado));
        if ($mensaje) { ?>
            <p class="alerta alerta__error"> <?php echo s($mensaje) ?> </p>
    <?php }
    }
    ?>