<script src="<?php echo base_url('resources/js/jquery-2.2.3.min.js'); ?>" type="text/javascript"></script>
<script type="text/javascript">
function toggle(source) {
  checkboxes = document.getElementsByClassName('checkbox');
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}
</script>
<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Postulante: </h3>
                <div class="col-md-12 text-center">
                    <h3 class="box-title"><?php echo $postulante["estudiante_apellidos"]." ".$postulante["estudiante_nombre"]; ?></h3>
                </div><br>
              	<h3 class="box-title">A Beca: <?php echo $postulante["beca_nombre"]; ?></h3>
            </div>
            <?php echo form_open_multipart('postulante/cumplir/'.$postulante['postulante_id']); ?>
            <div class="box-body">
                <div class="row clearfix">
                    <div class="col-md-12 text-bold text-center"><u>REQUISITOS</u><br><br></div>
                    <?php if($con_convocatoria == "1"){ ?>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">
                                <input type="checkbox" id="select_all" onclick="toggle(this)" />Seleccionar Todos</label>
                            </div>
                        </div>
                        <?php
                        foreach($all_requisito as $requisito){
                            $checked = "";
                            /*foreach($los_requisitos as $requi){
                                if($requi["requisito_id"] == $requisito["requisito_id"]){
                                    $checked = "checked";
                                    break;
                                }
                            }*/
                            ?>
                        <div class="col-md-6 text-left">
                            <label class="normal" title="<?php //echo $requisito['requisisto_nombre']; ?>">
                                <u><input style="display: inline" class="checkbox" type="checkbox" name="requisito_id<?php echo $requisito['requisito_id']; ?>" id="requisito_id<?php echo $requisito['requisito_id']; ?>" value="<?php echo $requisito['requisito_id']; ?>" <?php echo $checked; ?> />
                                    <?php echo $requisito['requisito_nombre']; ?>
                                </u>
                            </label>
                            <div class="input-group">
                                <span class="input-group-addon" title="Observación">Obs.</span>
                                <input type="text" name="formulario_observacion<?php echo $requisito["requisito_id"]; ?>" value="<?php echo $this->input->post('formulario_observacion'); ?>" class="form-control" id="formulario_observacion<?php echo $requisito["requisito_id"]; ?>" />
                            </div>
                        </div>
                        <?php
                        }
                    }else{ ?>
                    <div class="col-md-12 text-center">
                    <?php 
                        echo "<span class='text-danger text-bold'>Por favor primero debe postularse a una beca.<span>";
                    ?>
                    </div>
                    <?php
                    }
                    ?>
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