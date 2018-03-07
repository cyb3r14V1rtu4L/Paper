<?= $this->element('Paper.xmf/counter_head'); ?> 
<div class="container-fluid">

    <div class="row">
        <div class="col-md-12">
        <?= $this->element('Paper.xmf/graficas/acumulado_barras'); ?> 
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?= $this->element('Paper.xmf/graficas/votaciones_8_12'); ?> 
        </div>
        <div class="col-md-6">
            <?= $this->element('Paper.xmf/graficas/votaciones_8_16'); ?> 
        </div>
    </div>
    
    <div class="row">
        <?= $this->element('Paper.xmf/reportes/flujo_votaciones_final'); ?> 
    </div>

   

<div class="text-center">
    <button type="submit" class="btn btn-info btn-fill btn-wd">Exportar XLS</button>
</div>

</div>   <!-- container-fluid -->
