<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Modificar Solicitud de Unidades</h3>
            </div>
            <?php echo form_open('solicitud_unidad/edit/'.$solicitud_unidad['solicitud_id']); ?>
                <div class="box-body">
                    <div class="row clearfix">
                         <div class="col-md-6">
                            <label for="solicitud_unidad" class="control-label">Solicitud Unidad</label>
                            <div class="form-group">
                                <input type="text" name="solicitud_unidad" value="<?php echo ($this->input->post('solicitud_unidad') ? $this->input->post('solicitud_unidad') : $solicitud_unidad['solicitud_unidad']); ?>" class="form-control" id="solicitud_unidad" required autofocus autocomplete="off" onkeyup="var start = this.selectionStart; var end = this.selectionEnd; this.value = this.value.toUpperCase(); this.setSelectionRange(start, end);" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="gestion_id" class="control-label">Gestión</label>
                            <div class="form-group">
                                <select name="gestion_id" class="form-control">
                                    <!--<option value="">select direccion_universitaria</option>-->
                                    <?php
                                    foreach($all_gestion as $gestion)
                                    {
                                        $selected = ($gestion['gestion_id'] == $solicitud_unidad['gestion_id']) ? ' selected="selected"' : "";
                                        echo '<option value="'.$gestion['gestion_id'].'" '.$selected.'>'.$gestion['gestion_descripcion'].'</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="unidad_id" class="control-label">Unidad</label>
                            <div class="form-group">
                                <select name="unidad_id" class="form-control">
                                    <!--<option value="">select direccion_universitaria</option>-->
                                    <?php
                                    foreach($all_unidad as $unidad)
                                    {
                                        $selected = ($unidad['unidad_id'] == $solicitud_unidad['unidad_id']) ? ' selected="selected"' : "";
                                        echo '<option value="'.$unidad['unidad_id'].'" '.$selected.'>'.$unidad['unidad_nombre'].'</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="solicitud_modalidad" class="control-label">Modalidad</label>
                            <div class="form-group">
                                <input type="text" name="solicitud_modalidad" value="<?php echo ($this->input->post('solicitud_modalidad') ? $this->input->post('solicitud_modalidad') : $solicitud_unidad['solicitud_modalidad']); ?>" class="form-control" id="solicitud_modalidad" autocomplete="off" onkeyup="var start = this.selectionStart; var end = this.selectionEnd; this.value = this.value.toUpperCase(); this.setSelectionRange(start, end);" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="solicitud_cantidad_becarios" class="control-label">Cantidad Becarios</label>
                            <div class="form-group">
                                <input type="text" name="solicitud_cantidad_becarios" value="<?php echo ($this->input->post('solicitud_cantidad_becarios') ? $this->input->post('solicitud_cantidad_becarios') : $solicitud_unidad['solicitud_cantidad_becarios']); ?>" class="form-control" id="solicitud_cantidad_becarios" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="solicitud_carreras_requiremiento" class="control-label">Requiremiento</label>
                            <div class="form-group">
                                <input type="text" name="solicitud_carreras_requiremiento" value="<?php echo ($this->input->post('solicitud_carreras_requiremiento') ? $this->input->post('solicitud_carreras_requiremiento') : $solicitud_unidad['solicitud_carreras_requiremiento']); ?>" class="form-control" id="solicitud_carreras_requiremiento" autocomplete="off" onkeyup="var start = this.selectionStart; var end = this.selectionEnd; this.value = this.value.toUpperCase(); this.setSelectionRange(start, end);" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="solicitud_actividad" class="control-label">Actividad</label>
                            <div class="form-group">
                                <textarea name="solicitud_actividad" class="form-control" id="solicitud_actividad"><?php echo ($this->input->post('solicitud_actividad') ? $this->input->post('solicitud_actividad') : $solicitud_unidad['solicitud_actividad']); ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-check"></i> Guardar
                    </button>
                    <a href="<?php echo site_url('solicitud_unidad'); ?>" class="btn btn-danger">
                        <i class="fa fa-times"></i> Cancelar</a>
	        </div>				
            <?php echo form_close(); ?>
        </div>
    </div>
</div>