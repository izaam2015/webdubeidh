<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Convocatoria Requisito Add</h3>
            </div>
            <?php echo form_open('convocatoria_requisito/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="requisito_id" class="control-label">Requisito</label>
						<div class="form-group">
							<select name="requisito_id" class="form-control">
								<option value="">select requisito</option>
								<?php 
								foreach($all_requisito as $requisito)
								{
									$selected = ($requisito['requisito_id'] == $this->input->post('requisito_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$requisito['requisito_id'].'" '.$selected.'>'.$requisito['requisito_id'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="convocatoria_id" class="control-label">Convocatoria</label>
						<div class="form-group">
							<select name="convocatoria_id" class="form-control">
								<option value="">select convocatoria</option>
								<?php 
								foreach($all_convocatoria as $convocatoria)
								{
									$selected = ($convocatoria['convocatoria_id'] == $this->input->post('convocatoria_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$convocatoria['convocatoria_id'].'" '.$selected.'>'.$convocatoria['convocatoria_id'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="beca_id" class="control-label">Beca</label>
						<div class="form-group">
							<select name="beca_id" class="form-control">
								<option value="">select beca</option>
								<?php 
								foreach($all_beca as $beca)
								{
									$selected = ($beca['beca_id'] == $this->input->post('beca_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$beca['beca_id'].'" '.$selected.'>'.$beca['beca_id'].'</option>';
								} 
								?>
							</select>
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