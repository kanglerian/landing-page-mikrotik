<div class="container">
    <?php if($this->session->flashdata('flash' )):?>
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                List Peoples <strong>berhasil</strong> <?= $this->session->flashdata('flash');?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <?php endif;?>

    <div class="row mt-4">
        <div class="col-md-6">
            <a href="<?php echo base_url();?>People/tambah" class="btn btn-primary btn-xs">Add Data People</a>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <form class="form-inline my-2 my-lg-0" method="post" action="">
                <div class="input-group">
                    <input class="form-control mr-sm-2" type="text" name="keywordpeople" placeholder="Search people..">
                    <button class="btn btn-primary my-2 my-sm-0" type="submit">Cari</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>List Peoples</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>E-mail</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($people as $p) :?>
                            <tr>
                                <td><?= ++$start;?></td>
                                <td><?= $p['name'];?></td>
                                <td><?= $p['address'];?></td>
                                <td><?= $p['email'];?></td>
                                <td>
                                    <a href="<?= base_url();?>People/ubah/<?= $p['id'];?>"
                                        class="badge badge-warning float-left">edit</a>
                                    <a href="<?= base_url();?>People/hapus/<?= $p['id'];?>"
                                        class="badge badge-danger float-left"
                                        onclick="return confirm('yakin?');">remove</a>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                    <?php if (empty($people)) :?>
                    <div class="alert alert-danger" role="alert">
                        People not found.
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="card-text">
                        <?= $this->pagination->create_links(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>