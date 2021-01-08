<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0 maximum-scale-scale-1.0,m">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">   
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">  
		
	</title>Blog</title>
</head>
<body>
     <div class="container">
     	<h2>Data Blog</h2>
     	<table class="table table-bordered">
     		<thead>
     			<tr>
     				<th>No</th>
     				<th>judul</th>
     				<th>isi</th>
     				<th>penulis</th>
     				<th>Aksi</th>
     			</tr>
     			</thead>
     			</tbody>
     			  <?php
     			  $nomor =1;
     			  foreach ($isi as $istem){
     			  	?>
     			     <tr>
     			        <td><?php echo $nomor++; ?> </td>
     			        <td><?php echo $item->judul; ?></td>
     			        <td><?php echo $item->isi; ?></td>
     			        <td><?php echo $item->penulis; ?> </td>
     			        <td> </td>
     			      </tr>
     			      <?php
     			  }
     			  ?>
     			  </tbody>
     			</table>
     		</div>
     		<script src="<?php echo base_url ('assets/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>	  


</body>
</html>