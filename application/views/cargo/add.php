<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Añadir Cargo</h3>
            </div>
            <?php echo form_open('cargo/add'); ?>
          	<div class="box-body">
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <label for="cargo_nombre" class="control-label"><span class="text-danger">*</span>Nombre</label>
                            <div class="form-group">
                                <input type="text" name="cargo_nombre" value="<?php echo $this->input->post('cargo_nombre'); ?>" class="form-control" id="cargo_nombre" required autofocus autocomplete="off" onkeyup="var start = this.selectionStart; var end = this.selectionEnd; this.value = this.value.toUpperCase(); this.setSelectionRange(start, end);" />
                                <span class="text-danger"><?php echo form_error('cargo_nombre');?></span>
                            </div>
                        </div>
                    </div>
                </div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
                    <i class="fa fa-check"></i> Guardar
            	</button>
                <a href="<?php echo site_url('cargo'); ?>" class="btn btn-danger">
                    <i class="fa fa-times"></i> Cancelar</a>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>