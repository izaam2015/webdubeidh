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
    <font size='4' face='Arial'><b>Estudiante</b></font>
    <br><font size='2' face='Arial'>Registros Encontrados: <?php echo sizeof($estudiante); ?></font>
    <div class="box-tools no-print">
        <a href="<?php echo site_url('Estudiante/add'); ?>" class="btn btn-success btn-sm"><fa class='fa fa-pencil-square-o'></fa> Registrar Estudiante</a>
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
                        <th>Apellidos</th>
                        <th>C.I.</th>
                        <th>Codsis</th>
                        <th>Email</th>
                        <th>Carrera</th>
                        <th>Celular</th>
                        <th>Telefono</th>
                        <th></th>
                    </tr>
                    <tbody class="buscar">
                    <?php
                    $i = 0;
                    foreach($estudiante as $e){ ?>
                    <tr>
                        <td class="text-center"><?php echo $i+1; ?></td>
                        <td><?php echo $e['estudiante_nombre']; ?></td>
                        <td><?php echo $e['estudiante_apellidos']; ?></td>
                        <td class="text-center"><?php echo $e['estudiante_ci']; ?></td>
                        <td class="text-center"><?php echo $e['estudiante_codsis']; ?></td>
                        <td><?php echo $e['estudiante_email']; ?></td>
                        <td><?php echo $e['estudiante_carrera']; ?></td>
                        <td class="text-center"><?php echo $e['estudiante_celular']; ?></td>
                        <td class="text-center"><?php echo $e['estudiante_telefono']; ?></td>
                        <td>
                            <a href="<?php echo site_url('estudiante/edit/'.$e['estudiante_id']); ?>" class="btn btn-info btn-xs" title="Modificar Estuduante"><span class="fa fa-pencil"></span></a> 
                            <!--<a href="<?php //echo site_url('estudiante/remove/'.$e['estudiante_id']); ?>" class="btn btn-danger btn-xs" title="Eliminar estudiante"><span class="fa fa-trash"></span></a>-->
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
