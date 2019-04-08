<?php //echo $this->element('Paper.xmf/resultados_finales_tab'); ?>
<div id="divMonitorFinales">
    <div class="container-fluid">
        <hr/>
        <?= $this->element('Paper.xmf/graficas/acumulado_res_finales'); ?>
        <hr/>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">SEGUNDO REPORTE - 12:00 - 15:00 HRS</h4>
                        <p class="category">

                        </p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th><i class="ti-package"></i> CASILLA</th>
                                <th><i class="ti-user"></i> VOTOS</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            foreach ($formulaMunicipios as $tabata):
                                ?>
                                <tr >
                                    <td align="left"><?= h($tabata['name']) ?></td>
                                    <td><?= h(number_format($tabata['votes'])); ?></td>

                                </tr>
                            <?php endforeach; ?>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>   <!-- container-fluid -->
</div>