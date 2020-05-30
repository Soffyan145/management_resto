<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo base_url('admin/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item">Profile</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Hi, <?php echo $user['nama']; ?></h2>
            <p class="section-lead">
                All information about your account on this page.
            </p>

            <?php echo $this->session->flashdata('message'); ?>

            <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card profile-widget">
                        <div class="profile-widget-header">
                            <img alt="image" src="<?php echo base_url('assets/backend/img/upload_profile/') . $user['img']; ?>" class="rounded-circle profile-widget-picture">
                            <div class="profile-widget-items">
                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">
                                        <h4><?php echo $user['nama'] ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="profile-widget-description">
                            <div class="profile-widget-name">
                                <div class="text-muted d-inline font-weight-normal">
                                    <?php if ($user['role_id'] == "1") {
                                        echo "Super Admin";
                                    } else {
                                        echo "Employee";
                                    } ?>
                                </div>
                            </div>
                            <?php echo $user['phone']; ?><br>
                            <?php echo $user['email']; ?>
                            <p>Member Since <?= date('d F Y', $user['date_created']); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>
</div>