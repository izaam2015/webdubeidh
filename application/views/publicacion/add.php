<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Añadir Publicación</h3>
            </div>
            <?php echo form_open_multipart('publicacion/add'); ?>
          	<div class="box-body">
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <label for="dube_id" class="control-label">Dube</label>
                            <div class="form-group">
                                <select name="dube_id" class="form-control">
                                    <!--<option value="">select dube</option>-->
                                    <?php 
                                    foreach($all_dube as $dube)
                                    {
                                        $selected = ($dube['dube_id'] == $this->input->post('dube_id')) ? ' selected="selected"' : "";
                                        echo '<option value="'.$dube['dube_id'].'" '.$selected.'>'.$dube['dube_id'].'</option>';
                                    } 
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="beca_id" class="control-label">Beca</label>
                            <div class="form-group">
                                <select name="beca_id" class="form-control">
                                    <!--<option value="">select beca</option>-->
                                    <?php 
                                    foreach($all_beca as $beca)
                                    {
                                        $selected = ($beca['beca_id'] == $this->input->post('beca_id')) ? ' selected="selected"' : "";
                                        echo '<option value="'.$beca['beca_id'].'" '.$selected.'>'.$beca['beca_nombre'].'</option>';
                                    } 
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="publicacion_fecha" class="control-label"><span class="text-danger">*</span>Fecha de Publicación</label>
                            <div class="form-group">
                                <input type="datetime" name="publicacion_fecha" value="<?php echo ($this->input->post('publicacion_fecha') ? $this->input->post('publicacion_fecha') : date('Y-m-d H:i:s')); ?>" class="form-control" id="publicacion_fecha" />
                                <span class="text-danger"><?php echo form_error('publicacion_fecha');?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="publicacion_autor" class="control-label">Autor</label>
                            <div class="form-group">
                                <input type="text" name="publicacion_autor" value="<?php echo $this->input->post('publicacion_autor'); ?>" class="form-control" id="publicacion_autor" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="publicacion_enlace" class="control-label">Enlace</label>
                            <div class="form-group">
                                <input type="text" name="publicacion_enlace" value="<?php echo $this->input->post('publicacion_enlace'); ?>" class="form-control" id="publicacion_enlace" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="publicacion_dcto" class="control-label">Documento</label>
                            <div class="form-group">
                                <input type="file" name="publicacion_dcto" value="<?php echo $this->input->post('publicacion_dcto'); ?>" class="form-control" id="publicacion_dcto" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="publicacion_texto" class="control-label">Texto</label>
                            <div class="form-group">
                                <textarea name="publicacion_texto" class="form-control" id="publicacion_texto"><?php echo $this->input->post('publicacion_texto'); ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
          	<div class="box-footer">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-check"></i> Guardar
                    </button>
                    <a href="<?php echo site_url('publicacion'); ?>" class="btn btn-danger">
                        <i class="fa fa-times"></i> Cancelar</a>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>