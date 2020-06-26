<div class="container">

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Form Add People</h5>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control"
                                value="<?= $people['name'];?>">
                            <small class="form-text text-danger"><?= form_error('name');?></small>
                        </div>
                        <div class="form-group">
                            <label for="Address">Address</label>
                            <textarea type="text" name="address" id="address" class="form-control"
                                value="<?= $people['address'];?>"><?= $people['address'];?></textarea>
                            <small class="form-text text-danger"><?= form_error('address');?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" class="form-control" placeholder=""
                                value="<?= $people['email'];?>">
                            <small class="form-text text-danger"><?= form_error('email');?></small>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary btn-xs float-right">Save Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>