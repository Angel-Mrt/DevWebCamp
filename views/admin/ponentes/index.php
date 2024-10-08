<h2 class="dashboard__heading"> <?php echo $titulo; ?></h2>

<div class="dashboard__contenedor-boton">
    <a href="/admin/ponentes/crear" class="dashboard__boton">
        <i class="fa-solid fa-circle-plus"></i>
        Añadir Ponente
    </a>
</div>
<?php
// Asegúrate de que la variable $resultado esté definida y tenga un valor predeterminado
$resultado = $_GET['resultado'] ?? null;
if (!empty($resultado)) {
    $datos = mostrarNotificacion(intval($resultado));
    if ($datos) { ?>
        <p class="alerta alerta-dash alerta__<?php echo $datos['tipo']; ?>"> <?php echo $datos['mensaje']; ?> </p>
<?php }
}  ?>
<div class="dashboard__contenedor">
    <?php if (!empty($ponentes)) { ?>
        <table class="table">
            <thead class="table__thead">
                <tr>
                    <th class="table__th" scope="col">Nombre</th>
                    <th class="table__th" scope="col">Ubicacion</th>
                    <th class="table__th" scope="col"></th>
                </tr>
            </thead>
            <tbody class="table__tbody">
                <?php foreach ($ponentes as $ponente) { ?>
                    <tr class="table__tr">
                        <td class="table__td">
                            <?php echo $ponente->nombre . " " . $ponente->apellido; ?>
                        </td>
                        <td class="table__td">
                            <?php echo $ponente->ciudad . ", " . $ponente->pais; ?>
                        </td>
                        <td class="table__td--acciones">
                            <a class="table__accion table__accion--editar" href="/admin/ponentes/editar?id=<?php echo $ponente->id; ?>">
                                <i class="fa-solid fa-user-pen"></i>
                                Editar
                            </a>
                            <form action="/admin/ponentes/eliminar" method="post" class="table__formulario">
                                <input type="hidden" name="id" value="<?php echo $ponente->id; ?>">
                                <button type="submit" class="table__accion table__accion--eliminar">
                                    <i class="fa-solid fa-circle-xmark"></i>
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } else { ?>
        <p class="text-center">No Hay Ponentes Aún</p>
    <?php } ?>
</div>

<?php
echo $paginacion;
?>