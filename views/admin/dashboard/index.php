<h2 class="dashboard__heading"> <?php echo $titulo; ?></h2>
<main class="bloques">
    <div class="bloques__grid">

        <div class="bloque">
            <h3 class="bloque__heading">Ultimos Registros</h3>
            <?php if (!empty($registros)) { ?>
                <table class="table">
                    <thead class="table__thead">
                        <tr>
                            <th class="table__th table__th--dash-left" scope="col">Nombre</th>
                            <th class="table__th table__th--dash" scope="col">Plan</th>
                        </tr>
                    </thead>
                    <tbody class="table__tbody">
                        <?php foreach ($registros as $registro) { ?>
                            <tr class="table__tr table__tr--dash">
                                <td class="table__td table__td--dash-left">
                                    <?php echo $registro->usuario->nombre . " " . $registro->usuario->apellido; ?>
                                </td>
                                <td class="table__td table__td--dash">
                                    <?php echo $registro->paquete->nombre; ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            <?php } else { ?>
                <p class="text-center">No Hay Registros Aún</p>
            <?php } ?>
        </div>

        <div class="bloque">
            <h3 class="bloque__heading">Ingresos</h3>
            <p class="bloque__texto--leyenda">Monto Acumulado Hasta El Momento (USD)</p>
            <div class="bloque__texto" data-aos="flip-right" data-aos-offset="-500">
                <p class="bloque__texto--cantidad">$ <?php echo $ingresos; ?></p>
            </div>
        </div>

        <div class="bloque">
            <h3 class="bloque__heading">Eventos Con (-) Lugares <br> Disponibles</h3>
            <div class="bloque__contenido">
                <?php if (!empty($menos_disponibles)) { ?>
                    <table class="table">
                        <thead class="table__thead">
                            <tr>
                                <th class="table__th table__th--dash-left" scope="col">Evento</th>
                                <th class="table__th table__th--dash" scope="col">Disponibles</th>
                            </tr>
                        </thead>
                        <tbody class="table__tbody">
                            <?php foreach ($menos_disponibles as $evento) { ?>
                                <tr class="table__tr table__tr--dash">
                                    <td class="table__td table__td--dash-left">
                                        <?php echo $evento->nombre; ?>
                                    </td>
                                    <td class="table__td table__td--dash">
                                        <?php echo $evento->disponibles; ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                <?php } else { ?>
                    <p class="text-center">No Hay Registros Aún</p>
                <?php } ?>
            </div>
        </div>

        <div class="bloque">
            <h3 class="bloque__heading">Eventos Con (+) Lugares <br> Disponibles</h3>
            <div class="bloque__contenido">
                <?php if (!empty($mas_disponibles)) { ?>
                    <table class="table">
                        <thead class="table__thead">
                            <tr>
                                <th class="table__th table__th--dash-left" scope="col">Evento</th>
                                <th class="table__th table__th--dash" scope="col">Disponibles</th>
                            </tr>
                        </thead>
                        <tbody class="table__tbody">
                            <?php foreach ($mas_disponibles as $evento) { ?>
                                <tr class="table__tr table__tr--dash">
                                    <td class="table__td table__td--dash-left">
                                        <?php echo $evento->nombre; ?>
                                    </td>
                                    <td class="table__td table__td--dash">
                                        <?php echo $evento->disponibles; ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                <?php } else { ?>
                    <p class="text-center">No Hay Registros Aún</p>
                <?php } ?>
            </div>
        </div>
    </div>
</main>