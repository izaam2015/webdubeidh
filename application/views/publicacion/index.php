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
    <font size='4' face='Arial'><b>Publicación</b></font>
    <br><font size='2' face='Arial'>Registros Encontrados: <?php echo sizeof($publicacion); ?></font>
    <div class="box-tools no-print">
        <a href="<?php echo site_url('publicacion/add'); ?>" class="btn btn-success btn-sm"><fa class='fa fa-pencil-square-o'></fa> Registrar Publicación</a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="input-group no-print"> <span class="input-group-addon">Buscar</span>
            <input id="filtrar" type="text" class="form-control" placeholder="Ingrese dube, beca, autor..">
        </div>
        <div class="box">
            <div class="box-body">
                <table class="table table-striped" id="mitabla">
                    <tr>
                        <th>#</th>
                        <th>Dube</th>
                        <th>Beca</th>
                        <th>Fecha Publicación</th>
                        <th>Autor</th>
                        <th>Enlace</th>
                        <th>Documento</th>
                        <th>Texto</th>
                        <th>Estado</th>
                        <th></th>
                    </tr>
                    <tbody class="buscar">
                    <?php
                    $i = 0;
                    foreach($publicacion as $p){ ?>
                    <tr>
                        <td class="text-center"><?php echo $i+1; ?></td>
                        <td><?php echo $p['dube_id']; ?></td>
                        <td><?php echo $p['beca_nombre']; ?></td>
                        <td><?php echo $p['publicacion_fecha']; ?></td>
                        <td><?php echo $p['publicacion_autor']; ?></td>
                        <td><?php echo $p['publicacion_enlace']; ?></td>
                        <td>
                            <a href="<?php echo site_url('/resources/images/publicacion/'.$p['publicacion_dcto']) ?>" target="_blank"><?php echo $p['publicacion_dcto']; ?></a>
                        </td>
                        <td><?php echo $p['publicacion_texto']; ?></td>
                        <td><?php echo $p['estado_descripcion']; ?></td>
                        <td>
                            <a href="<?php echo site_url('publicacion/edit/'.$p['publicacion_id']); ?>" class="btn btn-info btn-xs" title="Modificar publicación"><span class="fa fa-pencil"></span></a>
                            <!--<a href="<?php //echo site_url('publicacion/remove/'.$p['publicacion_id']); ?>" class="btn btn-danger btn-xs" title="Eliminar publicación"><span class="fa fa-trash"></span></a>-->
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
