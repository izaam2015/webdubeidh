<script src="<?php echo base_url('resources/js/jquery-2.2.3.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('resources/js/postulante_add.js'); ?>" type="text/javascript"></script>
<input type="hidden" name="base_url" id="base_url" value="<?php echo base_url(); ?>" />
<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Añadir Postulante</h3>
            </div>
            <?php echo form_open('postulante/add'); ?>
          	<div class="box-body">
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <label for="estudiante_id" class="control-label">Estudiante</label>
                            <div class="form-group" style="display: flex">
                                <select class="form-control" name="estudiante_id" id="estudiante_id">
                                    <!--<option value="">select estudiante</option>-->
                                    <?php 
                                    foreach($all_estudiante as $estudiante)
                                    {
                                        $selected = ($estudiante['estudiante_id'] == $this->input->post('estudiante_id')) ? ' selected="selected"' : "";
                                        echo '<option value="'.$estudiante['estudiante_id'].'" '.$selected.'>'.$estudiante['estudiante_apellidos']." ".$estudiante['estudiante_nombre'].'</option>';
                                    } 
                                    ?>
                                </select>
                                <a data-toggle="modal" data-target="#modalestudiante" class="btn btn-facebook" title="Registrar Nuevo Estudiante">
                                <i class="fa fa-plus-circle"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="plaza_id" class="control-label">Beca(Plazas)</label>
                            <div class="form-group">
                                <select name="plaza_id" class="form-control">
                                    <!--<option value="">select plazas_beca</option>-->
                                    <?php 
                                    foreach($all_plazas_becas as $plazas_beca)
                                    {
                                        $selected = ($plazas_beca['plaza_id'] == $this->input->post('plaza_id')) ? ' selected="selected"' : "";
                                        echo '<option value="'.$plazas_beca['plaza_id'].'" '.$selected.'>'.$plazas_beca['convocatoria_descripcion']."(".$plazas_beca['plaza_cantidad'].") (".$plazas_beca['beca_nombre'].")".'</option>';
                                    } 
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="padres_tutores" class="control-label">Padres Tutores</label>
                            <div class="form-group">
                                <input type="text" name="padres_tutores" value="<?php echo $this->input->post('padres_tutores'); ?>" class="form-control" id="padres_tutores" autocomplete="off" onkeyup="var start = this.selectionStart; var end = this.selectionEnd; this.value = this.value.toUpperCase(); this.setSelectionRange(start, end);" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="postulante_observacion" class="control-label">Observación</label>
                            <div class="form-group">
                                <textarea name="postulante_observacion" class="form-control" id="postulante_observacion"><?php echo $this->input->post('postulante_observacion'); ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="postulante_correccion" class="control-label">Corrección</label>
                            <div class="form-group">
                                <textarea name="postulante_correccion" class="form-control" id="postulante_correccion"><?php echo $this->input->post('postulante_correccion'); ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
          	<div class="box-footer">
                    <button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Guardar
                    </button>
                    <a href="<?php echo site_url('postulante'); ?>" class="btn btn-danger">
                        <i class="fa fa-times"></i> Cancelar</a>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>
<!------------------------ INICIO modal para Registrar nuevo Estudiante ------------------->
<div class="modal fade" id="modalestudiante" tabindex="-1" role="dialog" aria-labelledby="modalestudiante">
    <div class="modal-dialog modal-lg" role="document">
        <br><br>
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
            </div>
            <div class="modal-body">
                <!------------------------------------------------------------------->
                <div class="col-md-6">
                    <label for="estudiante_nombre" class="control-label"><span class="text-danger">*</span>Nombres</label>
                    <div class="form-group">
                        <input type="text" name="estudiante_nombre" value="<?php echo $this->input->post('estudiante_nombre'); ?>" class="form-control" id="estudiante_nombre" required autocomplete="off" onkeyup="var start = this.selectionStart; var end = this.selectionEnd; this.value = this.value.toUpperCase(); this.setSelectionRange(start, end);" />
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
                <!------------------------------------------------------------------->
            </div>
            <div class="modal-footer aligncenter">
                <a onclick="registrarnuevoestudiante()" class="btn btn-success"><span class="fa fa-check"></span> Registrar </a>
                <a href="#" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span> No </a>
            </div>
        </div>
    </div>
</div>
<!------------------------ FIN modal para Registrar nuevo Estudiante ------------------->