<?= $this->Form->create('LastReport',array('id'=>'LastReport'));?>

<div class="row">
    <h5 class="info-text"> CAPTURAR RESULTADO DE LAS ELECCIONES. </h5>
    <div class="col-md-12 text-center" style="display:none;">
            <div class="btn-group">
            <button type="button" id="typo_voto_1" data-id="1" onclick="setTypoVote(this)" class="btn btn-danger">PRESIDENTE</button>
            <button type="button" id="typo_voto_2" data-id="2" onclick="setTypoVote(this)" class="btn btn-danger">SENADOR</button>
            <button type="button" id="typo_voto_3" data-id="3" onclick="setTypoVote(this)" class="btn btn-danger">DIPUTADO</button>
            <button type="button" id="typo_voto_4" data-id="4" onclick="setTypoVote(this)" class="btn btn-danger">AYUNTAMIENTO</button>
        </div>
        <input type="hidden" name="xmf_tipo_votaciones_id" id="xmf_tipo_votaciones_id"/>
        <input type="hidden" name="casilla_id" id="casilla_id" value="<?= (isset($id)) ? $id : $_SESSION['Casilla']['id'];?>">


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
                    <li>
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PAN.png" alt="PAN" class="img-circle img-no-padding img-responsive">
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_partido_1" data-id="1" type="text" size="8"/></small></span>
                            </div>

                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PRI.png" alt="PRI" class="img-circle img-no-padding img-responsive">
                                </div>
                            </div>
                            <div class="col-xs-4">
                            <span class="text-info"><small>
                              <input class="input-resultados voto" id="xmf_partido_2" data-id="2"  type="text"  size="8"/></small></span>
                            </div>

                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PRD.png" alt="PRD" class="img-circle img-no-padding img-responsive">
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_partido_3" data-id="3" type="text"  size="8"/></small></span>
                            </div>

                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="header">
                <h4 class="title"></h4>
            </div>
            <div class="content">
                <ul class="list-unstyled team-members">
                    <li>
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PVE.png" alt="PVE" class="img-circle img-no-padding img-responsive">
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_partido_4" data-id="4"  type="text"  size="8"/></small></span>
                            </div>

                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PT.png" alt="PT" class="img-circle img-no-padding img-responsive">
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_partido_5" data-id="5"  type="text"  size="8"/></small></span>
                            </div>

                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/MOV.png" alt="MC" class="img-circle img-no-padding img-responsive">
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_partido_6" data-id="6" type="text"  size="8"/></small></span>
                            </div>

                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="header">
                <h4 class="title"></h4>
            </div>
            <div class="content">
                <ul class="list-unstyled team-members">
                    <li>
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/NA.png" alt="PANAL" class="img-circle img-no-padding img-responsive">
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_partido_7" data-id="7"  type="text"  size="8"/></small></span>
                            </div>

                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/MOR.png" alt="MORENA" class="img-circle img-no-padding img-responsive">
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_partido_8" data-id="8"  type="text"  size="8"/></small></span>
                            </div>

                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/SOL.png" alt="PES" class="img-circle img-no-padding img-responsive">
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_partido_9" data-id="9"  type="text"  size="8"/></small></span>
                            </div>

                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row">
