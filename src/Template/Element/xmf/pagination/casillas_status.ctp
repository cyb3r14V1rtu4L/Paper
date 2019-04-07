<?php
foreach($casillas_cerradas as $cp){
?>
    <div class="col-lg-2 col-sm-12">
        <div class="card ">
            <div class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="">
                            <div class="text-center"><?=$cp['name']?></div>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <hr />
                        <div class="text-center">
                            <a href="tel:<?=$cp['rc_telefono'];?>">
                                <span class="ti-mobile"></span>
                            </a>
                            &nbsp;
                            <a href="<?php echo $this->Url->build('/XmfCasillas/CapturaResultados/'.$cp['id'].'/1'); ?>">
                                <span class="ti-package"></span>
                            </a>
                            &nbsp;
                            <?php
                            #$votantes = $cp['votos']['votantes_segundo']+$cp['votos']['votantes_tercero'];
                            #$promovidos =$cp['votos']['promovidos_segundo']+$cp['votos']['promovidos_tercero'];

                            ?>
                            <!--<a href="#" rel="tooltip" style="white-space: nowrap;" title="<?=$votantes?>"><span class="pie"><?=$votantes?></span></a> -->

                        </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>
