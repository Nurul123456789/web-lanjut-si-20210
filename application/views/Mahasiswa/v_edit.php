<!DOCTYPE html>
<div class="alert alert-primary" role="alert" align="center">
  NURULAMIN/1901050025
  
</div>

<div class="container">
<div class="row">
  <div class='col-md-6'>

    <form action="<?= site_url('mahasiswa/simpan_data') ?>" method="post">
          
            <div class="form-group">

              <label>NIM</label>
              <input type="text" readonly value="<?=$data_Nim->Nim?>" name="nim" class="form-control">

            </div>
            <div class="form-group">
              <label>nama mahasiswa</label>
              <input type="text" value="<?=$data_Nim->nama?>" name="nama" class="form-control">
          </div>
          <div class="form-group">
              <label>alamat</label>
              <textarea class="form-control" name="alamat"> <?=$data_Nim->alamat?></textarea>
            </div>
            <div class="form-group">
              <button type="submit" name="submit" class="btn btn-primary">simpan data</button>
            <a href="<?=site_url('mahasiswa/index')?>" class="btn btn-primary"> batal </a>
                </div>
              </form>

            </div>

          </div>

    </div>
</body>
</html>
    
  
