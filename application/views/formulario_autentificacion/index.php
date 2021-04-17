<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Formulario Autentificacion Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('formulario_autentificacion/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Formulario Id</th>
						<th>Convoreq Id</th>
						<th>Postulante Id</th>
						<th>Estado Id</th>
						<th>Formulario Requisito</th>
						<th>Formulario Observacion</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($formulario_autentificacion as $f){ ?>
                    <tr>
						<td><?php echo $f['formulario_id']; ?></td>
						<td><?php echo $f['convoreq_id']; ?></td>
						<td><?php echo $f['postulante_id']; ?></td>
						<td><?php echo $f['estado_id']; ?></td>
						<td><?php echo $f['formulario_requisito']; ?></td>
						<td><?php echo $f['formulario_observacion']; ?></td>
						<td>
                            <a href="<?php echo site_url('formulario_autentificacion/edit/'.$f['formulario_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('formulario_autentificacion/remove/'.$f['formulario_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
