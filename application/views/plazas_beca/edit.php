<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Plazas Beca Edit</h3>
            </div>
			<?php echo form_open('plazas_beca/edit/'.$plazas_beca['plaza_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="beca_id" class="control-label">Beca</label>
						<div class="form-group">
							<select name="beca_id" class="form-control">
								<option value="">select beca</option>
								<?php 
								foreach($all_beca as $beca)
								{
									$selected = ($beca['beca_id'] == $plazas_beca['beca_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$beca['beca_id'].'" '.$selected.'>'.$beca['beca_id'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="convocatoria_id" class="control-label">Convocatorium</label>
						<div class="form-group">
							<select name="convocatoria_id" class="form-control">
								<option value="">select convocatorium</option>
								<?php 
								foreach($all_convocatoria as $convocatorium)
								{
									$selected = ($convocatorium['convocatoria_id'] == $plazas_beca['convocatoria_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$convocatorium['convocatoria_id'].'" '.$selected.'>'.$convocatorium['convocatoria_id'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="plaza_cantidad" class="control-label"><span class="text-danger">*</span>Plaza Cantidad</label>
						<div class="form-group">
							<input type="text" name="plaza_cantidad" value="<?php echo ($this->input->post('plaza_cantidad') ? $this->input->post('plaza_cantidad') : $plazas_beca['plaza_cantidad']); ?>" class="form-control" id="plaza_cantidad" />
							<span class="text-danger"><?php echo form_error('plaza_cantidad');?></span>
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