<div class="col-lg-4">
        <div class="card">
            <div class="header">
                <h4 class="title"><small class="text-info">COALICIÓN PAN-PRD-MC</small></h4>
            </div>
            <div class="content">
                <ul class="list-unstyled team-members">
                    <li>
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PAN-PRD-MC.png" alt="PAN-PRD-MC" class="img-circle img-no-padding img-responsive">
                                </div>
                            </div>
                            <div class="col-xs-7">
                                PAN - PRD - MC
                                <br>
                                <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_partido_10" data-id="10" type="text"  size="8"/></small></span>
                            </div>

                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PAN-PRD.png" alt="PAN-PRD" class="img-circle img-no-padding img-responsive">
                                </div>
                            </div>
                            <div class="col-xs-7">
                                PAN - PRD
                                <br>
                                <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_partido_11" data-id="11"  type="text"  size="8"/></small></span>
                            </div>

                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PAN-MC.png" alt="PAN-MC" class="img-circle img-no-padding img-responsive">
                                </div>
                            </div>
                            <div class="col-xs-7">
                                PAN - MC
                                <br>
                                <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_partido_12" data-id="12" type="text"  size="8"/></small></span>
                            </div>

                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PRD-MC.png" alt="PRD-MC" class="img-circle img-no-padding img-responsive">
                                </div>
                            </div>
                            <div class="col-xs-7">
                                PRD - MC
                                <br>
                                <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_partido_13" data-id="13"  type="text"  size="8"/></small></span>
                            </div>

                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="header">
                <h4 class="title"><small class="text-info">COALICIÓN PRI-PVE-PANAL</small></h4>
            </div>
            <div class="content">
                <ul class="list-unstyled team-members">
                    <li>
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PRI-PVE-PANAL.png" alt="PRI-PVE-PANAL" class="img-circle img-no-padding img-responsive">
                                </div>
                            </div>
                            <div class="col-xs-7">
                                PRI - PVE - PANAL
                                <br>
                                <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_partido_14" data-id="14"  type="text"  size="8"/></small></span>
                            </div>

                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PRI-PVE.png" alt="PRI-PVE" class="img-circle img-no-padding img-responsive">
                                </div>
                            </div>
                            <div class="col-xs-7">
                                PRI - PVE
                                <br>
                                <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_partido_15" data-id="15" type="text"  size="8"/></small></span>
                            </div>

                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PRI-PANAL.png" alt="PRI-PANAL" class="img-circle img-no-padding img-responsive">
                                </div>
                            </div>
                            <div class="col-xs-7">
                                PRI - PANAL
                                <br>
                                <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_partido_16" data-id="16"  type="text"  size="8"/></small></span>
                            </div>

                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PVE-PANAL.png" alt="PVE-PANAL" class="img-circle img-no-padding img-responsive">
                                </div>
                            </div>
                            <div class="col-xs-7">
                                PVE - PANAL
                                <br>
                                <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_partido_17" data-id="17"  type="text"  size="8"/></small></span>
                            </div>

                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="header">
                <h4 class="title" id="coalicion_title"><small class="text-info">COALICIÓN MORENA-PT-PES</small></h4>
            </div>
            <div class="content">
                <ul class="list-unstyled team-members" id="pt-mor-pes">
                    <li>
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/MORENA-PT-PES.png" alt="PT-MOR-PES" class="img-circle img-no-padding img-responsive">
                                </div>
                            </div>
                            <div class="col-xs-7">
                                MORENA - PT - PES
                                <br>
                                <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_partido_18" data-id="27"  type="text"  size="8"/></small></span>
                            </div>

                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/MORENA-PT.png" alt="MORENA-PT" class="img-circle img-no-padding img-responsive">
                                </div>
                            </div>
                            <div class="col-xs-7">
                                MORENA - PT
                                <br>
                                <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_partido_19" data-id="29"  type="text"  size="8"/></small></span>
                            </div>

                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PT-PES.png" alt="PT-PES" class="img-circle img-no-padding img-responsive">
                                </div>
                            </div>
                            <div class="col-xs-7">
                                PT - PES
                                <br>
                                <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_partido_20" data-id="30" type="text"  size="8"/></small></span>
                            </div>

                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/MOR-SOL.png" alt="MORENA-PES" class="img-circle img-no-padding img-responsive">
                                </div>
                            </div>
                            <div class="col-xs-7">
                                MORENA - PES
                                <br>
                                <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_partido_21" data-id="28" type="text"  size="8"/></small></span>
                            </div>

                        </div>
                    </li>

                </ul>
                <ul class="list-unstyled team-members" id="pt-mor" style="display:none;">
                    <li>
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/MORENA-PT.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                </div>
                            </div>
                            <div class="col-xs-7">
                                MORENA - PT
                                <br>
                                <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_partido_26" data-id="36"  type="text"  size="8"/></small></span>
                            </div>

                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-4" id="partidos_independientes">
        <div class="card">
            <div class="header">
                <h4 class="title"></h4>
            </div>
            <div class="content">
                <ul class="list-unstyled team-members">

                    <li>
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>paper/img//partidos_png/Bronco.png" alt="Bronco" class="img-circle img-no-padding img-responsive">
                                </div>
                            </div>
                            <div class="col-xs-7">
                                Bronco
                                <br>
                                <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_partido_23" data-id="32"  type="text"  size="8"/></small></span>
                            </div>

                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/Margarita Zavala.png" alt="Margarita Z." class="img-circle img-no-padding img-responsive">
                                </div>
                            </div>
                            <div class="col-xs-7">
                                Margarita Zavala
                                <br>
                                <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_partido_22" data-id="31" type="text"  size="8"/></small></span>
                            </div>

                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="header">
                <h4 class="title"></h4>
            </div>
            <div class="content">
                <ul class="list-unstyled team-members">

                    <li>
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>paper/img/user.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                </div>
                            </div>
                            <div class="col-xs-7">
                                No Registrados
                                <br>
                                <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_partido_24" data-id="34"  type="text"  size="8"/></small></span>
                            </div>

                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>paper/img/user.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                </div>
                            </div>
                            <div class="col-xs-7">
                                Votos Nulos
                                <br>
                                <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_partido_25" data-id="33"  type="text"  size="8"/></small></span>
                            </div>

                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>

