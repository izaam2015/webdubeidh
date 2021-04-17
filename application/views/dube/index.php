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
    <font size='4' face='Arial'><b>Dube</b></font>
    <br><font size='2' face='Arial'>Registros Encontrados: <?php echo sizeof($dube); ?></font>
    <div class="box-tools no-print">
        <a href="<?php echo site_url('dube/add'); ?>" class="btn btn-success btn-sm"><fa class='fa fa-pencil-square-o'></fa> Registrar Dube</a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="input-group no-print"> <span class="input-group-addon">Buscar</span>
            <input id="filtrar" type="text" class="form-control" placeholder="Ingrese organigrama..">
        </div>
        <div class="box">
            <div class="box-body">
                <table class="table table-striped" id="mitabla">
                    <tr>
                        <th>#</th>
                        <th>Organigrama</th>
                        <th>Autoridadades</th>
                        <th>Misión</th>
                        <th>Visión</th>
                        <th>Objetivo</th>
                        <th></th>
                    </tr>
                    <tbody class="buscar">
                    <?php
                    $i = 0;
                    foreach($dube as $d){ ?>
                    <tr>
                        <td class="text-center"><?php echo $i+1; ?></td>
                        <td><?php echo $d['dube_organigrama']; ?></td>
                        <td><?php echo $d['dube_autoridadades']; ?></td>
                        <td><?php echo $d['dube_mision']; ?></td>
                        <td><?php echo $d['dube_vision']; ?></td>
                        <td><?php echo $d['dube_objetivo']; ?></td>
                        <td>
                            <a href="<?php echo site_url('dube/edit/'.$d['dube_id']); ?>" class="btn btn-info btn-xs" title="Modificar dube"><span class="fa fa-pencil"></span></a> 
                            <!--<a href="<?php //echo site_url('dube/remove/'.$d['dube_id']); ?>" class="btn btn-danger btn-xs" title="Elimiar dube"><span class="fa fa-trash"></span></a>-->
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
