<script src="<?php echo base_url('resources/js/jquery-2.2.3.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('resources/js/postulante_index.js'); ?>" type="text/javascript"></script>
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
<script type="text/javascript">
        $(document).ready(function () {
            (function ($) {
                $('#buscarrequisito').keyup(function () {
                    var rex = new RegExp($(this).val(), 'i');
                    $('.buscarreq tr').hide();
                    $('.buscarreq tr').filter(function () {
                        return rex.test($(this).text());
                    }).show();
                })
            }(jQuery));
        });
</script>
<link href="<?php echo base_url('resources/css/mitabla.css'); ?>" rel="stylesheet">
<input type="hidden" name="base_url" id="base_url" value="<?php echo base_url(); ?>" />
<div class="box-header">
    <font size='4' face='Arial'><b>Postulante</b></font>
    <br><font size='2' face='Arial'>Registros Encontrados: <?php echo sizeof($postulante); ?></font>
    <div class="box-tools no-print">
        <a href="<?php echo site_url('postulante/add'); ?>" class="btn btn-success btn-sm"><fa class='fa fa-pencil-square-o'></fa> Registrar Postulante</a>
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
                        <th>Estudiante</th>
                        <th>Beca/Plaza</th>
                        <th>Padres Tutores</th>
                        <th>Observación</th>
                        <th>Corrección</th>
                        <th>Estado</th>
                        <th></th>
                    </tr>
                    <tbody class="buscar">
                    <?php
                    $i = 0;
                    foreach($postulante as $p){ ?>
                    <tr style="background: <?php echo $p["estado_color"]; ?>">
                        <td class="text-center"><?php echo $i+1; ?></td>
                        <td><?php echo $p['estudiante_apellidos']." ".$p['estudiante_nombre']; ?></td>
                        <td class="text-center"><?php echo $p['beca_nombre']."<br>".$p['plaza_cantidad']; ?></td>
                        <td><?php echo $p['padres_tutores']; ?></td>
                        <td><?php echo $p['postulante_observacion']; ?></td>
                        <td><?php echo $p['postulante_correccion']; ?></td>
                        <td class="text-center"><?php echo $p['estado_descripcion']; ?></td>
                        <td>
                            <a href="<?php echo site_url('postulante/edit/'.$p['postulante_id']); ?>" class="btn btn-info btn-xs" title="Modificar postulante"><span class="fa fa-pencil"></span></a>
                            <?php if($p["estado_id"] == 3){ ?>
                                <a href="<?php echo site_url('postulante/cumplir/'.$p['postulante_id']); ?>" class="btn btn-success btn-xs" title="Calificar requisitos"><i class="fa fa-file-text-o"></i></a>
                            <?php }elseif($p["estado_id"] == 4){ ?>
                                <a href="<?php echo site_url('postulante/modificar/'.$p['postulante_id']); ?>" class="btn btn-soundcloud btn-xs" title="Modificar requisitos"><i class="fa fa-file-text-o"></i></a>
                                <?php if($ver_requisitos == 1){ ?>
                                <a onclick="formulario_requisitos(<?php echo $p["postulante_id"]; ?>)" class="btn btn-facebook btn-xs" title="Ver requisitos calificados"><i class="fa fa-list-ol"></i></a>
                            <?php
                                }
                            } ?>
                            
                            <!--<a href="<?php //echo site_url('postulante/remove/'.$p['postulante_id']); ?>" class="btn btn-danger btn-xs" title="Eliminar postulante"><span class="fa fa-trash"></span></a>-->
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

<!------------------------ INICIO modal para ver requisitos ------------------->
<div class="modal fade" id="modalrequisito" tabindex="-1" role="dialog" aria-labelledby="modalrequisitolabel">
    <div class="modal-dialog" role="document">
        <br><br>
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                <span class="text-bold">REQUISITOS</span>
                <div class="col-md-12" style="padding-left: 0px">
                    <div class="input-group">
                        <span class="input-group-addon"> Buscar </span>           
                        <input type="text" id="buscarrequisito" name="buscarrequisito" class="form-control" placeholder="Ingrese el requisito.." autofocus autocomplete="off">
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <!------------------------------------------------------------------->
                <div class="box-body table-responsive">
                    <table class="table table-striped" id="mitabla">
                        <tr>
                            <th>#</th>
                            <th>Requisito</th>
                            <th>Estado</th>
                        </tr>
                        <tbody class="buscarreq" id="tablaresultados"></tbody>
                    </table>
                </div>
                <!------------------------------------------------------------------->
            </div>
            <div class="modal-footer" style="text-align: center">
                <a href="#" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span> Cerrar</a>
            </div>
        </div>
    </div>
</div>
<!------------------------ FIN modal para ver requisitos ------------------->
