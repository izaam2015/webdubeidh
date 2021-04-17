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
              	<h3 class="box-title">Modificar Convocatoria</h3>
            </div>
            <?php echo form_open_multipart('convocatoria/edit/'.$convocatoria['convocatoria_id']); ?>
            <div class="box-body">
                <div class="row clearfix">
                    <div class="col-md-12">
                        <label for="convocatoria_descripcion" class="control-label"><span class="text-danger">*</span>Descripción</label>
                        <div class="form-group">
                            <input type="text" name="convocatoria_descripcion" value="<?php echo ($this->input->post('convocatoria_descripcion') ? $this->input->post('convocatoria_descripcion') : $convocatoria['convocatoria_descripcion']); ?>" class="form-control" id="convocatoria_descripcion"  autofocus autocomplete="off" required onkeyup="var start = this.selectionStart; var end = this.selectionEnd; this.value = this.value.toUpperCase(); this.setSelectionRange(start, end);" />
                        </div>
                    </div>
                    <div class="col-md-9">
                        <label for="beca_id" class="control-label"><span class="text-danger">*</span>Beca</label>
                        <div class="form-group">
                            <select name="beca_id" class="form-control" required>
                                <?php
                                if(isset($los_requisitos)){
                                    $estabeca = $los_requisitos[0]['beca_id'];
                                }else{
                                    $estabeca = "";
                                }
                                foreach($all_beca as $beca)
                                {
                                    $selected = ($beca['beca_id'] == $estabeca) ? ' selected="selected"' : "";
                                    echo '<option value="'.$beca['beca_id'].'" '.$selected.'>'.$beca['beca_nombre'].'</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="plaza_cantidad" class="control-label"><span class="text-danger">*</span>Plazas</label>
                        <div class="form-group">
                            <input type="number" name="plaza_cantidad" value="<?php echo ($this->input->post('plaza_cantidad') ? $this->input->post('plaza_cantidad') : $convocatoria['plaza_cantidad']); ?>" class="form-control" id="plaza_cantidad"  autocomplete="off" required />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="gestion_id" class="control-label">Gestión</label>
                        <div class="form-group">
                            <select name="gestion_id" class="form-control">
                                <?php 
                                foreach($all_gestion as $gestion)
                                {
                                    $selected = ($gestion['gestion_id'] == $convocatoria['gestion_id']) ? ' selected="selected"' : "";
                                    echo '<option value="'.$gestion['gestion_id'].'" '.$selected.'>'.$gestion['gestion_descripcion'].'</option>';
                                } 
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="convocatoria_fechalimite" class="control-label"><span class="text-danger">*</span>Fecha limite</label>
                        <div class="form-group">
                            <input type="date" name="convocatoria_fechalimite" value="<?php echo ($this->input->post('convocatoria_fechalimite') ? $this->input->post('convocatoria_fechalimite') : $convocatoria['convocatoria_fechalimite']); ?>" class="form-control" id="convocatoria_fechalimite" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="convocatoria_dcto" class="control-label">Documento</label>
                        <div class="form-group">
                            <input type="file" name="convocatoria_dcto" value="<?php echo $this->input->post('convocatoria_dcto'); ?>" class="form-control" id="convocatoria_dcto" />
                            <input type="hidden" name="convocatoria_dcto1" value="<?php echo ($this->input->post('convocatoria_dcto') ? $this->input->post('convocatoria_dcto') : $convocatoria['convocatoria_dcto']); ?>" class="form-control" id="convocatoria_dcto1" />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="convocatoria_fecha" class="control-label">Fecha</label>
                        <div class="form-group">
                            <input type="date" name="convocatoria_fecha" value="<?php echo ($this->input->post('convocatoria_fecha') ? $this->input->post('convocatoria_fecha') : $convocatoria['convocatoria_fecha']); ?>" class="form-control" id="convocatoria_fecha" />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="convocatoria_hora" class="control-label">Hora</label>
                        <div class="form-group">
                            <input type="time" step="any" name="convocatoria_hora" value="<?php echo ($this->input->post('convocatoria_hora') ? $this->input->post('convocatoria_hora') : $convocatoria['convocatoria_hora']); ?>" class="form-control" id="convocatoria_hora" />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="estado_id" class="control-label">Estado</label>
                        <div class="form-group">
                            <select name="estado_id" class="form-control">
                                <?php 
                                foreach($all_estado as $estado)
                                {
                                    $selected = ($estado['estado_id'] == $convocatoria['estado_id']) ? ' selected="selected"' : "";
                                    echo '<option value="'.$estado['estado_id'].'" '.$selected.'>'.$estado['estado_descripcion'].'</option>';
                                } 
                                ?>
                            </select>
                        </div>
                    </div>
                    
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