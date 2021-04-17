<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Añadir Estudiante</h3>
            </div>
            <?php echo form_open('estudiante/add'); ?>
                <div class="box-body">
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <label for="estudiante_nombre" class="control-label"><span class="text-danger">*</span>Nombres</label>
                            <div class="form-group">
                                <input type="text" name="estudiante_nombre" value="<?php echo $this->input->post('estudiante_nombre'); ?>" class="form-control" id="estudiante_nombre" required autofocus autocomplete="off" onkeyup="var start = this.selectionStart; var end = this.selectionEnd; this.value = this.value.toUpperCase(); this.setSelectionRange(start, end);" />
                                <span class="text-danger"><?php echo form_error('estudiante_nombre');?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="estudiante_apellidos" class="control-label"><span class="text-danger">*</span>Apellidos</label>
                            <div class="form-group">
                                <input type="text" name="estudiante_apellidos" value="<?php echo $this->input->post('estudiante_apellidos'); ?>" class="form-control" id="estudiante_apellidos" required autocomplete="off" onkeyup="var start = this.selectionStart; var end = this.selectionEnd; this.value = this.value.toUpperCase(); this.setSelectionRange(start, end);" />
                                <span class="text-danger"><?php echo form_error('estudiante_apellidos');?></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="estudiante_ci" class="control-label">C.I.</label>
                            <div class="form-group">
                                <input type="text" name="estudiante_ci" value="<?php echo $this->input->post('estudiante_ci'); ?>" class="form-control" id="estudiante_ci" autocomplete="off" onkeyup="var start = this.selectionStart; var end = this.selectionEnd; this.value = this.value.toUpperCase(); this.setSelectionRange(start, end);" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="estudiante_codsis" class="control-label">Codsis</label>
                            <div class="form-group">
                                <input type="text" name="estudiante_codsis" value="<?php echo $this->input->post('estudiante_codsis'); ?>" class="form-control" id="estudiante_codsis" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="estudiante_email" class="control-label">Email</label>
                            <div class="form-group">
                                <input type="email" name="estudiante_email" value="<?php echo $this->input->post('estudiante_email'); ?>" class="form-control" id="estudiante_email" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="estudiante_carrera" class="control-label">Carrera</label>
                            <div class="form-group">
                                <input type="text" name="estudiante_carrera" value="<?php echo $this->input->post('estudiante_carrera'); ?>" class="form-control" id="estudiante_carrera" autocomplete="off" onkeyup="var start = this.selectionStart; var end = this.selectionEnd; this.value = this.value.toUpperCase(); this.setSelectionRange(start, end);" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="estudiante_celular" class="control-label">Celular</label>
                            <div class="form-group">
                                <input type="text" name="estudiante_celular" value="<?php echo $this->input->post('estudiante_celular'); ?>" class="form-control" id="estudiante_celular" autocomplete="off" onkeyup="var start = this.selectionStart; var end = this.selectionEnd; this.value = this.value.toUpperCase(); this.setSelectionRange(start, end);" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="estudiante_telefono" class="control-label">Teléfono</label>
                            <div class="form-group">
                                <input type="text" name="estudiante_telefono" value="<?php echo $this->input->post('estudiante_telefono'); ?>" class="form-control" id="estudiante_telefono" autocomplete="off" onkeyup="var start = this.selectionStart; var end = this.selectionEnd; this.value = this.value.toUpperCase(); this.setSelectionRange(start, end);" />
                            </div>
                        </div>
                        
                    </div>
                </div>
          	<div class="box-footer">
                    <button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Guardar
                    </button>
                    <a href="<?php echo site_url('estudiante'); ?>" class="btn btn-danger">
                        <i class="fa fa-times"></i> Cancelar</a>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>