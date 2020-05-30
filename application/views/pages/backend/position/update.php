<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?php echo base_url('a/position') ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Edit position</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo base_url('a/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="<?php echo base_url('a/position') ?>">Data position</a></div>
                <div class="breadcrumb-item">Edit position</div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="section-body">
                    <h2 class="section-title">Form Edit Position</h2>
                    <p class="section-lead">
                        National Polithecnic Institute Of Cambodia
                    </p>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Form Update Position</h4>
                                </div>
                                <div class="card-body">

                                    <?php foreach ($position as $pt) : ?>

                                        <form method="post" action="<?php echo site_url('admin/position_controller/update_action') ?>">

                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Position</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="hidden" class="form-control" name="id_position" value="<?php echo $pt->id_position ?>">
                                                    <input type="text" class="form-control" name="nama_position" value="<?php echo $pt->nama_position ?>" required>
                                                </div>
                                            </div>

                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Salary</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="text" class="form-control" name="salary" value="<?php echo number_format($pt->salary, 0, ',', '.') ?>" required>
                                                </div>
                                            </div>

                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                                <div class="col-sm-12 col-md-7">
                                                    <button type="submit" class="btn btn-primary">Update Position</button>
                                                    <a href="<?php echo base_url('a/position/') ?>" class="btn btn-danger ml-2">Back</a>
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