<html>
<head>
  <title>Data Mahasiswa</title>
  <!-- CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">



  <!-- JavaScript -->
  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

</head>
<body>
  <div class ="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">WebII</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= site_url('mahasiswa/tambah')?>"taindex="-1">Tambah data
        </a>
      </li>
        <a class="nav-link" href="<?= site_url('pengguna/index')?>">tabel pengguna</a>
      </li>
    </li>
       <a class="nav-link" href="<?= site_url('pengguna/logout')?>" tabindex="-1">logout</a>
     </li>
   </li>
    
    </ul>
     <div class="navbar-nav ml-auto">
      <a href="#" class="nav-link"><?php echo $this->session->userdata('nama_pengguna'); ?></a>
    </div>
    
  </div>

</nav>