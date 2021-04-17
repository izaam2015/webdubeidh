<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Plazas Becas Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('plazas_beca/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Plaza Id</th>
						<th>Beca Id</th>
						<th>Convocatoria Id</th>
						<th>Plaza Cantidad</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($plazas_becas as $p){ ?>
                    <tr>
						<td><?php echo $p['plaza_id']; ?></td>
						<td><?php echo $p['beca_id']; ?></td>
						<td><?php echo $p['convocatoria_id']; ?></td>
						<td><?php echo $p['plaza_cantidad']; ?></td>
						<td>
                            <a href="<?php echo site_url('plazas_beca/edit/'.$p['plaza_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('plazas_beca/remove/'.$p['plaza_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
