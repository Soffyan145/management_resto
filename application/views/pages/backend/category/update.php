<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?php echo base_url('/food_category') ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Edit category</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo base_url('a/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="<?php echo base_url('a/food_category') ?>">Category</a></div>
                <div class="breadcrumb-item">Edit category</div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="section-body">
                    <h2 class="section-title">Form Edit Category</h2>
                    <p class="section-lead">
                        National Polithecnic Institute Of Cambodia
                    </p>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Form Update Kategori</h4>
                                </div>
                                <div class="card-body">

                                    <?php foreach ($categories as $category) : ?>
                                        <form method="post" action="<?php echo site_url('admin/category_controller/update_action') ?>">

                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Kategori</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="hidden" class="form-control" name="id_kategori" value="<?php echo $category->id_kategori ?>">
                                                    <input type="text" class="form-control" name="nama_kategori" value="<?php echo $category->nama_kategori ?>" required>
                                                </div>
                                            </div>

                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                                <div class="col-sm-12 col-md-7">
                                                    <button type="submit" class="btn btn-primary">Update Category</button>
                                                    <a href="<?php echo base_url('a/food_category') ?>" class="btn btn-danger ml-2">Back</a>
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