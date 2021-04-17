<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Formulario Autentificacion Edit</h3>
            </div>
			<?php echo form_open('formulario_autentificacion/edit/'.$formulario_autentificacion['formulario_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="convoreq_id" class="control-label">Convocatoria Requisito</label>
						<div class="form-group">
							<select name="convoreq_id" class="form-control">
								<option value="">select convocatoria_requisito</option>
								<?php 
								foreach($all_convocatoria_requisito as $convocatoria_requisito)
								{
									$selected = ($convocatoria_requisito['convoreq_id'] == $formulario_autentificacion['convoreq_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$convocatoria_requisito['convoreq_id'].'" '.$selected.'>'.$convocatoria_requisito['convoreq_id'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="postulante_id" class="control-label">Postulante</label>
						<div class="form-group">
							<select name="postulante_id" class="form-control">
								<option value="">select postulante</option>
								<?php 
								foreach($all_postulante as $postulante)
								{
									$selected = ($postulante['postulante_id'] == $formulario_autentificacion['postulante_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$postulante['postulante_id'].'" '.$selected.'>'.$postulante['postulante_id'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="estado_id" class="control-label">Estado</label>
						<div class="form-group">
							<select name="estado_id" class="form-control">
								<option value="">select estado</option>
								<?php 
								foreach($all_estado as $estado)
								{
									$selected = ($estado['estado_id'] == $formulario_autentificacion['estado_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$estado['estado_id'].'" '.$selected.'>'.$estado['estado_id'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="formulario_requisito" class="control-label">Formulario Requisito</label>
						<div class="form-group">
							<input type="text" name="formulario_requisito" value="<?php echo ($this->input->post('formulario_requisito') ? $this->input->post('formulario_requisito') : $formulario_autentificacion['formulario_requisito']); ?>" class="form-control" id="formulario_requisito" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="formulario_observacion" class="control-label">Formulario Observacion</label>
						<div class="form-group">
							<input type="text" name="formulario_observacion" value="<?php echo ($this->input->post('formulario_observacion') ? $this->input->post('formulario_observacion') : $formulario_autentificacion['formulario_observacion']); ?>" class="form-control" id="formulario_observacion" />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>