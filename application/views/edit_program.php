<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
</head>
<body>
<div class="navbar navbar-dark bg-dark">
	<div class="container">
		<a href="#" class="navbar-brand">CRUD APPLICATION</a>
	</div>
</div>
<div class="container">
	<form method="Post" name="createUser" action="<?php echo base_url().'index.php/program/edit';?>">
		<div class="row">
			
			<div class="col-md-9" >
				<h1> Add Program</h1>	
			<hr>
					<div clas="form-group">
						<label>Program Name</label>
						<input type="text" name="ProgramName" value="" class="form-control" required="">
					</div>
						<div clas="form-group">
							<label>Description</label>
							<textarea name="Description" value="" class="form-control"></textarea>
						</div>
					<div class="form-group">
						<button class="btn btn-primary">Create</button>
						<a href="<?php echo base_url().'index.php/program/index'?>" class="btn-secondary btn">Cancel</a>
					</div>
			</div>
		</div>
	</form>
</div>
</body>
</html>
