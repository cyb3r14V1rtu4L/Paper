<div class="card">
    <div class="header">
        <h4 class="title">GRÁFICA PRIMER REPORTE - INSTALACIÓN DE CASILLAS</h4>
    </div>
    <div class="content">
        <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>

        <div class="footer">
            <div class="chart-legend">
                <i class="fa fa-circle text-warning"></i> Instaladas
                <i class="fa fa-circle text-info"></i> Cerradas

            </div>
        </div>
    </div>
</div>


    <script type="text/javascript">
      $(document).ready(function(){

    // 'chart8-12

        // Create the chart
        Highcharts.chart('chartPreferences', {
          chart: {
            type: 'pie'
          },
          title: {
            text: 'Instalacion de Casillas'
          },
          credits:{enabled:false},
          colors:['#F3BB45','#68B3C8','#3398d6','#b4c973','#6c99bb'],
          subtitle: {
            text: 'Monitoreo de casillas'
          },
          plotOptions: {
            series: {
              dataLabels: {
                enabled: true,
                format: '{point.name}: {point.y}'
              }
            }
          },

          tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> de un total de <?= $total?><br/>'
          },

          "series": [
            {
              "name": "Casillas",
              "colorByPoint": true,
              "data": [
                {
                  "name": "Instaladas",
                  "y": <?= $instalacion?>
                },
                {
                  "name": "Cerradas",
                  "y": <?= $cierre?>
                }
              ]
            }
          ]
        });
    });
    </script>
