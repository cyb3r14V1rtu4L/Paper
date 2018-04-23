
<?= $this->Form->create('FirstReport',array('id'=>'FirstReport'));?>
<?php
#pr($casillas_primer_reporte);
?>
<div class="row">
    <div class="col-sm-12">
        <h5 class="info-text">INSTALACIÓN DE LA CASILLA</h5>
    </div>
    <!--
    <div class="col-sm-6 ">
        <div class="form-group">
            <label>HORA INICIO DE INSTALACIÓN</label>
            <input type="text" name="hora_instalacion" id="hora_instalacion" class="form-control clockpicker" value="" >
        </div>
    </div>
  -->
    <div class="col-sm-12 col-lg-3">
        <div class="tim-title">
            <input type="hidden" name="casilla_id" id="casilla_id" class="form-control" value="<?=$_SESSION['Casilla']['id'];?>">
            <h5><small>CASILLA SE INSTALÓ EN EL LUGAR INDICADO POR EL IEQROO?</small></h5>
        </div>
            <?php
              $checked_si = ($casillas_primer_reporte['lugar_indicado']==1) ? 'checked' : '';
              $checked_no = ($casillas_primer_reporte['lugar_indicado']==0) ? 'checked' : '';
            ?>
            <label class="radio">
            <input type="radio" name="lugar_indicado" data-toggle="radio" id="lugar_indicado" value="1" <?=$checked_si;?> >
            <i></i>SI
            </label>
            <label class="radio">
            <input type="radio" name="lugar_indicado" data-toggle="radio" id="lugar_indicado" value="0" <?=$checked_no;?>>
            <i></i>NO
            </label>
    </div>
    <div class="col-sm-2 col-lg-2"></div>
    <div class="col-sm-12 col-lg-2">
        <div class="tim-title">
            <h5><small>SE TOMÓ GENTE DE LA FILA?</small></h5>
        </div>
        <?php
          $checked_si = ($casillas_primer_reporte['lugar_indicado']==1) ? 'checked' : '';
          $checked_no = ($casillas_primer_reporte['lugar_indicado']==0) ? 'checked' : '';
        ?>
          <label class="radio">
          <input type="radio" name="gente_fila" data-toggle="radio" id="gente_fila" value="1" <?=$checked_si;?> >
          <i></i>SI
          </label>
          <label class="radio">
          <input type="radio" name="gente_fila" data-toggle="radio" id="gente_fila" value="0" <?=$checked_no;?>>
          <i></i>NO
          </label>
    </div>
</div>
<div class="row">
   <!--
    <div class="col-sm-6 ">
        <div class="form-group">
            <label>HORA INICIO DE VOTACIÓN</label>
            <input type="text" name="hora_inicio" id="hora_inicio" class="form-control clockpicker" value="" >
        </div>
    </div>
    -->

