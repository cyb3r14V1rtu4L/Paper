<div class="card">
        <div class="header">
            <h4 class="title">GR&Aacute;FICA VOTANTES Y PROMOVIDOS</h4>
            <p class="category">VOTACIONES 8:00HRS A 18:OOHRS</p>
        </div>
        <div class="content">
            <div id="chart8-18" class="ct-chart ct-perfect-fourth"></div>

            <div class="footer">
                <!-- <div class="chart-legend">
                    <i class="fa fa-circle text-warning"></i> VOTANTES
                    <i class="fa fa-circle text-info"></i> PROMOVIDOS

                </div> -->
                <hr>
                <div class="stats">
                    <i class="ti-timer"></i> Información Actualizada
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
      $(document).ready(function(){

    // 'chart8-12

        // Create the chart
        Highcharts.chart('chart8-18', {
          chart: {
            type: 'pie'
          },
          title: {
            text: 'Flujo de Votaciones'
          },
          credits:{enabled:false},
          colors:['#D84500','#396607','#3398d6','#b4c973','#6c99bb'],
          subtitle: {
            text: 'Monitoreo de votos'
          },
          plotOptions: {
            series: {
              dataLabels: {
                enabled: true,
                format: '{point.name}: {point.y:.1f}'
              }
            }
          },

          tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}</b><br/>'
          },

          "series": [
            {
              "name": "Votantes",
              "colorByPoint": true,
              "data": [
                {
                  "name": "VOTANTES",
                  "y": <?=$votantes_s;?>
                },
                {
                  "name": "PROMOVIDOS",
                  "y": <?=$promovidos_s;?>
                }
              ]
            }
          ]
        });
    });
    </script>
