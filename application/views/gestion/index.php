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
    <font size='4' face='Arial'><b>Gestión</b></font>
    <br><font size='2' face='Arial'>Registros Encontrados: <?php echo sizeof($gestion); ?></font>
    <div class="box-tools no-print">
        <a href="<?php echo site_url('gestion/add'); ?>" class="btn btn-success btn-sm"><fa class='fa fa-pencil-square-o'></fa> Registrar Gestión</a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="input-group no-print"> <span class="input-group-addon">Buscar</span>
            <input id="filtrar" type="text" class="form-control" placeholder="Ingrese la descripción de gestión">
        </div>
        <div class="box">
            <div class="box-body">
                <table class="table table-striped" id="mitabla">
                    <tr>
                        <th>#</th>
                        <th>Descripción</th>
                        <th>Fecha inicio</th>
                        <th>Fecha fin</th>
                        <th></th>
                    </tr>
                    <?php
                    $i= 0;
                    foreach($gestion as $g){ ?>
                    <tr>
                        <td class="text-center"><?php echo $i+1; ?></td>
                        <td><?php echo $g['gestion_descripcion']; ?></td>
                        <td class="text-center"><?php echo date("d/m/Y", strtotime($g['gestion_fechainicio'])); ?></td>
                        <td class="text-center"><?php if(strtotime($g['gestion_fechafin']) > 0){ echo date("d/m/Y", strtotime($g['gestion_fechafin']));} ?></td>
                        <td>
                            <a href="<?php echo site_url('gestion/edit/'.$g['gestion_id']); ?>" class="btn btn-info btn-xs" title="Modificar gestión"><span class="fa fa-pencil"></span></a> 
                            <!--<a href="<?php //echo site_url('gestion/remove/'.$g['gestion_id']); ?>" class="btn btn-danger btn-xs" title="Eliminar gestión"><span class="fa fa-trash"></span> Delete</a>-->
                        </td>
                    </tr>
                    <?php
                    $i++;
                    } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
