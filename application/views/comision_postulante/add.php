<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Añadir Comisión Postulante</h3>
            </div>
            <?php echo form_open('comision_postulante/add'); ?>
          	<div class="box-body">
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <label for="postulante_id" class="control-label">Postulante</label>
                            <div class="form-group">
                                <select name="postulante_id" class="form-control">
                                    <!--<option value="">select postulante</option>-->
                                    <?php 
                                    foreach($all_postulante as $postulante)
                                    {
                                        $selected = ($postulante['postulante_id'] == $this->input->post('postulante_id')) ? ' selected="selected"' : "";
                                        echo '<option value="'.$postulante['postulante_id'].'" '.$selected.'>'.$postulante['estudiante_apellidos']." ".$postulante['estudiante_nombre'].'</option>';
                                    } 
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="comision_id" class="control-label">Comision</label>
                            <div class="form-group">
                                <select name="comision_id" class="form-control">
                                    <!--<option value="">select comision</option>-->
                                    <?php 
                                    foreach($all_comision as $comision)
                                    {
                                        $selected = ($comision['comision_id'] == $this->input->post('comision_id')) ? ' selected="selected"' : "";
                                        echo '<option value="'.$comision['comision_id'].'" '.$selected.'>'.$comision['comision_nombre'].'</option>';
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
                    <a href="<?php echo site_url('comision_postulante'); ?>" class="btn btn-danger">
                        <i class="fa fa-times"></i> Cancelar</a>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>