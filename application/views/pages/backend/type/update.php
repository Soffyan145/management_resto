<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?php echo base_url('a/food_type') ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Edit Type</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo base_url('a/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="<?php echo base_url('a/food_type') ?>">Type</a></div>
                <div class="breadcrumb-item">Edit type</div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="section-body">
                    <h2 class="section-title">Form Edit Type</h2>
                    <p class="section-lead">
                        National Polithecnic Institute Of Cambodia
                    </p>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Form Update Type</h4>
                                </div>
                                <div class="card-body">

                                    <?php foreach ($type as $tp) : ?>
                                        <form method="post" action="<?php echo site_url('admin/type_controller/update_action') ?>">

                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Type</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="hidden" class="form-control" name="id_type" value="<?php echo $tp->id_type ?>">
                                                    <input type="text" class="form-control" name="nama_type" value="<?php echo $tp->nama_type ?>" required>
                                                </div>
                                            </div>

                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                                <div class="col-sm-12 col-md-7">
                                                    <button type="submit" class="btn btn-primary">Update Type</button>
                                                    <a href="<?php echo base_url('a/food_type') ?>" class="btn btn-danger ml-2">Back</a>
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