<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?php echo base_url('a/sosmed') ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Add social media</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo base_url('a/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="<?php echo base_url('a/sosmed') ?>">Social media</a></div>
                <div class="breadcrumb-item">Add social media</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Restaurant</h2>
            <p class="section-lead">
                National Polithecnic Institute Of Cambodia
            </p>

            <div id="output-status"></div>
            <div class="row">
                <div class="col-md-12">
                    <form id="setting-form" method="post" action="<?php echo site_url('admin/sosmed_controller/add_action') ?>" enctype="multipart/form-data">
                        <div class="card" id="settings-card">
                            <div class="card-header">
                                <h4>General Settings</h4>
                            </div>
                            <div class="card-body">
                                <p class="text-muted">General settings such as, site title, site description, address and so on.</p>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name Social Media</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="nama_social_media" required>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name Accont</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="account" required>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Link Social Media</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="link" required>
                                    </div>
                                </div>

                                <div class="form-group row align-items-center">
                                    <label class="form-control-label col-sm-3 text-md-right">Site Logo</label>
                                    <div class="col-sm-6 col-md-7">
                                        <div class="custom-file">
                                            <input type="file" name="logo_social_media" class="custom-file-input" id="site-logo">
                                            <label class="custom-file-label">Choose File</label>
                                        </div>
                                        <div class="form-text text-muted">The image must "png" format.</div>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button type="submit" class="btn btn-primary">Add Social Media</button>
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>