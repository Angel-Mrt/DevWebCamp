<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">A continuacion se muestra el Status de tu cuenta:</p>
    <?php
    require_once __DIR__ . '/../templates/alertas.php';
    ?>
    <?php if (isset($alertas['exito'])) { ?>
        <div class="acciones--centrar">
            <a href="/login" class="acciones__enlace--boton">Inciar Sesión </a>
        </div>
    <?php } ?>
</main>