</div>
<hr/>
<div class="row">
    <h5 class="text-center">REPRESENTANTES PRESENTES:</h5>
    <div class="col-lg-4">
            <div class="card">
                <div class="content">
                    <ul class="list-unstyled team-members">
                        <li>
                            <div class="row">
                                <div class="col-xs-3">
                                    <div class="avatar">
                                        <img src="<?php echo $this->request->webroot?>Paper/img/partidos_png/PAN.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">&gt;
                                    </div>
                                </div>
                                <div class="col-xs-5">
                                    Nombre Representante
                                </div>
                                <div class="col-xs-2 text-right">
                                    <label class="checkbox" for="checkbox1">
                                        <span class="icons"><span class="first-icon fa fa-square fa-base"></span><span class="second-icon fa fa-check-square fa-base"></span></span><input id="funcionario_1"  name="funcionario_1" data-toggle="checkbox" type="checkbox" >
                                    </label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-xs-3">
                                    <div class="avatar">
                                        <img src="<?php echo $this->request->webroot?>Paper/img/partidos_png/PRI.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">&gt;
                                    </div>
                                </div>
                                <div class="col-xs-5">
                                    Nombre Representante
                                </div>
                                <div class="col-xs-2 text-right">
                                    <label class="checkbox" for="checkbox2">
                                        <span class="icons"><span class="first-icon fa fa-square fa-base"></span><span class="second-icon fa fa-check-square fa-base"></span></span><input id="funcionario_2"  name="funcionario_2" data-toggle="checkbox" type="checkbox">
                                    </label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-xs-3">
                                    <div class="avatar">
                                        <img src="<?php echo $this->request->webroot?>Paper/img/partidos_png/PRD.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">&gt;
                                    </div>
                                </div>
                                <div class="col-xs-5">
                                    Nombre Representante
                                </div>
                                <div class="col-xs-2 text-right">
                                    <label class="checkbox" for="checkbox1">
                                        <span class="icons"><span class="first-icon fa fa-square fa-base"></span><span class="second-icon fa fa-check-square fa-base"></span></span><input id="funcionario_3"  name="funcionario_3"data-toggle="checkbox" type="checkbox">
                                    </label>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="content">
                <ul class="list-unstyled team-members">
                    <li>
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>Paper/img/partidos_png/PVE.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">&gt;
                                </div>
                            </div>
                            <div class="col-xs-5">
                                    Nombre Representante
                                </div>
                                <div class="col-xs-2 text-right">
                                    <label class="checkbox" for="checkbox1">
                                        <span class="icons"><span class="first-icon fa fa-square fa-base"></span><span class="second-icon fa fa-check-square fa-base"></span></span><input  id="funcionario_4"  name="funcionario_4" data-toggle="checkbox" type="checkbox">
                                    </label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>Paper/img/partidos_png/PT.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">&gt;
                                </div>
                            </div>
                            <div class="col-xs-5">
                                    Nombre Representante
                                </div>
                                <div class="col-xs-2 text-right">
                                    <label class="checkbox" for="checkbox1">
                                        <span class="icons"><span class="first-icon fa fa-square fa-base"></span><span class="second-icon fa fa-check-square fa-base"></span></span><input  id="funcionario_5"  name="funcionario_5" data-toggle="checkbox" type="checkbox">
                                    </label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>Paper/img/partidos_png/MOV.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">&gt;
                                </div>
                            </div>
                            <div class="col-xs-5">
                                    Nombre Representante
                                </div>
                                <div class="col-xs-2 text-right">
                                    <label class="checkbox" for="checkbox1">
                                        <span class="icons"><span class="first-icon fa fa-square fa-base"></span><span class="second-icon fa fa-check-square fa-base"></span></span><input  id="funcionario_6"  name="funcionario_6" data-toggle="checkbox" type="checkbox">
                                    </label>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="content">
                <ul class="list-unstyled team-members">
                    <li>
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>Paper/img/partidos_png/NA.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">&gt;
                                </div>
                            </div>
                            <div class="col-xs-5">
                                    Nombre Representante
                                </div>
                                <div class="col-xs-2 text-right">
                                    <label class="checkbox" for="checkbox1">
                                        <span class="icons"><span class="first-icon fa fa-square fa-base"></span><span class="second-icon fa fa-check-square fa-base"></span></span><input  id="funcionario_7"  name="funcionario_7" data-toggle="checkbox" type="checkbox">
                                    </label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>Paper/img/partidos_png/MOR.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">&gt;
                                </div>
                            </div>
                            <div class="col-xs-5">
                                    Nombre Representante
                                </div>
                                <div class="col-xs-2 text-right">
                                    <label class="checkbox" for="checkbox1">
                                        <span class="icons"><span class="first-icon fa fa-square fa-base"></span><span class="second-icon fa fa-check-square fa-base"></span></span><input  id="funcionario_8"  name="funcionario_8" data-toggle="checkbox" type="checkbox">
                                    </label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>Paper/img/partidos_png/SOL.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">&gt;
                                </div>
                            </div>
                            <div class="col-xs-5">
                                    Nombre Representante
                                </div>
                                <div class="col-xs-2 text-right">
                                    <label class="checkbox" for="checkbox1">
                                        <span class="icons"><span class="first-icon fa fa-square fa-base"></span><span class="second-icon fa fa-check-square fa-base"></span></span><input  id="funcionario_9"  name="funcionario_9" data-toggle="checkbox" type="checkbox">
                                    </label>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="content">
                <ul class="list-unstyled team-members">
                    <li>
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>Paper/img/user.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">&gt;
                                </div>
                            </div>
                            <div class="col-xs-5">
                                    Presidente
                                </div>
                                <div class="col-xs-2 text-right">
                                    <label class="checkbox" for="checkbox1">
                                        <span class="icons"><span class="first-icon fa fa-square fa-base"></span><span class="second-icon fa fa-check-square fa-base"></span></span><input  id="funcionario_10"  name="funcionario_10" data-toggle="checkbox" type="checkbox">
                                    </label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>Paper/img/user.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">&gt;
                                </div>
                            </div>
                            <div class="col-xs-5">
                                    Secretario I
                                </div>
                                <div class="col-xs-2 text-right">
                                    <label class="checkbox" for="checkbox1">
                                        <span class="icons"><span class="first-icon fa fa-square fa-base"></span><span class="second-icon fa fa-check-square fa-base"></span></span><input  id="funcionario_11"  name="funcionario_11" data-toggle="checkbox" type="checkbox">
                                    </label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>Paper/img/user.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">&gt;
                                </div>
                            </div>
                            <div class="col-xs-5">
                                    Secretario II
                                </div>
                                <div class="col-xs-2 text-right">
                                    <label class="checkbox" for="checkbox1">
                                        <span class="icons"><span class="first-icon fa fa-square fa-base"></span><span class="second-icon fa fa-check-square fa-base"></span></span>
                                        <input  id="funcionario_17"  name="funcionario_17" data-toggle="checkbox" type="checkbox">
                                    </label>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="content">
                <ul class="list-unstyled team-members">
                    <li>
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>Paper/img/user.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">&gt;
                                </div>
                            </div>
                            <div class="col-xs-5">
                                    Escrutador I
                                </div>
                                <div class="col-xs-2 text-right">
                                    <label class="checkbox" for="checkbox1">
                                        <span class="icons"><span class="first-icon fa fa-square fa-base"></span><span class="second-icon fa fa-check-square fa-base"></span></span><input id="funcionario_12"  name="funcionario_12" data-toggle="checkbox" type="checkbox">
                                    </label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>Paper/img/user.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">&gt;
                                </div>
                            </div>
                            <div class="col-xs-5">
                                    Escrutador II
                                </div>
                                <div class="col-xs-2 text-right">
                                    <label class="checkbox" for="checkbox1">
                                        <span class="icons"><span class="first-icon fa fa-square fa-base"></span><span class="second-icon fa fa-check-square fa-base"></span></span><input  id="funcionario_13"  name="funcionario_13" data-toggle="checkbox" type="checkbox">
                                    </label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>Paper/img/user.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">&gt;
                                </div>
                            </div>
                            <div class="col-xs-5">
                                    Escrutador III
                                </div>
                                <div class="col-xs-2 text-right">
                                    <label class="checkbox" for="checkbox1">
                                        <span class="icons"><span class="first-icon fa fa-square fa-base"></span><span class="second-icon fa fa-check-square fa-base"></span></span><input  id="funcionario_18"  name="funcionario_18" data-toggle="checkbox" type="checkbox">
                                    </label>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="content">
                <ul class="list-unstyled team-members">
                    <li>
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>Paper/img/user.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">&gt;
                                </div>
                            </div>
                            <div class="col-xs-5">
                                    Suplente I
                                </div>
                                <div class="col-xs-2 text-right">
                                    <label class="checkbox" for="checkbox1">
                                        <span class="icons"><span class="first-icon fa fa-square fa-base"></span><span class="second-icon fa fa-check-square fa-base"></span></span><input  id="funcionario_14"  name="funcionario_14" data-toggle="checkbox" type="checkbox">
                                    </label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>Paper/img/user.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">&gt;
                                </div>
                            </div>
                            <div class="col-xs-5">
                                    Suplente II
                                </div>
                                <div class="col-xs-2 text-right">
                                    <label class="checkbox" for="checkbox1">
                                        <span class="icons"><span class="first-icon fa fa-square fa-base"></span><span class="second-icon fa fa-check-square fa-base"></span></span><input  id="funcionario_15"  name="funcionario_15" data-toggle="checkbox" type="checkbox">
                                    </label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>Paper/img/user.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">&gt;
                                </div>
                            </div>
                            <div class="col-xs-5">
                                    Suplente III
                                </div>
                                <div class="col-xs-2 text-right">
                                    <label class="checkbox" for="checkbox1">
                                        <span class="icons"><span class="first-icon fa fa-square fa-base"></span><span class="second-icon fa fa-check-square fa-base"></span></span><input id="funcionario_16"  name="funcionario_16" data-toggle="checkbox" type="checkbox">
                                    </label>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row">
    <button type="button" id="btn_reporte_1" class="btn btn-fill btn-success" onclick="addFirstReport();">Enviar Reporte</button>

    </div>

