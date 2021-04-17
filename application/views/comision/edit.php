<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">ModificarComisión</h3>
            </div>
            <?php echo form_open('comision/edit/'.$comision['comision_id']); ?>
                <div class="box-body">
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <label for="comision_nombre" class="control-label"><span class="text-danger">*</span>Comision Nombre</label>
                            <div class="form-group">
                                <input type="text" name="comision_nombre" value="<?php echo ($this->input->post('comision_nombre') ? $this->input->post('comision_nombre') : $comision['comision_nombre']); ?>" class="form-control" id="comision_nombre" />
                                <span class="text-danger"><?php echo form_error('comision_nombre');?></span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="gestion_id" class="control-label">Gestion</label>
                            <div class="form-group">
                                <select name="gestion_id" class="form-control">
                                    <!--<option value="">select gestion</option>-->
                                    <?php 
                                    foreach($all_gestion as $gestion)
                                    {
                                        $selected = ($gestion['gestion_id'] == $comision['gestion_id']) ? ' selected="selected"' : "";
                                        echo '<option value="'.$gestion['gestion_id'].'" '.$selected.'>'.$gestion['gestion_descripcion'].'</option>';
                                    } 
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="admin_id" class="control-label">Administrativo</label>
                            <div class="form-group">
                                <select name="admin_id" class="form-control">
                                    <!--<option value="">select administrativo</option>-->
                                    <?php 
                                    foreach($all_administrativo as $administrativo)
                                    {
                                        $selected = ($administrativo['admin_id'] == $comision['admin_id']) ? ' selected="selected"' : "";
                                        echo '<option value="'.$administrativo['admin_id'].'" '.$selected.'>'.$administrativo['admin_nombre']." ".$administrativo['admin_apellido'].'</option>';
                                    } 
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="comision_descripcion" class="control-label">Descripción</label>
                            <div class="form-group">
                                <input type="text" name="comision_descripcion" value="<?php echo ($this->input->post('comision_descripcion') ? $this->input->post('comision_descripcion') : $comision['comision_descripcion']); ?>" class="form-control" id="comision_descripcion" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="comision_fechacreacion" class="control-label">Fecha de Creacion</label>
                            <div class="form-group">
                                <input type="date" name="comision_fechacreacion" value="<?php echo ($this->input->post('comision_fechacreacion') ? $this->input->post('comision_fechacreacion') : $comision['comision_fechacreacion']); ?>" class="form-control" id="comision_fechacreacion" />
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
                                        $selected = ($estado['estado_id'] == $comision['estado_id']) ? ' selected="selected"' : "";
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
                    <a href="<?php echo site_url('comision'); ?>" class="btn btn-danger">
                    <i class="fa fa-times"></i> Cancelar</a>
	        </div>				
            <?php echo form_close(); ?>
        </div>
    </div>
</div>