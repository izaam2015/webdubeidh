<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html style="background-color: black;">
<head>
    <title>D.U.B.E.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="dube, DUBE , D.U.B.E." />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <link href="<?php echo base_url('resources/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" media="all">
    <!-- Custom Theme files -->
    <link href="<?php echo base_url('resources/css/style.css'); ?>" rel="stylesheet" type="text/css" media="all"/>
    <!--js-->
    <script src="<?php echo base_url('resources/js/jquery-2.1.1.min.js'); ?>"></script>
    <!--icons-css-->
    <link href="<?php echo base_url('resources/css/font-awesome.css'); ?>" rel="stylesheet">
    <!--Google Fonts-->
    <!--<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>-->
    <!--static chart-->
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/AdminLTE.min.css');?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
   <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    
    
    <link rel="shortcut icon" href="<?php echo site_url('resources/images/icono.png');?>" />
</head>  
<body>
    <div class="login-page" style="background-image: url(<?php //echo base_url("resources/images/fondo.jpg"); ?>); background-repeat: no-repeat;background-size: cover; ">
        <div class="login-main">
        <p class="center-block">
            <?php
          //echo   $this->session->flashdata('msg');
            ?>
        </p>
        <div class="login-head">
          <center>
              <br><font size="4" face="Arial black"><b>D.U.B.E.</b></font>
          </center>
        </div>
        <div class="login-block">
              <?php echo form_open('verificar'); ?>
            <input type="text" name="username" id="username" placeholder="Usuario" autocomplete="off" autofocus  required=""  ?>  
            <input type="password" name="password" id="password" class="lock" placeholder="Contraseña"  >
            <input type="submit" name="Sign In" value="Ingresar">
            <?php echo form_close(); ?>
            <h5><a href="<?php echo base_url(); ?>">Regresar</a></h5>
        </div>
    </div>
</div>
<div class="footer" style="background-color: #000">
    
        <div class="container"> <br> </div>
    
        <div class="container">
            <div class="w3_footer_grids">
                <div class="col-md-3 w3_footer_grid">
                    <center>
                        <a href="<?php //echo base_url("website/ximpleman"); ?>" target="_BLANK" >
                            <img src="<?php //echo base_url("resources/web/images/logo.png"); ?>" width="50%" height="50%">
                        </a>
                    </center>
                </div>
                <div class="col-md-3 w3_footer_grid">
                    <center>
                        <a href="faq.html">Política de privacidad</a>
                    
                    </center>
                </div>
                <div class="col-md-3 w3_footer_grid">
                    <center>
                        <a href="groceries.html">Un producto de</a>
                    </center>
                </div>
                <div class="col-md-3 w3_footer_grid">
                    <center>
                        <a href="<?php //echo base_url("website/password"); ?>" target="_BLANK" >
                        <img src="<?php //echo base_url("resources/web/images/logo_password.png"); ?>" width="50%" height="50%">
                        </a>
                    </center>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        
        <div class="container"> <br> </div>
    </div>  