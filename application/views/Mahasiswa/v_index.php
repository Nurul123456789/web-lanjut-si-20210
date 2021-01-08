<!DOCTYPE html>
<div class="alert alert-primary" role="alert">
<h3 align="center">nurulamin/1901050025</h3>
</div>
<div class="card">
  <div class="card-body">
  <h5 clas="scard-title"> Data mahasiswa</h5>
    <div class="card-body">
      <table class="table">
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
    <?php $no = 1; ?>
    <?php foreach ($tbl_mahasiswa as $isi) { ?>

    <tr>
      <td class="text-center"><?= $no++ ?></td>
      <td><?= $isi->nim?></td>
      <td><?= $isi->nama?></td>
      <td><?= $isi->alamat?></td>
      <td class="text-center">

        <a href="<?=site_url('mahasiswa/hapus/'. $isi->nim)?>"
          onclick="return confirm('mau dihapus')"
          class="btn btn-danger btn-sm">Del</a>

          <a href="<?=site_url('mahasiswa/Edit/'. $isi->nim)?>"
          
          class="btn btn-info btn-sm">Edit</a>



        </tr>
      <?php } ?>
 </tbody>
 </table>
 </div>  
</div>

</body>
</html>
		
 