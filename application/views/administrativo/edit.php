<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Modificar Administrativo</h3>
            </div>
            <?php echo form_open('administrativo/edit/'.$administrativo['admin_id']); ?>
                <div class="box-body">
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <label for="admin_nombre" class="control-label"><span class="text-danger">*</span>Nombres</label>
                            <div class="form-group">
                                <input type="text" name="admin_nombre" value="<?php echo ($this->input->post('admin_nombre') ? $this->input->post('admin_nombre') : $administrativo['admin_nombre']); ?>" class="form-control" id="admin_nombre" required autofocus autocomplete="off" onkeyup="var start = this.selectionStart; var end = this.selectionEnd; this.value = this.value.toUpperCase(); this.setSelectionRange(start, end);" />
                                <span class="text-danger"><?php echo form_error('admin_nombre');?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="admin_apellido" class="control-label"><span class="text-danger">*</span>Apellidos</label>
                            <div class="form-group">
                                <input type="text" name="admin_apellido" value="<?php echo ($this->input->post('admin_apellido') ? $this->input->post('admin_apellido') : $administrativo['admin_apellido']); ?>" class="form-control" id="admin_apellido" required autocomplete="off" onkeyup="var start = this.selectionStart; var end = this.selectionEnd; this.value = this.value.toUpperCase(); this.setSelectionRange(start, end);" />
                                <span class="text-danger"><?php echo form_error('admin_apellido');?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="admin_ci" class="control-label">C.I.</label>
                            <div class="form-group">
                                <input type="text" name="admin_ci" value="<?php echo ($this->input->post('admin_ci') ? $this->input->post('admin_ci') : $administrativo['admin_ci']); ?>" class="form-control" id="admin_ci" autocomplete="off" onkeyup="var start = this.selectionStart; var end = this.selectionEnd; this.value = this.value.toUpperCase(); this.setSelectionRange(start, end);" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="admin_email" class="control-label">Email</label>
                            <div class="form-group">
                                <input type="text" name="admin_email" value="<?php echo ($this->input->post('admin_email') ? $this->input->post('admin_email') : $administrativo['admin_email']); ?>" class="form-control" id="admin_email" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="admin_profesion" class="control-label">Profesión</label>
                            <div class="form-group">
                                <input type="text" name="admin_profesion" value="<?php echo ($this->input->post('admin_profesion') ? $this->input->post('admin_profesion') : $administrativo['admin_profesion']); ?>" class="form-control" id="admin_profesion" autocomplete="off" onkeyup="var start = this.selectionStart; var end = this.selectionEnd; this.value = this.value.toUpperCase(); this.setSelectionRange(start, end);" />
                            </div>
                        </div>
                        <!--<div class="col-md-6">
                            <label for="admin_cargo" class="control-label">Admin Cargo</label>
                            <div class="form-group">
                                <input type="text" name="admin_cargo" value="<?php //echo ($this->input->post('admin_cargo') ? $this->input->post('admin_cargo') : $administrativo['admin_cargo']); ?>" class="form-control" id="admin_cargo" />
                            </div>
                        </div>-->
                        <div class="col-md-6">
                            <label for="admin_telefono" class="control-label">Teléfono</label>
                            <div class="form-group">
                                <input type="text" name="admin_telefono" value="<?php echo ($this->input->post('admin_telefono') ? $this->input->post('admin_telefono') : $administrativo['admin_telefono']); ?>" class="form-control" id="admin_telefono" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="admin_celular" class="control-label">Celular</label>
                            <div class="form-group">
                                <input type="text" name="admin_celular" value="<?php echo ($this->input->post('admin_celular') ? $this->input->post('admin_celular') : $administrativo['admin_celular']); ?>" class="form-control" id="admin_celular" />
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
                                        $selected = ($cargo['cargo_id'] == $administrativo['cargo_id']) ? ' selected="selected"' : "";
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
                                        $selected = ($direccion_universitaria['direccionuniv_id'] == $administrativo['direccionuniv_id']) ? ' selected="selected"' : "";
                                        echo '<option value="'.$direccion_universitaria['direccionuniv_id'].'" '.$selected.'>'.$direccion_universitaria['direccionuniv_nombre'].'</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="estado_id" class="control-label">Estado</label>
                            <div class="form-group">
                                <select name="estado_id" class="form-control">
                                    <!--<option value="">select estado</option>-->
                                    <?php 
                                    foreach($all_estado as $estado)
                                    {
                                        $selected = ($estado['estado_id'] == $administrativo['estado_id']) ? ' selected="selected"' : "";
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
                    <a href="<?php echo site_url('administrativo'); ?>" class="btn btn-danger">
                        <i class="fa fa-times"></i> Cancelar</a>
                </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>