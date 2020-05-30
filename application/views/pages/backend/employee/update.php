<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?php echo base_url('a/employee') ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Update employee</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo base_url('a/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="<?php echo base_url('a/employee') ?>">Data employee</a></div>
                <div class="breadcrumb-item">Update employee</div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="section-body">
                    <h2 class="section-title">Form Edit Employee</h2>
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

                                    <?php foreach ($employee as $pl) : ?>
                                        <form method="post" action="<?php echo site_url('admin/employee_controller/update_action') ?>" enctype="multipart/form-data">

                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name Employee</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="hidden" class="form-control" name="id_employee" value="<?php echo $pl->id_employee ?>">
                                                    <input type="text" class="form-control" name="nama_employee" value="<?php echo $pl->nama_employee ?>" required>
                                                </div>
                                            </div>

                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Position</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <select class="form-control selectric" name="id_position" required>
                                                        <option value="<?php echo $pl->id_position ?>"><?php echo $pl->nama_position ?></option>
                                                        <?php foreach ($position as $pt) : ?>
                                                            <option value="<?php echo $pt->id_position ?>"><?php echo $pt->nama_position ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Phone</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="number" class="form-control" name="phone" value="<?php echo $pl->phone ?>" required>
                                                </div>
                                            </div>

                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="text" class="form-control" name="email" value="<?php echo $pl->email ?>">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Address</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="text" class="form-control" name="address" value="<?php echo $pl->address ?>">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Images</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <img src="" alt="">
                                                    <img src="<?php echo base_url() . 'assets/backend/img/upload_employee/' . $pl->foto_employee ?>" width="120px" height="150">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Choose To Update Images</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="file" class="form-control" name="foto_employee">
                                                </div>
                                            </div>


                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                                <div class="col-sm-12 col-md-7">
                                                    <button type="submit" class="btn btn-primary">Update Employee</button>
                                                    <a href="<?php echo base_url('a/employee/') ?>" class="btn btn-danger ml-2">Back</a>
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