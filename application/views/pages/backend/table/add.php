<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?php echo base_url('a/table') ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Add table</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo base_url('a/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="<?php echo base_url('a/table') ?>">Table</a></div>
                <div class="breadcrumb-item">Add table</div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="section-body">
                    <h2 class="section-title">Create New Table</h2>
                    <p class="section-lead">
                        National Polithecnic Institute Of Cambodia
                    </p>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Form Add Table</h4>
                                </div>
                                <div class="card-body">

                                    <form method="post" action="<?php echo site_url('admin/table_controller/add_action') ?>">

                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Table</label>
                                            <div class="col-sm-12 col-md-7">
                                                <input type="text" class="form-control" name="nama_table" required>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kapasitas</label>
                                            <div class="col-sm-12 col-md-7">
                                                <input type="number" class="form-control" name="kapasitas" required>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                                            <div class="col-sm-12 col-md-7">
                                                <input type="text" class="form-control" name="deskripsi" required>
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
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                            <div class="col-sm-12 col-md-7">
                                                <button type="submit" class="btn btn-primary">Create Table</button>
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