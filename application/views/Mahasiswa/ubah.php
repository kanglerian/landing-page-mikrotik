<div class="container">

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Form Ubah Data Mahasiswa</h5>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id_mahasiswa" value="<?= $mahasiswa['id_mahasiswa'];?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control"
                                value="<?= $mahasiswa['nama'];?>">
                            <small class="form-text text-danger"><?= form_error('nama');?></small>
                        </div>
                        <div class="form-group">
                            <label for="nrp">NRP</label>
                            <input type="text" name="nrp" id="nrp" class="form-control"
                                value="<?= $mahasiswa['nrp'];?>">
                            <small class=" form-text text-danger"><?= form_error('nrp');?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" class="form-control"
                                value="<?= $mahasiswa['email'];?>">
                            <small class=" form-text text-danger"><?= form_error('email');?></small>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select name="jurusan" id="jurusan" class="form-control">
                                <?php foreach($jurusan as $j):?>
                                <?php if ($j == $mahasiswa['jurusan']):?>
                                <option value="<?= $j;?>" selected><?= $j;?></option>
                                </option>
                                <?php else :?>
                                <option value="<?= $j;?>"><?= $j;?></option>
                                </option>
                                <?php endif;?>

                                <?php endforeach;?>
                            </select>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary btn-xs float-right">Ubah
                            data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>