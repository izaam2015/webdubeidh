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
    <font size='4' face='Arial'><b>Unidad</b></font>
    <br><font size='2' face='Arial'>Registros Encontrados: <?php echo sizeof($unidad); ?></font>
    <div class="box-tools no-print">
        <a href="<?php echo site_url('unidad/add'); ?>" class="btn btn-success btn-sm"><fa class='fa fa-pencil-square-o'></fa> Registrar Unidad</a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="input-group no-print"> <span class="input-group-addon">Buscar</span>
            <input id="filtrar" type="text" class="form-control" placeholder="Ingrese el nombre, dependencia, responsable..">
        </div>
        <div class="box">
            <div class="box-body">
                <table class="table table-striped" id="mitabla">
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Dependencia</th>
                        <th>Responsable</th>
                        <th></th>
                    </tr>
                    <tbody class="buscar">
                    <?php
                    $i= 0;
                    foreach($unidad as $u){ ?>
                    <tr>
                        <td class="text-center"><?php echo $i+1; ?></td>
                        <td><?php echo $u['unidad_nombre']; ?></td>
                        <td><?php echo $u['unidad_dependencia']; ?></td>
                        <td><?php echo $u['unidad_responsable']; ?></td>
                        <td>
                            <a href="<?php echo site_url('unidad/edit/'.$u['unidad_id']); ?>" class="btn btn-info btn-xs" title="Eliminar unidad"><span class="fa fa-pencil"></span></a> 
                            <!--<a href="<?php //echo site_url('unidad/remove/'.$u['unidad_id']); ?>" class="btn btn-danger btn-xs" title="Eliminar unidad"><span class="fa fa-trash"></span></a>-->
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
