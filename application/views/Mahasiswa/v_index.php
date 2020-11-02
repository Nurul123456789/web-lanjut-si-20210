<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
  <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" />
</head>
<body class="container-md">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Tugas</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Tambah Data</a>
      </li>
    </ul>
    <a>Nurul Amin</a>

  </div>
</nav>
<div class="alert alert-primary" role="alert">
<h3 align="center">nurulamin</h3>
</div>
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Data mahasiswa</h5>
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">nomor</th>
      <th scope="col">nama</th>
      <th scope="col">nim</th>
      <th scope="col">alamat</th>
        <th scope="col">aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>nurul</td>
      <td>2102</td>
      <td>krsukun</td>
      <td><button type="button" class="btn btn-warning">edit</button>
      <button type="button" class="btn btn-danger">Delete</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>ari</td>
      <td>1324</td>
      <td>mtrm</td>
       <td><button type="button" class="btn btn-warning">edit</button>
      <button type="button" class="btn btn-danger">Delete</button></td>
    </tr>
   
  </tbody>
</table>
  </div>
</div>

</body>
</html>
		
