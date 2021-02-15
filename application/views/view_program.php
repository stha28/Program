<!DOCTYPE html>
<html>
<head>
	<title>View</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
</head>
<body>
<div class="navbar navbar-dark bg-dark">
	<div class="container">
		<a href="#" class="navbar-brand">CRUD APPLICATION</a>
	</div>
</div>
<div class="container">
	<h3> View Users</h3>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-striped">
				<tr>
					<th>ID</th>
					<th>Program Name</th>
					<th>Description</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
				<?php if(!empty($ms_program)) { foreach($ms_program as $program) {?>
				<tr>
					<td><?php echo $program['ID']?></td>
					<td><?php echo $program['ProgramName']?></td>
					<td><?php echo $program['Description']?></td>
		  			<td>
						<a href="<?php echo base_url().'index.php/user/edit/'.$program['ID']?>" class="btn btn-primary">Edit</a>
					</td>
					<td>
						<a href="<?php echo base_url().'index.php/user/delete/'.$program['ID']?>" class="btn btn-danger">Delete</a>
					</td>
				</tr>
				<?php } } else {?>
				<tr>
					<td colspan="5">Records Not Found</td>
				</tr>
				<?php } ?>
			</table>
		</div>
	</div>

</div>
</body>
</html>
