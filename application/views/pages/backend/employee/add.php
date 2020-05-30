<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?php echo base_url('a/employee') ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Add employee</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo base_url('a/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="<?php echo base_url('a/employee') ?>">Data employee</a></div>
                <div class="breadcrumb-item">Add employee</div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="section-body">
                    <h2 class="section-title">Create New Employee</h2>
                    <p class="section-lead">
                        National Polithecnic Institute Of Cambodia
                    </p>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Form Add Employee</h4>
                                </div>
                                <div class="card-body">

                                    <form method="post" action="<?php echo site_url('admin/employee_controller/add_action') ?>" enctype="multipart/form-data">

                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Employee</label>
                                            <div class="col-sm-12 col-md-7">
                                                <input type="text" class="form-control" name="nama_employee" required>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Position</label>
                                            <div class="col-sm-12 col-md-7">
                                                <select class="form-control selectric" name="id_position" id="salary" required>
                                                    <option value="">-- Select Position --</option>
                                                    <?php foreach ($position as $ps) : ?>
                                                        <option value="<?php echo $ps->id_position ?>"><?php echo $ps->nama_position ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" required>Phone Number</label>
                                            <div class="col-sm-12 col-md-7">
                                                <input type="number" class="form-control" name="phone">
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" required>Email</label>
                                            <div class="col-sm-12 col-md-7">
                                                <input type="text" class="form-control" name="email">
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Address</label>
                                            <div class="col-sm-12 col-md-7">
                                                <input type="text" class="form-control" name="address" required>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Images</label>
                                            <div class="col-sm-12 col-md-7">
                                                <input type="file" class="form-control" name="foto_employee">
                                            </div>
                                        </div>


                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                            <div class="col-sm-12 col-md-7">
                                                <button type="submit" class="btn btn-primary">Add Employee</button>
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