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
    <font size='4' face='Arial'><b>Administrativo</b></font>
    <br><font size='2' face='Arial'>Registros Encontrados: <?php echo sizeof($administrativo); ?></font>
    <div class="box-tools no-print">
        <a href="<?php echo site_url('administrativo/add'); ?>" class="btn btn-success btn-sm"><fa class='fa fa-pencil-square-o'></fa> Registrar Administrativo</a>
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
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>C.I.</th>
                        <th>Email</th>
                        <th>Profesión</th>
                        <!--<th>AdminCargo</th>-->
                        <th>Teléfono</th>
                        <th>Celular</th>
                        <th>Cargo</th>
                        <th>Direccion Univ.</th>
                        <th>Estado</th>
                        <th></th>
                    </tr>
                    <tbody class="buscar">
                    <?php
                    $i = 0;
                    foreach($administrativo as $a){ ?>
                    <tr>
                        <td class="text-center"><?php echo $i+1; ?></td>
                        <td><?php echo $a['admin_nombre']; ?></td>
                        <td><?php echo $a['admin_apellido']; ?></td>
                        <td><?php echo $a['admin_ci']; ?></td>
                        <td><?php echo $a['admin_email']; ?></td>
                        <td><?php echo $a['admin_profesion']; ?></td>
                        <!--<td><?php //echo $a['admin_cargo']; ?></td>-->
                        <td><?php echo $a['admin_celular']; ?></td>
                        <td><?php echo $a['admin_telefono']; ?></td>
                        <td><?php echo $a['cargo_nombre']; ?></td>
                        <td><?php echo $a['direccionuniv_nombre']; ?></td>
                        <td><?php echo $a['estado_descripcion']; ?></td>
                        <td>
                            <a href="<?php echo site_url('administrativo/edit/'.$a['admin_id']); ?>" class="btn btn-info btn-xs" title="Modificar administrativo"><span class="fa fa-pencil"></span></a> 
                            <!--<a href="<?php //echo site_url('administrativo/remove/'.$a['admin_id']); ?>" class="btn btn-danger btn-xs" title="Eliminar Administrativo"><span class="fa fa-trash"></span></a>-->
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
