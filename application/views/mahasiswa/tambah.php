<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
            <div class="card-header">
                Form Tambah Data Mahasiswa
            </div>
            <div class="card-body">
                <?php if( validation_errors() ) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors();?>
                </div>
                <?php endif;?>
                <form action="" method="post">
                <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama">
                <small class="form-text text-danger"><?= form_error('nama'); ?></small>
            </div>
                <div class="form-group">
                <label for="nrp">NRP</label>
                <input type="text" name="nrp" class="form-control" id="nrp">
                <small class="form-text text-danger"><?= form_error('nrp'); ?></small>
            </div>
                <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" id="email">
                <small class="form-text text-danger"><?= form_error('email'); ?></small>
            </div>
            <div class="form-group">
    <label for="jurusan">Jurusan</label>
    <select class="form-control" id="jurusan" name="jurusan">
      <option value="rekayasa perangkat lunak">rekayasa perangkat lunak</option>
      <option value="multimedia">multimedia</option>
      <option value="teknik komputer dan jaringan">teknik komputer dan jaringan</option>
      <option value="perhotelan">perhotelan</option>
      <option value="tata boga">tata boga</option>
    </select>
  </div>
  <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                </form>
            </div>
            </div>
           
        </div>
    </div>
</div>