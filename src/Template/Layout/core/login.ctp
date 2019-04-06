<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = '.:: SICEL Sistema Integral de Control Electoral ::.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php //= $this->Html->charset() ?>
  <meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $this->request->webroot?>paper/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="84x82" href="<?php echo $this->request->webroot?>paper/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        <?= $cakeDescription ?>:
        <?php
         //$this->fetch('title')
        ?>
    </title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('animate.min.css') ?>
    <?= $this->Html->css('paper-dashboard.css') ?>
    <!-- <?= $this->Html->css('demo.css') ?> -->
    <?= $this->Html->css('mods.css') ?>
    

    <!-- Fonts and icons -->
    <?= $this->Html->css('font-awesome-4.7.0/css/font-awesome.css') ?>
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <!-- <?= $this->Html->css('themify/css/themify-icons.css') ?> -->


    <?= $this->fetch('css') ?>

    <style media="screen">
      .login{
        /* width: 100%; */
        /* height:100%; */
        margin :0px auto;
        /* position:relative;| */
        /* width:1200px; */
      }
    </style>
</head>
<body>

    <?= $this->Flash->render() ?>

    <div id="content">

        <!-- <div class="main-panel"> -->

          <div class="login"><?= $this->fetch('content') ?>  </div>

          <div id="footer-xmf" class="noprint"> <?= $this->element('Paper.xmf/footer'); ?> </div>

        <!-- </div> -->
    </div>
</body>

    <?= $this->Html->script('jquery-1.10.2');?>

    <?= $this->Html->script('bootstrap.min'); ?>
    <?= $this->Html->script('bootstrap-checkbox-radio'); ?>
    <?= $this->Html->script('bootstrap-notify');?>

    <?= $this->Html->script('paper-dashboard'); ?>

    <?php # $this->Html->script('chartist.min'); ?>
    <?php # $this->Html->script('demo'); ?>
    


    <?= $this->fetch('script') ?>

    <script type="text/javascript">
        $(document).ready(function(){

           // demo.initChartist();

        });
    </script>
</html>
