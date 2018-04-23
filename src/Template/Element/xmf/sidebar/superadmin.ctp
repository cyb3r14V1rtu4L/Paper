<ul class="nav">
    <li class="active">
      <a href="<?php echo

      $this->Url->build('XmfCasillas/MonitorCasillas');
      ?>">
            <i class="ti-package"></i>
            <p>MONITOR CASILLAS</p>
        </a>
    </li>

    <li>
        <a href="<?php echo $this->Url->build('/XmfReportsSegundoTercero/PrimerReporte'); ?>">
            <i class="ti-bar-chart"></i>
            <p>PRIMER REPORTE</p>
        </a>
    </li>

    <li>
        <!-- <a href="index2.html"> -->
        <a href="<?php echo // $this->Url->build('/pages/reports/SegundoReporte');

        $this->Url->build('/XmfReportsSegundoTercero/SegundoReporte');
        ?>">
            <i class="ti-bar-chart"></i>
            <p>SEGUNDO REPORTE</p>
        </a>
    </li>

    <li>
        <a href="<?php echo $this->Url->build('/XmfReportsSegundoTercero/TercerReporte');?>">
            <i class="ti-bar-chart"></i>
            <p>TERCER REPORTE</p>
        </a>
    </li>
    <li>
        <a href="<?php echo $this->Url->build('/XmfReportsSegundoTercero/CuartoReporte');?>">
            <i class="ti-bar-chart"></i>
            <p>CUARTO REPORTE</p>
        </a>
    </li>

    <li>
        <a href="<?php echo $this->Url->build('/pages/reports/ResultadosFinales'); ?>">
            <i class="ti-user"></i>
            <p>RESULTADOS FINALES</p>
        </a>
    </li>
</ul>
