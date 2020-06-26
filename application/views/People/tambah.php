<div class="container">

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Form Add People</h5>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="">
                            <small class="form-text text-danger"><?= form_error('name');?></small>
                        </div>
                        <div class="form-group">
                            <label for="Address">Address</label>
                            <textarea type="text" name="address" id="address" class="form-control"
                                placeholder=""></textarea>
                            <small class="form-text text-danger"><?= form_error('address');?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="">
                            <small class="form-text text-danger"><?= form_error('email');?></small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary btn-xs float-right">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>