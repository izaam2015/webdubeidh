<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Añadir Gestión</h3>
            </div>
            <?php echo form_open('gestion/add'); ?>
            <div class="box-body">
                <div class="row clearfix">
                    <div class="col-md-6">
                        <label for="gestion_descripcion" class="control-label"><span class="text-danger">*</span>Descripción</label>
                        <div class="form-group">
                            <input type="text" name="gestion_descripcion" value="<?php echo $this->input->post('gestion_descripcion'); ?>" class="form-control" id="gestion_descripcion" autofocus autocomplete="off" onkeyup="var start = this.selectionStart; var end = this.selectionEnd; this.value = this.value.toUpperCase(); this.setSelectionRange(start, end);" />
                            <span class="text-danger"><?php echo form_error('gestion_descripcion');?></span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="gestion_fechainicio" class="control-label"><span class="text-danger">*</span>Fecha inicio</label>
                        <div class="form-group">
                            <input type="date" name="gestion_fechainicio" value="<?php echo ($this->input->post('gestion_fechainicio') ? $this->input->post('gestion_fechainicio') : date('Y-m-d')); ?>" class="form-control" id="gestion_fechainicio" />
                            <span class="text-danger"><?php echo form_error('gestion_fechainicio');?></span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="gestion_fechafin" class="control-label">Fecha fin</label>
                        <div class="form-group">
                            <input type="date" name="gestion_fechafin" value="<?php echo $this->input->post('gestion_fechafin'); ?>" class="form-control" id="gestion_fechafin" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-footer">
            	<button type="submit" class="btn btn-success">
                    <i class="fa fa-check"></i> Guardar
            	</button>
                <a href="<?php echo site_url('gestion'); ?>" class="btn btn-danger">
                    <i class="fa fa-times"></i> Cancelar</a>
            </div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>