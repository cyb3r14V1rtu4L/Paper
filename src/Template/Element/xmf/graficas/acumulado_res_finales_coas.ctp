<div class="row">
    <div class="col-md-12">
        <div class="card">
            <!-- <div class="header">
                <h4 class="title">CONCENTRADO TOTAL COALICIONES</h4>
                <p class="category">Monitoreo en tiempo real</p>
            </div> -->
            <div class="content">
                <div id="chartResFinalesCOAS" class="ct-chart"></div>
                <div class="footer">
                    <!--<div class="chart-legend">
                        <i class="fa fa-circle text-warning"></i> VOTANTES
                        <i class="fa fa-circle text-info"></i> PROMOVIDOS
                    </div>
                    -->
                    <hr>
                    <div class="stats">
                        <i class="ti-reload"></i> Informaci&oacute;n Actualizada
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="header">
                <h4 class="title"></h4>
            </div>
            <div class="content">
                <ul class="list-unstyled team-members">
                  <?php foreach ($tabular_two as $tlvalue): ?>

                    <li>
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>Paper/img/partidos_png/<?= strtoupper(str_replace('_','-',$tlvalue['name']))?>.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                </div>
                            </div>
                            <div class="col-xs-5">
                                <span class="text-success"><h5><b><?= $tlvalue['data']?></b></h5></span>
                                30%
                            </div>

                        </div>
                    </li>
                    <!-- <li>
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>Paper/img/partidos_png/PAN-PRD.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                </div>
                            </div>
                            <div class="col-xs-5">
                                <span class="text-success"><h5><b>1,023</b></h5></span>
                                30%
                            </div>

                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>Paper/img/partidos_png/PAN-MC.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                </div>
                            </div>
                            <div class="col-xs-5">
                                <span class="text-success"><h5><b>1,023</b></h5></span>
                                30%
                            </div>

                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>Paper/img/partidos_png/PRD-MC.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                </div>
                            </div>
                            <div class="col-xs-5">
                                <span class="text-success"><h5><b>1,023</b></h5></span>
                                30%
                            </div>

                        </div>
                    </li> -->
                  <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
    <!-- <div class="col-lg-4">
        <div class="card">
            <div class="header">
                <h4 class="title"></h4>
            </div>
            <div class="content">
                <ul class="list-unstyled team-members">
                    <li>
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>Paper/img/partidos_png/PRI-PVE-PANAL.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                </div>
                            </div>
                            <div class="col-xs-5">
                                <span class="text-success"><h5><b>1,023</b></h5></span>
                                30%
                            </div>

                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>Paper/img/partidos_png/PRI-PVE.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                </div>
                            </div>
                            <div class="col-xs-5">
                                <span class="text-success"><h5><b>1,023</b></h5></span>
                                30%
                            </div>

                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>Paper/img/partidos_png/PRI-PANAL.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                </div>
                            </div>
                            <div class="col-xs-5">
                                <span class="text-success"><h5><b>1,023</b></h5></span>
                                30%
                            </div>

                        </div>
                    </li>

                    <li>
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>Paper/img/partidos_png/PVE-PANAL.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                </div>
                            </div>
                            <div class="col-xs-5">
                                <span class="text-success"><h5><b>1,023</b></h5></span>
                                30%
                            </div>

                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div> -->
    <!-- <div class="col-lg-4">
        <div class="card">
            <div class="header">
                <h4 class="title"></h4>
            </div>
            <div class="content">
                <ul class="list-unstyled team-members">
                    <li>
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>Paper/img/partidos_png/PT-MOR-SOL.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                </div>
                            </div>
                            <div class="col-xs-5">
                                <span class="text-success"><h5><b>1,023</b></h5></span>
                                30%
                            </div>

                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>Paper/img/partidos_png/PT-MOR.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                </div>
                            </div>
                            <div class="col-xs-5">
                                <span class="text-success"><h5><b>1,023</b></h5></span>
                                30%
                            </div>

                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>Paper/img/partidos_png/PT-SOL.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                </div>
                            </div>
                            <div class="col-xs-5">
                                <span class="text-success"><h5><b>1,023</b></h5></span>
                                30%
                            </div>

                        </div>
                    </li>

                    <li>
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>Paper/img/partidos_png/MOR-SOL.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                </div>
                            </div>
                            <div class="col-xs-5">
                                <span class="text-success"><h5><b>1,023</b></h5></span>
                                30%
                            </div>

                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div> -->
</div>


<script type="text/javascript">
    $(document).ready(function () {

      Highcharts.chart('chartResFinalesCOAS', {
          chart: {
              type: 'column'
          },
          title: {
              text: 'CONCENTRADO TOTAL COALICIONES'
          },
          credits:{enabled:false},
          colors:['#F3BB45','#68B3C8','#3398d6','#b4c973','#6c99bb'],
          subtitle: {
              text: 'Monitoreo en tiempo real'
          },
          xAxis: {
              categories: <?= $categories_two ?>,
              crosshair: true
          },
          yAxis: {
              min: 0,
              title: {
                  text: 'VOTOS'
              }
          },
          tooltip: {
              headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
              pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                  '<td style="padding:0"><b>{point.y}</b></td></tr>',
              footerFormat: '</table>',
              shared: true,
              useHTML: true
          },
          plotOptions: {
              column: {
                  pointPadding: 0.2,
                  borderWidth: 0
              }
          },
          series: [{
              name: 'Votos',
              data: <?= $votes_two?>
          }]
      });

    });
</script>
