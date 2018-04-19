<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
        <?= $this->element('Paper.xmf/graficas/acumulado_barras'); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?= $this->element('Paper.xmf/graficas/votaciones_8_16'); ?>
        </div>
        <div class="col-md-6">
            <?= $this->element('Paper.xmf/graficas/votaciones_8_12'); ?>
        </div>

    </div>
    <div class="row">
        <div class="col-md-12">
            <?= $this->element('Paper.xmf/reportes/incidencias'); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-sm-6">
            <div class="text-center">
                <button type="submit" class="btn btn-info btn-fill btn-wd">Exportar PDF</button>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6">
            <div class="text-center">
                <button type="submit" class="btn btn-info btn-fill btn-wd">Exportar XLS</button>
            </div>
        </div>
    </div>


</div>   <!-- container-fluid -->


<script type="text/javascript">
  $(document).ready(function(){

  // Create the chart chartHours
  Highcharts.chart('chartHours', {
    chart: {
        type: 'column'
    },
    title: {
        text: '<h4 class="title">FLUJO DE VOTACIONES</h4>'
    },
    credits:{enabled:false},
    colors:['#F3BB45','#68B3C8','#3398d6','#b4c973','#6c99bb'],
    subtitle: {
        text: '<p class="category">Monitoreo en tiempo real</p>'
    },
    xAxis: {
        categories: <?= $categories?> ,
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Votos'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} votos</b></td></tr>',
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
        name: 'Votantes',
        data: <?= $votantes?>

    }, {
        name: 'Promovidos',
        data: <?= $promovidos?>

    }]
});


// 'chart8-12


    // Create the chart
    Highcharts.chart('chart8-12', {
      chart: {
        type: 'pie'
      },
      title: {
        text: 'Flujo de Votaciones'
      },
      credits:{enabled:false},
      colors:['#F3BB45','#68B3C8','#3398d6','#b4c973','#6c99bb'],
      subtitle: {
        text: 'Monitoreo de votos'
      },
      plotOptions: {
        series: {
          dataLabels: {
            enabled: true,
            format: '{point.name}: {point.y:.1f}%'
          }
        }
      },

      tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
      },

      "series": [
        {
          "name": "Votantes",
          "colorByPoint": true,
          "data": [
            {
              "name": "cbxxx",
              "y": 62.74,
              "drilldown": "Chrome"
            },
            {
              "name": "cbyyy",
              "y": 10.57,
              "drilldown": "Firefox"
            }
          ]
        }
      ]
    });
});
</script>
