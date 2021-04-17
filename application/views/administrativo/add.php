<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Añadir Administrativo</h3>
            </div>
            <?php echo form_open('administrativo/add'); ?>
          	<div class="box-body">
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <label for="admin_nombre" class="control-label"><span class="text-danger">*</span>Nombres</label>
                            <div class="form-group">
                                <input type="text" name="admin_nombre" value="<?php echo $this->input->post('admin_nombre'); ?>" class="form-control" id="admin_nombre" required autofocus autocomplete="off" onkeyup="var start = this.selectionStart; var end = this.selectionEnd; this.value = this.value.toUpperCase(); this.setSelectionRange(start, end);" />
                                <span class="text-danger"><?php echo form_error('admin_nombre');?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="admin_apellido" class="control-label"><span class="text-danger">*</span>Apellidos</label>
                            <div class="form-group">
                                <input type="text" name="admin_apellido" value="<?php echo $this->input->post('admin_apellido'); ?>" class="form-control" id="admin_apellido" autocomplete="off" onkeyup="var start = this.selectionStart; var end = this.selectionEnd; this.value = this.value.toUpperCase(); this.setSelectionRange(start, end);" />
                                <span class="text-danger"><?php echo form_error('admin_apellido');?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="admin_ci" class="control-label">C.I.</label>
                            <div class="form-group">
                                <input type="text" name="admin_ci" value="<?php echo $this->input->post('admin_ci'); ?>" class="form-control" id="admin_ci" autocomplete="off" onkeyup="var start = this.selectionStart; var end = this.selectionEnd; this.value = this.value.toUpperCase(); this.setSelectionRange(start, end);" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="admin_email" class="control-label">Email</label>
                            <div class="form-group">
                                <input type="email" name="admin_email" value="<?php echo $this->input->post('admin_email'); ?>" class="form-control" id="admin_email" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="admin_profesion" class="control-label">Profesión</label>
                            <div class="form-group">
                                <input type="text" name="admin_profesion" value="<?php echo $this->input->post('admin_profesion'); ?>" class="form-control" id="admin_profesion" autocomplete="off" onkeyup="var start = this.selectionStart; var end = this.selectionEnd; this.value = this.value.toUpperCase(); this.setSelectionRange(start, end);" />
                            </div>
                        </div>
                        <!--<div class="col-md-6">
                            <label for="admin_cargo" class="control-label">Admin Cargo</label>
                            <div class="form-group">
                                <input type="text" name="admin_cargo" value="<?php //echo $this->input->post('admin_cargo'); ?>" class="form-control" id="admin_cargo" />
                            </div>
                        </div>-->
                        <div class="col-md-3">
                            <label for="admin_telefono" class="control-label">Teléfono</label>
                            <div class="form-group">
                                <input type="text" name="admin_telefono" value="<?php echo $this->input->post('admin_telefono'); ?>" class="form-control" id="admin_telefono" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="admin_celular" class="control-label">Celular</label>
                            <div class="form-group">
                                <input type="text" name="admin_celular" value="<?php echo $this->input->post('admin_celular'); ?>" class="form-control" id="admin_celular" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="cargo_id" class="control-label">Cargo</label>
                            <div class="form-group">
                                <select name="cargo_id" class="form-control">
                                    <!--<option value="">select cargo</option>-->
                                    <?php 
                                    foreach($all_cargo as $cargo)
                                    {
                                        $selected = ($cargo['cargo_id'] == $this->input->post('cargo_id')) ? ' selected="selected"' : "";
                                        echo '<option value="'.$cargo['cargo_id'].'" '.$selected.'>'.$cargo['cargo_nombre'].'</option>';
                                    } 
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="direccionuniv_id" class="control-label">Direccion Universitaria</label>
                            <div class="form-group">
                                <select name="direccionuniv_id" class="form-control">
                                    <!--<option value="">select direccion_universitaria</option>-->
                                    <?php 
                                    foreach($all_direccion_universitaria as $direccion_universitaria)
                                    {
                                        $selected = ($direccion_universitaria['direccionuniv_id'] == $this->input->post('direccionuniv_id')) ? ' selected="selected"' : "";
                                        echo '<option value="'.$direccion_universitaria['direccionuniv_id'].'" '.$selected.'>'.$direccion_universitaria['direccionuniv_nombre'].'</option>';
                                    } 
                                    ?>
                                </select>
                            </div>
                        </div>
                        <!--<div class="col-md-6">
                            <label for="estado_id" class="control-label">Estado</label>
                            <div class="form-group">
                                <select name="estado_id" class="form-control">
                                    <option value="">select estado</option>
                                    <?php 
                                    /*foreach($all_estado as $estado)
                                    {
                                        $selected = ($estado['estado_id'] == $this->input->post('estado_id')) ? ' selected="selected"' : "";
                                        echo '<option value="'.$estado['estado_id'].'" '.$selected.'>'.$estado['estado_id'].'</option>';
                                    }*/
                                    ?>
                                </select>
                            </div>
                        </div>-->
                    </div>
                </div>
          	<div class="box-footer">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-check"></i> Guardar
                    </button>
                    <a href="<?php echo site_url('administrativo'); ?>" class="btn btn-danger">
                        <i class="fa fa-times"></i> Cancelar</a>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>