<script src="<?php echo base_url('resources/js/jquery-2.2.3.min.js'); ?>" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        (function ($) {
            $('#filtrar').keyup(function () {
                var rex = new RegExp($(this).val(), 'i');
                $('.buscar tr').hide();
                $('.buscar tr').filter(function () {
                    return rex.test($(this).text());
                }).show();
            })
        }(jQuery));
    });
</script>
<link href="<?php echo base_url('resources/css/mitabla.css'); ?>" rel="stylesheet">
<div class="box-header">
    <font size='4' face='Arial'><b>Comisión</b></font>
    <br><font size='2' face='Arial'>Registros Encontrados: <?php echo sizeof($comision); ?></font>
    <div class="box-tools no-print">
        <a href="<?php echo site_url('comision/add'); ?>" class="btn btn-success btn-sm"><fa class='fa fa-pencil-square-o'></fa> Registrar Comisión</a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="input-group no-print"> <span class="input-group-addon">Buscar</span>
            <input id="filtrar" type="text" class="form-control" placeholder="Ingrese nombre, apellido..">
        </div>
        <div class="box">
            <div class="box-body">
                <table class="table table-striped" id="mitabla">
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Gestión</th>
                        <th>Administrativo</th>
                        <th>Descripción</th>
                        <th>F. de Creacion</th>
                        <th>Estado</th>
                        <th></th>
                    </tr>
                    <tbody class="buscar">
                    <?php
                    $i =0;
                    foreach($comision as $c){ ?>
                    <tr>
                        <td class="text-center"><?php echo $i+1; ?></td>
                        <td><?php echo $c['comision_nombre']; ?></td>
                        <td class="text-center"><?php echo $c['gestion_descripcion']; ?></td>
                        <td><?php echo $c['admin_nombre']." ".$c['admin_apellido']; ?></td>
                        <td><?php echo $c['comision_descripcion']; ?></td>
                        <td><?php echo date("d/m/Y", strtotime($c['comision_fechacreacion'])); ?></td>
                        <td><?php echo $c['estado_descripcion']; ?></td>
                        <td>
                            <a href="<?php echo site_url('comision/edit/'.$c['comision_id']); ?>" class="btn btn-info btn-xs" title="Modificar comisión"><span class="fa fa-pencil"></span></a> 
                            <!--<a href="<?php //echo site_url('comision/remove/'.$c['comision_id']); ?>" class="btn btn-danger btn-xs" title="Eliminar comision"><span class="fa fa-trash"></span></a>-->
                        </td>
                    </tr>
                    <?php
                    $i++;
                    } ?>
                    </tbody>
                </table>
                                
            </div>
        </div>
    </div>
</div>
