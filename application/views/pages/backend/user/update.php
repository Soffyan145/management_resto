<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?php echo base_url('a/user') ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Edit user</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo base_url('a/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="<?php echo base_url('a/user') ?>">Data user</a></div>
                <div class="breadcrumb-item">Edit user</div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="section-body">
                    <h2 class="section-title">Form edit user</h2>
                    <p class="section-lead">
                        National Polithecnic Institute Of Cambodia
                    </p>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Form edit employee</h4>
                                </div>
                                <div class="card-body">

                                    <?php foreach ($users as $user) : ?>
                                        <form method="post" action="<?php echo site_url('admin/user_controller/update_action') ?>" enctype="multipart/form-data">

                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama user</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="hidden" class="form-control" name="id" value="<?php echo $user->id ?>">
                                                    <input type="text" class="form-control" name="nama" value="<?php echo $user->nama ?>" readonly>
                                                </div>
                                            </div>

                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email user</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="text" class="form-control" name="email" value="<?php echo $user->email ?>" readonly>
                                                </div>
                                            </div>

                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Phone</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="number" class="form-control" name="email" value="<?php echo $user->phone ?>" readonly>
                                                </div>
                                            </div>

                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Position</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <select class="form-control selectric" name="role_id" required>
                                                        <option value="<?php echo $user->role_id ?>"><?php if ($user->role_id == "1") {
                                                                                                            echo "Super Admin";
                                                                                                        } elseif ($user->role_id == "2") {
                                                                                                            echo "Employee";
                                                                                                        } else {
                                                                                                            echo "Customer";
                                                                                                        } ?>
                                                        </option>
                                                        <?php foreach ($user_rolls as $user_role) : ?>
                                                            <option value="<?php echo $user_role->id ?>"><?php echo $user_role->role ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3 control-label">Activated</label>
                                                <div class="custom-switches-stacked mt-4">
                                                    <label class="custom-switch">
                                                        <input type="radio" name="is_active" id="is_active" value="1" class="custom-switch-input" <?php if ($user->is_active == '1') : echo 'checked'; ?><?php endif; ?>>
                                                        <span class="custom-switch-indicator"></span>
                                                        <span class="custom-switch-description">Activated</span>
                                                    </label>
                                                    <label class="custom-switch">
                                                        <input type="radio" name="is_active" id="is_active" value="0" class="custom-switch-input" <?php if ($user->is_active == '0') : echo 'checked'; ?><?php endif; ?>>
                                                        <span class="custom-switch-indicator"></span>
                                                        <span class="custom-switch-description">Not Activated</span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Images</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <img src="<?php echo base_url() . 'assets/backend/img/upload_profile/' . $user->img ?>" width="120px" height="150">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                                <div class="col-sm-12 col-md-7">
                                                    <button type="submit" class="btn btn-primary">Update Employee</button>
                                                    <a href="<?php echo base_url('admin/data_employee/') ?>" class="btn btn-danger ml-2">Back</a>
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