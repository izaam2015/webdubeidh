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
    <font size='4' face='Arial'><b>Estado</b></font>
    <br><font size='2' face='Arial'>Registros Encontrados: <?php echo sizeof($estado); ?></font>
    <div class="box-tools no-print">
        <a href="<?php echo site_url('estado/add'); ?>" class="btn btn-success btn-sm"><fa class='fa fa-pencil-square-o'></fa> Registrar Estado</a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-body">
                <table class="table table-striped" id="mitabla">
                    <tr>
                        <th>#</th>
                        <th>Descripción</th>
                        <th>Tipo</th>
                        <th>Color</th>
                        <th></th>
                    </tr>
                    <tbody class="buscar">
                    <?php
                    $i = 0;
                    foreach($estado as $e){ ?>
                    <tr>
                        <td class="text-center"><?php echo $i+1; ?></td>
                        <td><?php echo $e['estado_descripcion']; ?></td>
                        <td class="text-center"><?php echo $e['estado_tipo']; ?></td>
                        <td class="text-center" style="background-color: <?php echo $e['estado_color']; ?>"><?php echo $e['estado_color']; ?></td>
                        <td>
                            <a href="<?php echo site_url('estado/edit/'.$e['estado_id']); ?>" class="btn btn-info btn-xs" title="Modificar estado"><span class="fa fa-pencil"></span></a> 
                            <!--<a href="<?php //echo site_url('estado/remove/'.$e['estado_id']); ?>" class="btn btn-danger btn-xs" title="Eliminar estado"><span class="fa fa-trash"></span></a>-->
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
