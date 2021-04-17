<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Modificar Beca</h3>
            </div>
            <?php echo form_open('beca/edit/'.$beca['beca_id']); ?>
                <div class="box-body">
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <label for="beca_nombre" class="control-label"><span class="text-danger">*</span>Nombre</label>
                            <div class="form-group">
                                <input type="text" name="beca_nombre" value="<?php echo ($this->input->post('beca_nombre') ? $this->input->post('beca_nombre') : $beca['beca_nombre']); ?>" class="form-control" id="beca_nombre" required autofocus autocomplete="off" onkeyup="var start = this.selectionStart; var end = this.selectionEnd; this.value = this.value.toUpperCase(); this.setSelectionRange(start, end);" />
                                <span class="text-danger"><?php echo form_error('beca_nombre');?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="beca_contrato" class="control-label">Contrato</label>
                            <div class="form-group">
                                <input type="text" name="beca_contrato" value="<?php echo ($this->input->post('beca_contrato') ? $this->input->post('beca_contrato') : $beca['beca_contrato']); ?>" class="form-control" id="beca_contrato" autocomplete="off" onkeyup="var start = this.selectionStart; var end = this.selectionEnd; this.value = this.value.toUpperCase(); this.setSelectionRange(start, end);" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="beca_repseguimiento" class="control-label">Seguimiento</label>
                            <div class="form-group">
                                <input type="text" name="beca_repseguimiento" value="<?php echo ($this->input->post('beca_repseguimiento') ? $this->input->post('beca_repseguimiento') : $beca['beca_repseguimiento']); ?>" class="form-control" id="beca_repseguimiento" autocomplete="off" onkeyup="var start = this.selectionStart; var end = this.selectionEnd; this.value = this.value.toUpperCase(); this.setSelectionRange(start, end);" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="beca_descripcion" class="control-label">Descripción</label>
                            <div class="form-group">
                                <textarea name="beca_descripcion" class="form-control" id="beca_descripcion" rows="8"><?php echo ($this->input->post('beca_descripcion') ? $this->input->post('beca_descripcion') : $beca['beca_descripcion']); ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="estado_id" class="control-label">Estado</label>
                            <div class="form-group">
                                <select name="estado_id" class="form-control">
                                    <!--<option value="">select estado</option>-->
                                    <?php 
                                    foreach($all_estado as $estado)
                                    {
                                        $selected = ($estado['estado_id'] == $beca['estado_id']) ? ' selected="selected"' : "";
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
                    <a href="<?php echo site_url('beca'); ?>" class="btn btn-danger">
                        <i class="fa fa-times"></i> Cancelar</a>
	        </div>				
            <?php echo form_close(); ?>
        </div>
    </div>
</div>