    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <div class="section-header-back">
                    <a href="<?php echo base_url('admin/data_account') ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
                </div>
                <h1>Edit account</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="<?php echo base_url('a/dashboard') ?>">Dashboard</a></div>
                    <div class="breadcrumb-item active"><a href="<?php echo base_url('a/profile') ?>">Data account</a></div>
                    <div class="breadcrumb-item">Edit account</div>
                </div>
            </div>

            <div class="section-body">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <?php echo form_open_multipart('admin/account_controller/update_action'); ?>
                        <div class="card-header">
                            <h4>Edit Profile</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-12 col-12">
                                    <label>Full name</label>
                                    <input type="text" id="nama" class="form-control" name="nama" value="<?php echo $user['nama'] ?>">
                                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-7 col-12">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" value="<?php echo $user['email'] ?>" readonly>
                                </div>
                                <div class="form-group col-md-5 col-12">
                                    <label>Phone</label>
                                    <input type="tel" id="phone" class="form-control" name="phone" value="<?php echo $user['phone'] ?>">
                                    <?= form_error('phone', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="form-group col-md-12 col-12">
                                    <label>Image</label>
                                    <input type="file" class="form-control" name="img">
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