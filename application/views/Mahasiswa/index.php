<div class="container">
    <?php if($this->session->flashdata('flash' )):?>
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash');?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <?php endif;?>

    <div class="row mt-4">
        <div class="col-md-6">
            <a href="<?php echo base_url();?>Mahasiswa/tambah" class="btn btn-primary btn-xs">Tambah Data Mahasiswa</a>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3>Daftar Mahasiswa</h3>
                    <?php if (empty($mahasiswa)) :?>
                    <div class="alert alert-danger" role="alert">
                        Data mahasiswa tidak ditemukan.
                    </div>
                    <?php endif;?>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php 
                                $no = 1;
                                foreach($mahasiswa as $mhs) :?>
                                <td><?= $no++?></td>
                                <td><?= $mhs['nama'];?>
                                    <a href="<?= base_url();?>Mahasiswa/hapus/<?= $mhs['id_mahasiswa'];?>"
                                        class="badge badge-danger float-right"
                                        onclick="return confirm('yakin?');">hapus</a>
                                    <a href="<?= base_url();?>Mahasiswa/ubah/<?= $mhs['id_mahasiswa'];?>"
                                        class="badge badge-warning float-right">ubah</a>
                                    <a href="<?= base_url();?>Mahasiswa/detail/<?= $mhs['id_mahasiswa'];?>"
                                        class="badge badge-primary float-right">detail</a>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>