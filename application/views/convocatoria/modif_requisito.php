<script src="<?php echo base_url('resources/js/jquery-2.2.3.min.js'); ?>" type="text/javascript"></script>
<script type="text/javascript">
function toggle(source) {
  checkboxes = document.getElementsByClassName('checkbox');
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}
</script>
<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Modificar Requisitos de la Convocatoria:</h3>
                <div class="col-md-12 text-center">
                    <h3 class="box-title"><?php echo $convocatoria['convocatoria_descripcion']; ?></h3>
                </div>
            </div>
            <?php echo form_open_multipart('convocatoria/modif_requisito/'.$convocatoria['convocatoria_id']); ?>
            <div class="box-body">
                <div class="row clearfix">
                    <div class="col-md-12 text-bold text-center"><u>REQUISITOS</u></div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">
                            <input type="checkbox" id="select_all" onclick="toggle(this)" checked />Seleccionar Todos</label>
                        </div>
                    </div>
                    <?php
                    foreach($all_requisito as $requisito){
                        $checked = "";
                        foreach($los_requisitos as $requi){
                            if($requi["requisito_id"] == $requisito["requisito_id"]){
                                $checked = "checked";
                                break;
                            }
                        }
                        /*$checked = "";
                        if($rolpadre['rolusuario_asignado'] == 1){
                            $checked = "checked";
                        }*/
                        ?>
                    <div class="col-md-6 text-left">
                        <label class="normal" title="<?php //echo $requisito['requisisto_nombre']; ?>">
                            <u><input style="display: inline" class="checkbox" type="checkbox" name="requisitos[]" id="requisito_id<?php echo $requisito['requisito_id']; ?>" value="<?php echo $requisito['requisito_id']; ?>" <?php echo $checked; ?> />
                                <?php echo $requisito['requisito_nombre']; ?>
                            </u>
                        </label>
                        <!--<input type="hidden" name="id_rol_usuario<?php //echo $i; ?>" id="id_rol_usuario<?php //echo $i; ?>" value="<?php //echo $rolhijo['id_rol_usuario']; ?>" />-->
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="box-footer">
            	<button type="submit" class="btn btn-success">
                    <i class="fa fa-check"></i> Guardar
                </button>
                <a href="<?php echo site_url('convocatoria'); ?>" class="btn btn-danger">
                    <i class="fa fa-times"></i> Cancelar</a>
            </div>				
            <?php echo form_close(); ?>
        </div>
    </div>
</div>