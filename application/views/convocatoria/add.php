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
              	<h3 class="box-title">Añadir Convocatoria</h3>
            </div>
            <?php echo form_open_multipart('convocatoria/add'); ?>
          	<div class="box-body">
                    <div class="row clearfix">
                        <div class="col-md-12">
                            <label for="convocatoria_descripcion" class="control-label"><span class="text-danger">*</span>Descripción</label>
                            <div class="form-group">
                                <input type="text" name="convocatoria_descripcion" value="<?php echo $this->input->post('convocatoria_descripcion'); ?>" class="form-control" id="convocatoria_descripcion" autofocus autocomplete="off" required onkeyup="var start = this.selectionStart; var end = this.selectionEnd; this.value = this.value.toUpperCase(); this.setSelectionRange(start, end);" />
                            </div>
                        </div>
                        <div class="col-md-9">
                            <label for="beca_id" class="control-label"><span class="text-danger">*</span>Beca</label>
                            <div class="form-group">
                                <select name="beca_id" class="form-control" required>
                                    <?php 
                                    foreach($all_beca as $beca)
                                    {
                                        echo '<option value="'.$beca['beca_id'].'">'.$beca['beca_nombre'].'</option>';
                                    } 
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="plaza_cantidad" class="control-label"><span class="text-danger">*</span>Plazas</label>
                            <div class="form-group">
                                <input type="number" name="plaza_cantidad" value="<?php echo ($this->input->post('plaza_cantidad') ? $this->input->post('plaza_cantidad') : "0"); ?>" class="form-control" id="plaza_cantidad"  autocomplete="off" required />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="gestion_id" class="control-label">Gestion</label>
                            <div class="form-group">
                                <select name="gestion_id" class="form-control">
                                    <?php 
                                    foreach($all_gestion as $gestion)
                                    {
                                        echo '<option value="'.$gestion['gestion_id'].'">'.$gestion['gestion_descripcion'].'</option>';
                                    } 
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="convocatoria_fechalimite" class="control-label"><span class="text-danger">*</span>Fecha Limite</label>
                            <div class="form-group">
                                <input type="date" name="convocatoria_fechalimite" value="<?php echo ($this->input->post('convocatoria_fechalimite') ? $this->input->post('convocatoria_fechalimite') : date('Y-m-d')); ?>" class="form-control" id="convocatoria_fechalimite" required />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="convocatoria_dcto" class="control-label"><span class="text-danger">*</span>Documento</label>
                            <div class="form-group">
                                <input type="file" name="convocatoria_dcto" value="<?php echo $this->input->post('convocatoria_dcto'); ?>" class="form-control" id="convocatoria_dcto" required/>
                            </div>
                        </div>
                        <div class="col-md-12 text-bold text-center"><u>REQUISITOS</u></div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">
                                <input type="checkbox" id="select_all" onclick="toggle(this)" checked />Seleccionar Todos</label>
                            </div>
                        </div>
                        <?php
                        foreach ($all_requisito as $requisito) {
                            ?>
                        <div class="col-md-6 text-left">
                            <label class="normal" title="<?php //echo $requisito['requisisto_nombre']; ?>">
                                <u><input style="display: inline" class="checkbox" type="checkbox" name="requisitos[]" id="requisisto_id<?php echo $requisito['requisito_id']; ?>" value="<?php echo $requisito['requisito_id']; ?>" checked />
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