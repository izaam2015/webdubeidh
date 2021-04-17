<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Añadir Unidad</h3>
            </div>
            <?php echo form_open('unidad/add'); ?>
            <div class="box-body">
                <div class="row clearfix">
                    <div class="col-md-6">
                        <label for="unidad_nombre" class="control-label"><span class="text-danger">*</span>Nombre</label>
                        <div class="form-group">
                            <input type="text" name="unidad_nombre" value="<?php echo $this->input->post('unidad_nombre'); ?>" class="form-control" id="unidad_nombre" required autofocus autocomplete="off" onkeyup="var start = this.selectionStart; var end = this.selectionEnd; this.value = this.value.toUpperCase(); this.setSelectionRange(start, end);" />
                            <span class="text-danger"><?php echo form_error('unidad_nombre');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="unidad_dependencia" class="control-label">Dependencia</label>
                        <div class="form-group">
                            <input type="text" name="unidad_dependencia" value="<?php echo $this->input->post('unidad_dependencia'); ?>" class="form-control" id="unidad_dependencia" autocomplete="off" onkeyup="var start = this.selectionStart; var end = this.selectionEnd; this.value = this.value.toUpperCase(); this.setSelectionRange(start, end);" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="unidad_responsable" class="control-label">Responsable</label>
                        <div class="form-group">
                            <input type="text" name="unidad_responsable" value="<?php echo $this->input->post('unidad_responsable'); ?>" class="form-control" id="unidad_responsable" autocomplete="off" onkeyup="var start = this.selectionStart; var end = this.selectionEnd; this.value = this.value.toUpperCase(); this.setSelectionRange(start, end);" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-footer">
            	<button type="submit" class="btn btn-success">
                    <i class="fa fa-check"></i> Guardar
            	</button>
                <a href="<?php echo site_url('unidad'); ?>" class="btn btn-danger">
                    <i class="fa fa-times"></i> Cancelar</a>
            </div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>