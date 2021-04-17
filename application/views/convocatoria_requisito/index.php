<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Convocatoria Requisito Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('convocatoria_requisito/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Convoreq Id</th>
						<th>Requisito Id</th>
						<th>Convocatoria Id</th>
						<th>Beca Id</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($convocatoria_requisito as $c){ ?>
                    <tr>
						<td><?php echo $c['convoreq_id']; ?></td>
						<td><?php echo $c['requisito_id']; ?></td>
						<td><?php echo $c['convocatoria_id']; ?></td>
						<td><?php echo $c['beca_id']; ?></td>
						<td>
                            <a href="<?php echo site_url('convocatoria_requisito/edit/'.$c['convoreq_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('convocatoria_requisito/remove/'.$c['convoreq_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
