<div class="container">

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Form Tambah Data Mahasiswa</h5>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="">
                            <small class="form-text text-danger"><?= form_error('nama');?></small>
                        </div>
                        <div class="form-group">
                            <label for="nrp">NRP</label>
                            <input type="text" name="nrp" id="nrp" class="form-control" placeholder="">
                            <small class="form-text text-danger"><?= form_error('nrp');?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="">
                            <small class="form-text text-danger"><?= form_error('email');?></small>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select name="jurusan" id="jurusan" class="form-control">
                                <option selected>Pilih</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Manajemen Perkantoran">Manajemen Perkantoran</option>
                                <option value="Teknik Otomotif">Teknik Otomotif</option>
                            </select>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary btn-xs float-right">Tambah
                            data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>