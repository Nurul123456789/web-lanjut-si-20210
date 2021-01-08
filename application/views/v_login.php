<!DOCTYPE html>
<html>
<head>

	     <link rel="stylesheet" href="<?= base_url('assets/bootstrap.min.css'); ?>">
	     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

	<title>login</title>
</head>
<body>

	<div class="container mt-5">
		<div class="col-md-4">
			<div class="card">
				<div class="card-header">
					form login
				</div>
				<div class="card-body">

				<?php if ($this->session->flashdata('pesan')){ ?>
			        <div class="alert alert-dengera">
			        	<?php echo $this->session->flashdata('pesan'); ?>
			        </div>
			    <?php } ?>

					<form action="<?= site_url('login/proses')?>" method="post">

						<div class="form-group">
							<label for="">username</label>
							 <input type="text" name="txtusername"
							         class="form-control">

							     </div>

                      <div class="form-group">
							<label for="">password</label>
							 <input type="text" name="txtpassword"
							         class="form-control">


                         </div>
                         <input type="submit" class="btn btn-primary">

                     </form>

                 </div>
             </div>

         </div>
     </div>

</body>
</html>