</div>
<div class="row">
<button type="button" id="btn_reporte_f" class="btn btn-fill btn-success" onclick="addLastReport();">Enviar Reporte</button>
<p>

</p>
</div>

</div>
<?= $this->Form->end();?>

<script>
function setTypoVote(obj)
{
    for(x=1;x<=4;x++)
    {
        $("#typo_voto_"+x).removeClass('active');
    }
    $('.voto').each(function(i, obj) {
        $(obj).val(null);
    });

    $(obj).addClass('active');
    $('#xmf_tipo_votaciones_id').val($(obj).attr('data-id'));

    $('.voto').each(function(i, obj) {
        $(obj).prop('disabled', false);
    });

    if($('#xmf_tipo_votaciones_id').val() == 4){
      $('#pt-mor-pes').hide();
      $('#partidos_independientes').hide();
      $('#pt-mor').show();
      $('#coalicion_title').html('<small class="text-info">COALICIÓN MORENA-PT</small>');
      $('#xmf_partido_18').val('0');
      $('#xmf_partido_18').attr('disabled',true);

      $("#xmf_partido_8").attr("data-id","37");
      $("#xmf_partido_5").attr("data-id","38");

      $('#xmf_partido_19').val('0');
      $('#xmf_partido_19').attr('disabled',true);

      $('#xmf_partido_20').val('0');
      $('#xmf_partido_20').attr('disabled',true);

      $('#xmf_partido_21').val('0');
      $('#xmf_partido_21').attr('disabled',true);

      $('#xmf_partido_22').val('0');
      $('#xmf_partido_22').attr('disabled',true);

      $('#xmf_partido_23').val('0');
      $('#xmf_partido_23').attr('disabled',true);

    }else{
        $('#pt-mor-pes').show();
        $('#partidos_independientes').show();
        $('#pt-mor').hide();
        $('#coalicion_title').html('<small class="text-info">COALICIÓN MORENA-PT-PES</small>');
        $('#xmf_partido_26').val('0');
        $("#xmf_partido_8").attr("data-id","8");
        $("#xmf_partido_5").attr("data-id","5");
    }

    if($('#xmf_tipo_votaciones_id').val() == 2 || $('#xmf_tipo_votaciones_id').val() == 3)
    {
      $('#partidos_independientes').hide();
      $('#xmf_partido_22').val('0');
      $('#xmf_partido_22').attr('disabled',true);
      $('#xmf_partido_23').val('0');
      $('#xmf_partido_23').attr('disabled',true);
    }


}


