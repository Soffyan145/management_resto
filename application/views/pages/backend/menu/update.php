<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?php echo base_url('admin/data_menu') ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Edit menu</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo base_url('a/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="<?php echo base_url('a/food') ?>">Data menu</a></div>
                <div class="breadcrumb-item">Edit menu</div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="section-body">
                    <h2 class="section-title">Form Edit Menu</h2>
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

                                    <?php foreach ($menus as $menu) : ?>
                                        <?php echo form_open_multipart('admin/menu_controller/update_action'); ?>

                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Menu</label>
                                            <div class="col-sm-12 col-md-7">
                                                <input type="hidden" class="form-control" name="id_menu" value="<?php echo $menu->id_menu ?>">
                                                <input type="text" class="form-control" id="nama_menu" name="nama_menu" value="<?php echo $menu->nama_menu ?>" required>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                                            <div class="col-sm-12 col-md-7">
                                                <select class="form-control selectric" id="nama_kategori" name="nama_kategori" required>
                                                    <option value="<?php echo $menu->nama_kategori ?>"><?php echo $menu->nama_kategori ?></option>
                                                    <?php foreach ($kategori as $kt) : ?>
                                                        <option value="<?php echo $kt->nama_kategori ?>"><?php echo $kt->nama_kategori ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Type</label>
                                            <div class="col-sm-12 col-md-7">
                                                <select class="form-control selectric" id="nama_type" name="nama_type" required>
                                                    <option value="<?php echo $menu->nama_type ?>"><?php echo $menu->nama_type ?></option>
                                                    <?php foreach ($type as $tp) : ?>
                                                        <option value="<?php echo $tp->nama_type ?>"><?php echo $tp->nama_type ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3 control-label">Status</label>
                                            <div class="custom-switches-stacked mt-4">
                                                <label class="custom-switch">
                                                    <input type="radio" name="status" id="status" value="1" class="custom-switch-input" <?php if ($menu->status == '1') : echo 'checked'; ?><?php endif; ?>>
                                                    <span class="custom-switch-indicator"></span>
                                                    <span class="custom-switch-description">Available</span>
                                                </label>
                                                <label class="custom-switch">
                                                    <input type="radio" name="status" id="status" value="0" class="custom-switch-input" <?php if ($menu->status == '0') : echo 'checked'; ?><?php endif; ?>>
                                                    <span class="custom-switch-indicator"></span>
                                                    <span class="custom-switch-description">Not Available</span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga Dasar</label>
                                            <div class="col-sm-12 col-md-7">
                                                <input type="number" class="form-control" id="harga_dasar" name="harga_dasar" value="<?php echo $menu->harga_dasar ?>" required>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga Jual</label>
                                            <div class="col-sm-12 col-md-7">
                                                <input type="number" class="form-control" id="harga_jual" name="harga_jual" value="<?php echo $menu->harga_jual ?>" required>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                                            <div class="col-sm-12 col-md-7">
                                                <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?php echo $menu->deskripsi ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Discount</label>
                                            <div class="col-sm-12 col-md-7">
                                                <input type="number" class="form-control" id="discount" name="discount" value="<?php echo $menu->discount ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Images</label>
                                            <div class="col-sm-12 col-md-7">
                                                <img src="" alt="">
                                                <img src="<?php echo base_url() . 'assets/backend/img/upload_menu/' . $menu->foto_menu ?>" width="150px" height="150">
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Foto Menu</label>
                                            <div class="col-sm-12 col-md-7">
                                                <input type="file" class="form-control" id="foto_menu" name="foto_menu">
                                            </div>
                                        </div>


                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                            <div class="col-sm-12 col-md-7">
                                                <button type="submit" class="btn btn-primary">Update Menu</button>
                                                <a href="<?php echo base_url('a/food/') ?>" class="btn btn-danger ml-2">Back</a>
                                            </div>
                                        </div>
                                        </form>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>