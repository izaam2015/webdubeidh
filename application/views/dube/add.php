<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Añadir Dube</h3>
            </div>
            <?php echo form_open('dube/add'); ?>
          	<div class="box-body">
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <label for="dube_organigrama" class="control-label"><span class="text-danger">*</span>Organigrama</label>
                            <div class="form-group">
                                <input type="text" name="dube_organigrama" value="<?php echo $this->input->post('dube_organigrama'); ?>" class="form-control" id="dube_organigrama" required autofocus autocomplete="off" onkeyup="var start = this.selectionStart; var end = this.selectionEnd; this.value = this.value.toUpperCase(); this.setSelectionRange(start, end);" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="dube_autoridadades" class="control-label">Autoridadades</label>
                            <div class="form-group">
                                <input type="text" name="dube_autoridadades" value="<?php echo $this->input->post('dube_autoridadades'); ?>" class="form-control" id="dube_autoridadades" autocomplete="off" onkeyup="var start = this.selectionStart; var end = this.selectionEnd; this.value = this.value.toUpperCase(); this.setSelectionRange(start, end);" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="dube_mision" class="control-label">Misión</label>
                            <div class="form-group">
                                <textarea name="dube_mision" class="form-control" id="dube_mision"><?php echo $this->input->post('dube_mision'); ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="dube_vision" class="control-label">Visión</label>
                            <div class="form-group">
                                <textarea name="dube_vision" class="form-control" id="dube_vision"><?php echo $this->input->post('dube_vision'); ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="dube_objetivo" class="control-label">Objetivo</label>
                            <div class="form-group">
                                <textarea name="dube_objetivo" class="form-control" id="dube_objetivo"><?php echo $this->input->post('dube_objetivo'); ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
          	<div class="box-footer">
                    <button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Guardar
                    </button>
                    <a href="<?php echo site_url('dube'); ?>" class="btn btn-danger">
                        <i class="fa fa-times"></i> Cancelar</a>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>