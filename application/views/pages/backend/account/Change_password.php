    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <div class="section-header-back">
                    <a href="<?php echo base_url('admin/data_account') ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
                </div>
                <h1>Edit account</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="<?php echo base_url('admin/dashboard') ?>">Dashboard</a></div>
                    <div class="breadcrumb-item active"><a href="<?php echo base_url('admin/data_account') ?>">Data account</a></div>
                    <div class="breadcrumb-item">Edit account</div>
                </div>
            </div>

            <div class="section-body">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <?= $this->session->flashdata('message'); ?>
                        <?php echo form_open_multipart('admin/account_controller/change_password_action'); ?>
                        <div class="card-header">
                            <h4>Edit Profile</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-12 col-12">
                                    <label>Current Password</label>
                                    <input type="password" id="current_password" class="form-control" name="current_password">
                                    <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class=" row">
                                <div class="form-group col-md-6 col-12">
                                    <label>New Password</label>
                                    <input type="password" class="form-control" name="new_password1" id="new_password1">
                                    <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label>Repeat Password</label>
                                    <input type="password" id="new_password2" class="form-control" name="new_password2">
                                    <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>