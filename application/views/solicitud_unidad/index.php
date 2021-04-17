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
    <font size='4' face='Arial'><b>Solicitud Unidades</b></font>
    <br><font size='2' face='Arial'>Registros Encontrados: <?php echo sizeof($solicitud_unidades); ?></font>
    <div class="box-tools no-print">
        <a href="<?php echo site_url('solicitud_unidad/add'); ?>" class="btn btn-success btn-sm"><fa class='fa fa-pencil-square-o'></fa> Registrar Solicitud Unidades</a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="input-group no-print"> <span class="input-group-addon">Buscar</span>
            <input id="filtrar" type="text" class="form-control" placeholder="Ingrese unidad, modalidad..">
        </div>
        <div class="box">
            <div class="box-body">
                <table class="table table-striped" id="mitabla">
                    <tr>
                        <th>#</th>
                        <th>Solicitud Unidad</th>
                        <th>Gestión</th>
                        <th>Unidad</th>
                        <th>Modalidad</th>
                        <th>Cantidad Becarios</th>
                        <th>Requiremiento</th>
                        <th>Actividad</th>
                        <th></th>
                    </tr>
                    <tbody class="buscar">
                    <?php
                    $i = 0;
                    foreach($solicitud_unidades as $s){ ?>
                    <tr>
                        <td class="text-center"><?php echo $i+1; ?></td>
                        <td><?php echo $s['solicitud_unidad']; ?></td>
                        <td class="text-center"><?php echo $s['gestion_descripcion']; ?></td>
                        <td><?php echo $s['unidad_nombre']; ?></td>
                        <td><?php echo $s['solicitud_modalidad']; ?></td>
                        <td class="text-center"><?php echo $s['solicitud_cantidad_becarios']; ?></td>
                        <td><?php echo $s['solicitud_carreras_requiremiento']; ?></td>
                        <td><?php echo $s['solicitud_actividad']; ?></td>
                        <td>
                            <a href="<?php echo site_url('solicitud_unidad/edit/'.$s['solicitud_id']); ?>" class="btn btn-info btn-xs" title="Modificar solcitud unidad"><span class="fa fa-pencil"></span></a> 
                            <!--<a href="<?php //echo site_url('solicitud_unidad/remove/'.$s['solicitud_id']); ?>" class="btn btn-danger btn-xs" title="Elimiar solicitud unidad"><span class="fa fa-trash"></span></a>-->
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
