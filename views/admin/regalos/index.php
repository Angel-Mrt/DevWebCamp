<h2 class="dashboard__heading"> <?php echo $titulo; ?></h2>

<div class="dashboard__contenedor--regalos">
    <?php if (!empty($regalos)) { ?>
        <table class="table">
            <thead class="table__thead">
                <tr>
                    <th class="table__th" scope="col">Regalo</th>
                    <th class="table__th--dash" scope="col">Pedidos</th>
                    
                </tr>
            </thead>
            <tbody class="table__tbody">
                <?php foreach ($regalos as $regalo) { ?>
                    <tr class="table__tr--dash">
                        <td class="table__td">
                            <?php echo $regalo->nombre; ?>
                        </td>
                        <td class="table__td--dash">
                            <?php echo $regalo->total; ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } else { ?>
        <p class="text-center">No Hay Registros Aún</p>
    <?php } ?>
</div>

<div class="dashboard__grafica">
    <canvas id="regalos-grafica"></canvas>
</div>