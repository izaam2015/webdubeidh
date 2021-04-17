<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <?php
        $session_data = $this->session->userdata('logged_in');
        $rolusuario = $session_data['rol'];
    ?>
        <title>D.U.B.E.<?php if(isset($page_title)){ echo " - ".$page_title; }?> </title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap.min.css');?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/font-awesome.min.css');?>">
        <!-- Ionicons -->
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">-->
        <!-- Datetimepicker -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap-datetimepicker.min.css');?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/AdminLTE.min.css');?>">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/_all-skins.min.css');?>">
    </head>
    
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini">webdube</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg">webdube</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?php echo site_url('resources/images/usuarios/'.$session_data['thumb']);  ?>" class="user-image" alt="">
                                    <span class="hidden-xs"><?php echo strtolower($session_data['usuario_login'])?></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?php echo site_url('resources/images/usuarios/'.$session_data['usuario_imagen']);?>" class="img-circle" alt="">
                                        <p>
                                            <?php echo $session_data['usuario_nombre'].' - '.$session_data['tipousuario_descripcion']  ?>
                                            <small><?php echo $session_data['usuario_email']?></small>
                                        </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-right">
                                            <a href="<?php echo site_url()?>admin/dashb/logout" class="btn btn-default btn-flat">Salir</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo site_url('resources/images/usuarios/'.$session_data['thumb']);?>" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p><?php echo strtolower($session_data['usuario_nombre']) ?></p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">MENU</li>
                        <li>
                            <a href="<?php echo site_url("admin/dashb");?>">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-book"></i> <span>Registro</span>
                            </a>
                            <ul class="treeview-menu">
                                <?php
                                if($rolusuario[1-1]['rolusuario_asignado'] == 1){
                                ?>
                                <li class="active">
                                    <a href="<?php echo site_url('beca');?>"><i class="fa fa-handshake-o"></i> Beca</a>
                                </li>
                                <?php } ?>
                                <?php
                                if($rolusuario[4-1]['rolusuario_asignado'] == 1){
                                ?>
                                <li>
                                    <a href="<?php echo site_url('convocatoria');?>"><i class="fa fa-list-alt"></i> Convocatoria</a>
                                </li>
                                <?php } ?>
                                <?php
                                if($rolusuario[8-1]['rolusuario_asignado'] == 1){
                                ?>
                                <li>
                                    <a href="<?php echo site_url('estudiante');?>"><i class="fa fa-user"></i> Estudiante</a>
                                </li>
                                <?php } ?>
                                <?php
                                if($rolusuario[11-1]['rolusuario_asignado'] == 1){
                                ?>
                                <li>
                                    <a href="<?php echo site_url('gestion');?>"><i class="fa fa-calendar"></i> Gestión</a>
                                </li>
                                <?php } ?>
                                <?php
                                if($rolusuario[14-1]['rolusuario_asignado'] == 1){
                                ?>
                                <li>
                                    <a href="<?php echo site_url('postulante');?>"><i class="fa fa-address-card"></i> Postulante</a>
                                </li>
                                <?php } ?>
                                <?php
                                if($rolusuario[20-1]['rolusuario_asignado'] == 1){
                                ?>
                                <li>
                                    <a href="<?php echo site_url('publicacion');?>"><i class="fa fa-file-text"></i> Publicaciones</a>
                                </li>
                                <?php } ?>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-newspaper-o"></i> <span>Categoria</span>
                            </a>
                            <ul class="treeview-menu">
                                <?php
                                if($rolusuario[23-1]['rolusuario_asignado'] == 1){
                                ?>
                                <li class="active">
                                    <a href="<?php echo site_url('cargo');?>"><i class="fa fa-align-center"></i> Cargo</a>
                                </li>
                                <?php } ?>
                                <?php
                                if($rolusuario[24-1]['rolusuario_asignado'] == 1){
                                ?>
                                <li>
                                    <a href="<?php echo site_url('estado');?>"><i class="fa fa-toggle-on"></i> Estado</a>
                                </li>
                                <?php } ?>
                                <?php
                                if($rolusuario[25-1]['rolusuario_asignado'] == 1){
                                ?>
                                <li>
                                    <a href="<?php echo site_url('requisito');?>"><i class="fa fa-list-ul"></i> Requisito</a>
                                </li>
                                <?php } ?>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-cog"></i> <span>Parametros</span>
                            </a>
                            <ul class="treeview-menu">
                                <?php
                                if($rolusuario[28-1]['rolusuario_asignado'] == 1){
                                ?>
                                <li class="active">
                                    <a href="<?php echo site_url('administrativo');?>"><i class="fa fa-font"></i> Administrativo</a>
                                </li>
                                <?php } ?>
                                <?php
                                if($rolusuario[31-1]['rolusuario_asignado'] == 1){
                                ?>
                                <li>
                                    <a href="<?php echo site_url('comision');?>"><i class="fa fa-copyright"></i> Comisión</a>
                                </li>
                                <?php } ?>
                                <?php
                                if($rolusuario[42-1]['rolusuario_asignado'] == 1){
                                ?>
                                <li>
                                    <a href="<?php echo site_url('comision_postulante');?>"><i class="fa fa-creative-commons"></i> Comisión Postualnte</a>
                                </li>
                                <?php } ?>
                                <?php
                                if($rolusuario[34-1]['rolusuario_asignado'] == 1){
                                ?>
                                <li>
                                    <a href="<?php echo site_url('direccion_universitaria');?>"><i class="fa fa-sun-o"></i> Dir. Universitaria</a>
                                </li>
                                <?php } ?>
                                <?php
                                if($rolusuario[35-1]['rolusuario_asignado'] == 1){
                                ?>
                                <li>
                                    <a href="<?php echo site_url('dube');?>"><i class="fa fa-first-order"></i> Dube</a>
                                </li>
                                <?php } ?>
                                <?php
                                if($rolusuario[36-1]['rolusuario_asignado'] == 1){
                                ?>
                                <li>
                                    <a href="<?php echo site_url('solicitud_unidad');?>"><i class="fa fa-list-ol"></i> Solicitud Unidad</a>
                                </li>
                                <?php } ?>
                                <?php
                                if($rolusuario[39-1]['rolusuario_asignado'] == 1){
                                ?>
                                <li>
                                    <a href="<?php echo site_url('unidad');?>"><i class="fa fa-vimeo"></i> Unidad</a>
                                </li>
                                <?php } ?>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-clipboard"></i> <span>Reportes</span>
                            </a>
                            <ul class="treeview-menu">
                                <?php
                                if($rolusuario[45-1]['rolusuario_asignado'] == 1){
                                ?>
                                <li class="active">
                                    <a href="<?php echo site_url('reporte/rep_sunidad');?>"><i class="fa fa-list-ul"></i>Solicitud Unidades</a>
                                </li>
                                <?php } ?>
                                <?php
                                /*if($rolusuario[46-1]['rolusuario_asignado'] == 1){
                                ?>
                                <li>
                                    <a href="<?php echo site_url('tipo_usuario');?>"><i class="fa fa-list-ul"></i>Tipo Usuario</a>
                                </li>
                                <?php } ?>
                                <?php
                                if($rolusuario[47-1]['rolusuario_asignado'] == 1){
                                ?>
                                <li>
                                    <a href="<?php echo site_url('usuario');?>"><i class="fa fa-users"></i>Usuarios</a>
                                </li>
                                <?php }*/ ?>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-lock"></i> <span>Seguridad</span>
                            </a>
                            <ul class="treeview-menu">
                                <?php
                                if($rolusuario[45-1]['rolusuario_asignado'] == 1){
                                ?>
                                <li class="active">
                                    <a href="<?php echo site_url('rol');?>"><i class="fa fa-gg"></i>Roles</a>
                                </li>
                                <?php } ?>
                                <?php
                                if($rolusuario[46-1]['rolusuario_asignado'] == 1){
                                ?>
                                <li>
                                    <a href="<?php echo site_url('tipo_usuario');?>"><i class="fa fa-list-ul"></i>Tipo Usuario</a>
                                </li>
                                <?php } ?>
                                <?php
                                if($rolusuario[47-1]['rolusuario_asignado'] == 1){
                                ?>
                                <li>
                                    <a href="<?php echo site_url('usuario');?>"><i class="fa fa-users"></i>Usuarios</a>
                                </li>
                                <?php } ?>
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
                    <?php                    
                    if(isset($_view) && $_view)
                        $this->load->view($_view);
                    ?>                    
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <strong>Generated By <a href="http://www.crudigniter.com/">CRUDigniter</a> 3.2</strong>
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Create the tabs -->
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                    
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Home tab content -->
                    <div class="tab-pane" id="control-sidebar-home-tab">

                    </div>
                    <!-- /.tab-pane -->
                    <!-- Stats tab content -->
                    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                    <!-- /.tab-pane -->
                    
                </div>
            </aside>
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
            immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->

        <!-- jQuery 2.2.3 -->
        <script src="<?php echo site_url('resources/js/jquery-2.2.3.min.js');?>"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="<?php echo site_url('resources/js/bootstrap.min.js');?>"></script>
        <!-- FastClick -->
        <script src="<?php echo site_url('resources/js/fastclick.js');?>"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo site_url('resources/js/app.min.js');?>"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo site_url('resources/js/demo.js');?>"></script>
        <!-- DatePicker -->
        <script src="<?php echo site_url('resources/js/moment.js');?>"></script>
        <script src="<?php echo site_url('resources/js/bootstrap-datetimepicker.min.js');?>"></script>
        <script src="<?php echo site_url('resources/js/global.js');?>"></script>
    </body>
</html>
