<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?php echo base_url('a/food') ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Add menu</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo base_url('a/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="<?php echo base_url('a/data_menu') ?>">Menu</a></div>
                <div class="breadcrumb-item">Add menu</div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="section-body">
                    <h2 class="section-title">Create New Menu</h2>
                    <p class="section-lead">
                        National Polithecnic Institute Of Cambodia
                    </p>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Form Add Menu</h4>
                                </div>
                                <div class="card-body">

                                    <form method="post" action="<?php echo site_url('admin/menu_controller/add_action') ?>" enctype="multipart/form-data">

                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Menu</label>
                                            <div class="col-sm-12 col-md-7">
                                                <input type="text" class="form-control" name="nama_menu" required>
                                                <?php echo form_error('nama_menu', '<div class="text-small text-danger">', '</div>') ?>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                                            <div class="col-sm-12 col-md-7">
                                                <select class="form-control selectric" name="nama_kategori" required>
                                                    <option>-- Select your Kategori --</option>
                                                    <?php foreach ($categories as $category) : ?>
                                                        <option value="<?php echo $category->nama_kategori ?>"><?php echo $category->nama_kategori ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Type</label>
                                            <div class="col-sm-12 col-md-7">
                                                <select class="form-control selectric" name="nama_type" required>
                                                    <option>-- Select your Type --</option>
                                                    <?php foreach ($types as $type) : ?>
                                                        <option value="<?php echo $type->nama_type ?>"><?php echo $type->nama_type ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3 control-label">Status</label>
                                            <div class="custom-switches-stacked mt-4">
                                                <label class="custom-switch">
                                                    <input type="radio" name="status" value="1" class="custom-switch-input" checked required>
                                                    <span class="custom-switch-indicator"></span>
                                                    <span class="custom-switch-description">Available</span>
                                                </label>
                                                <label class="custom-switch">
                                                    <input type="radio" name="status" value="0" class="custom-switch-input">
                                                    <span class="custom-switch-indicator"></span>
                                                    <span class="custom-switch-description">Not Available</span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga Dasar</label>
                                            <div class="col-sm-12 col-md-7">
                                                <input type="number" class="form-control" name="harga_dasar" required>
                                                <?php echo form_error('harga_dasar', '<div class="text-small text-danger">', '</div>') ?>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" required>Harga Jual</label>
                                            <div class="col-sm-12 col-md-7">
                                                <input type="number" class="form-control" name="harga_jual">
                                                <?php echo form_error('harga_jual', '<div class="text-small text-danger">', '</div>') ?>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                                            <div class="col-sm-12 col-md-7">
                                                <input type="text" class="form-control" name="deskripsi">
                                                <?php echo form_error('deskripsi', '<div class="text-small text-danger">', '</div>') ?>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Discount</label>
                                            <div class="col-sm-12 col-md-7">
                                                <input type="number" class="form-control" name="discount">
                                                <?php echo form_error('discount', '<div class="text-small text-danger">', '</div>') ?>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Foto Menu</label>
                                            <div class="col-sm-12 col-md-7">
                                                <input type="file" class="form-control" name="foto_menu">
                                            </div>
                                        </div>


                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                            <div class="col-sm-12 col-md-7">
                                                <button type="submit" class="btn btn-primary" id="swal-2">Add</button>
                                                <button type="reset" class="btn btn-danger">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>