function addLastReport()
{

  if($('#xmf_tipo_votaciones_id').val()=='')
  {
    $.notify ({
         icon: 'ti-package',
         message: "<b>Seleccionar Tipo de Repoprte</b>."

       },{
           type: 'warning',
           timer: 2000
       });
    return false;
  }
  var insertData = 1;
  $('.voto').each(function(i, obj) {
      if($(obj).val() == ''){
        insertData --;
      }
  });
  if(insertData==1){
   $.ajax({
       url: '/Xmf/addLastReport',
       type: "POST",
       dataType: "json",
       data: {
           casilla_id:$('#casilla_id').val(),
           xmf_tipo_votaciones_id:$('#xmf_tipo_votaciones_id').val(),

           xmf_partido_1:$('#xmf_partido_1').val(),
           xmf_partido_id_1:$('#xmf_partido_1').attr('data-id'),

           xmf_partido_2:$('#xmf_partido_2').val(),
           xmf_partido_id_2:$('#xmf_partido_2').attr('data-id'),

           xmf_partido_3:$('#xmf_partido_3').val(),
           xmf_partido_id_3:$('#xmf_partido_3').attr('data-id'),

           xmf_partido_4:$('#xmf_partido_4').val(),
           xmf_partido_id_4:$('#xmf_partido_4').attr('data-id'),

           xmf_partido_5:$('#xmf_partido_5').val(),
           xmf_partido_id_5:$('#xmf_partido_5').attr('data-id'),

           xmf_partido_6:$('#xmf_partido_6').val(),
           xmf_partido_id_6:$('#xmf_partido_6').attr('data-id'),

           xmf_partido_7:$('#xmf_partido_7').val(),
           xmf_partido_id_7:$('#xmf_partido_7').attr('data-id'),

           xmf_partido_8:$('#xmf_partido_8').val(),
           xmf_partido_id_8:$('#xmf_partido_8').attr('data-id'),

           xmf_partido_9:$('#xmf_partido_9').val(),
           xmf_partido_id_9:$('#xmf_partido_9').attr('data-id'),

           xmf_partido_10:$('#xmf_partido_10').val(),
           xmf_partido_id_10:$('#xmf_partido_10').attr('data-id'),

           xmf_partido_11:$('#xmf_partido_11').val(),
           xmf_partido_id_11:$('#xmf_partido_11').attr('data-id'),

           xmf_partido_12:$('#xmf_partido_12').val(),
           xmf_partido_id_12:$('#xmf_partido_12').attr('data-id'),

           xmf_partido_13:$('#xmf_partido_13').val(),
           xmf_partido_id_13:$('#xmf_partido_13').attr('data-id'),

           xmf_partido_14:$('#xmf_partido_14').val(),
           xmf_partido_id_14:$('#xmf_partido_14').attr('data-id'),

           xmf_partido_15:$('#xmf_partido_15').val(),
           xmf_partido_id_15:$('#xmf_partido_15').attr('data-id'),

           xmf_partido_16:$('#xmf_partido_16').val(),
           xmf_partido_id_16:$('#xmf_partido_16').attr('data-id'),

           xmf_partido_17:$('#xmf_partido_17').val(),
           xmf_partido_id_17:$('#xmf_partido_17').attr('data-id'),

           xmf_partido_18:$('#xmf_partido_18').val(),
           xmf_partido_id_18:$('#xmf_partido_18').attr('data-id'),

           xmf_partido_19:$('#xmf_partido_19').val(),
           xmf_partido_id_19:$('#xmf_partido_19').attr('data-id'),

           xmf_partido_20:$('#xmf_partido_20').val(),
           xmf_partido_id_20:$('#xmf_partido_20').attr('data-id'),

           xmf_partido_21:$('#xmf_partido_21').val(),
           xmf_partido_id_21:$('#xmf_partido_21').attr('data-id'),

           xmf_partido_22:$('#xmf_partido_22').val(),
           xmf_partido_id_22:$('#xmf_partido_22').attr('data-id'),

           xmf_partido_23:$('#xmf_partido_23').val(),
           xmf_partido_id_23:$('#xmf_partido_23').attr('data-id'),

           xmf_partido_24:$('#xmf_partido_24').val(),
           xmf_partido_id_24:$('#xmf_partido_24').attr('data-id'),

           xmf_partido_25:$('#xmf_partido_25').val(),
           xmf_partido_id_25:$('#xmf_partido_25').attr('data-id'),

           xmf_partido_26:$('#xmf_partido_26').val(),
           xmf_partido_id_26:$('#xmf_partido_26').attr('data-id')
       }
       ,
       success: function (json) {

           $.notify ({
                icon: 'ti-package',
                message: "<b>Resultados Finales</b> Enviados."

              },{
                  type: 'danger',
                  timer: 2000
              });
              //$('#btn_reporte_f').attr('disabled','disabled');

              $('.voto').each(function(i, obj) {
                  $(obj).val('');
                  $(obj).attr('disabled',true);
              });

       },
       error: function (xhr, textStatus, errorThrown) {
           console.log(xhr);
       }
   });
 }else{
   $.notify ({
        icon: 'ti-package',
        message: "<b>Todos los Partidos deben tener Resultados</b>."

      },{
          type: 'danger',
          timer: 2000
      });
 }
}

$('.voto').each(function(i, obj) {
    $(obj).prop('disabled', true);
});

$( document ).ready(function() {
    setTypoVote($('#typo_voto_4'));
});
</script>
