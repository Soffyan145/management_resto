<div class="main-content">
    <section class="section">
        <?php foreach ($profile as $pr) : ?>
            <div class="section-header">
                <div class="section-header-back">
                    <a href="<?php echo base_url('admin/setting') ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
                </div>
                <h1>Profile <?php echo $pr->nama_resto ?></h1>
            </div>

            <div class="section-body">
                <h2 class="section-title">Hey, <?php echo $pr->owner ?> !</h2>
                <p class="section-lead">
                    All information about Restaurant on this page.
                </p>

                <div class="row mt-sm-4">

                    <div class="card profile-widget">
                        <div class="profile-widget-header">
                            <img alt="image" src="<?php echo base_url('assets/backend') ?>/img/upload_resto/default.png" class="rounded-circle profile-widget-picture">
                            <div class="profile-widget-items">
                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">Menu</div>
                                    <div class="profile-widget-item-value"><?php echo $count_menu ?></div>
                                </div>
                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">Employee</div>
                                    <div class="profile-widget-item-value"><?php echo $count_employee ?></div>
                                </div>
                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">Followers</div>
                                    <div class="profile-widget-item-value">6,8K</div>
                                </div>
                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">Followers</div>
                                    <div class="profile-widget-item-value">6,8K</div>
                                </div>
                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">Following</div>
                                    <div class="profile-widget-item-value">2,1K</div>
                                </div>
                            </div>
                        </div>
                        <div class="profile-widget-description">
                            <div class="profile-widget-name"><?php echo $pr->owner ?><div class="text-muted d-inline font-weight-normal">
                                    <div class="slash"></div> Owner Restaurant
                                </div>
                            </div>
                            <?php echo $pr->about ?>
                        </div>
                        <div class="card-footer text-center">
                            <div class="font-weight-bold mb-2">Follow <?php echo $pr->nama_resto ?> on</div>
                            <?php foreach ($social_media as $sm) : ?>
                                <a href="<?php echo $sm->link ?>" class="btn btn-social-icon" target="blank_page">
                                    <img src="<?php echo base_url() . 'assets/backend/img/upload_social_media/' . $sm->logo_social_media ?>" width="40px" height="40">
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <form method="post" action="<?php echo site_url('admin/profile_controller/update_action') ?>" enctype="multipart/form-data" class="needs-validation" novalidate="">
                                <div class="card-header">
                                    <h4>Edit Profile</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-6 col-12">
                                            <label>Name Restaurant</label>
                                            <input type="hidden" class="form-control" value="<?php echo $pr->id_resto ?>" name="id_resto" required>
                                            <input type="text" class="form-control" value="<?php echo $pr->nama_resto ?>" name="nama_resto" required>
                                            <div class="invalid-feedback">
                                                Please fill in the first name
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 col-12">
                                            <label>Owner Name</label>
                                            <input type="text" class="form-control" value="<?php echo $pr->owner ?>" name="owner" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-12">
                                            <label>Bio</label>
                                            <textarea class="form-control summernote-simple" name="about"><?php echo $pr->about ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        <?php endforeach; ?>
    </section>
</div>