</div>
<?= $this->Form->end();?>

<script>
 function addFirstReport()
{
    $.ajax({
        url: '/Xmf/addFirstReport',
        type: "POST",
        dataType: "json",
        data: {
            casilla_id:$('#casilla_id').val(),
            lugar_indicado:$('#lugar_indicado').is(':checked'),
            gente_fila:$('#gente_fila').is(':checked'),
            funcionario_1:$('#funcionario_1').is(':checked'),
            funcionario_2:$('#funcionario_2').is(':checked'),
            funcionario_3:$('#funcionario_3').is(':checked'),
            funcionario_4:$('#funcionario_4').is(':checked'),
            funcionario_5:$('#funcionario_5').is(':checked'),
            funcionario_6:$('#funcionario_6').is(':checked'),
            funcionario_7:$('#funcionario_7').is(':checked'),
            funcionario_8:$('#funcionario_8').is(':checked'),
            funcionario_9:$('#funcionario_9').is(':checked'),
            funcionario_10:$('#funcionario_10').is(':checked'),
            funcionario_11:$('#funcionario_11').is(':checked'),
            funcionario_12:$('#funcionario_12').is(':checked'),
            funcionario_13:$('#funcionario_13').is(':checked'),
            funcionario_14:$('#funcionario_14').is(':checked'),
            funcionario_15:$('#funcionario_15').is(':checked'),
            funcionario_16:$('#funcionario_16').is(':checked'),
            funcionario_17:$('#funcionario_17').is(':checked'),
            funcionario_18:$('#funcionario_18').is(':checked')
        }
        ,
        success: function (json) {

            $.notify ({
                 icon: 'ti-package',
                 message: "<b>Primer Reporte</b> Enviado."

               },{
                   type: 'danger',
                   timer: 2000
               });
               $('#btn_reporte_1').attr('disabled','disabled');
        },
        error: function (xhr, textStatus, errorThrown) {
            console.log(xhr);
        }
    });
}

$('.clockpicker').clockpicker({
                placement: 'right',
                align: 'left',
                autoclose: true
            });

</script>
