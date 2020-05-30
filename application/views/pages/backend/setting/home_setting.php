<?php
$user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

if ($this->session->userdata('role_id') === '1') {  ?>
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Settings</h1>
            </div>

            <div class="section-body">
                <h2 class="section-title">Setting Of Restaurant</h2>
                <p class="section-lead">
                    National Polithecnic Institute Of Cambodia
                </p>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card card-large-icons">
                            <div class="card-icon bg-primary text-white">
                                <i class="fas fa-hashtag"></i>
                            </div>
                            <div class="card-body">
                                <h4>Social media</h4>
                                <p>Mengganti atau menambahkan akun sosial media restaurant</p>
                                <a href="<?php echo base_url('a/social_media') ?>" class="card-cta">Change Setting <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card card-large-icons">
                            <div class="card-icon bg-primary text-white">
                                <i class="fas fa-store-alt"></i>
                            </div>
                            <div class="card-body">
                                <h4>Restaurant</h4>
                                <p>Search engine optimization settings, such as meta tags and social media.</p>
                                <a href="<?php echo base_url('a/profile_resto') ?>" class="card-cta">Change Setting <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card card-large-icons">
                            <div class="card-icon bg-primary text-white">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="card-body">
                                <h4>Account</h4>
                                <p>Search engine optimization settings, such as meta tags and social media.</p>
                                <a href="<?php echo base_url('a/update_account') ?>" class="card-cta">Change Setting <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php } elseif ($this->session->userdata('role_id') === '2') { ?>
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Settings</h1>
            </div>

            <div class="section-body">
                <h2 class="section-title">Setting Of Restaurant</h2>
                <p class="section-lead">
                    National Polithecnic Institute Of Cambodia
                </p>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card card-large-icons">
                            <div class="card-icon bg-primary text-white">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="card-body">
                                <h4>Account</h4>
                                <p>Search engine optimization settings, such as meta tags and social media.</p>
                                <a href="<?php echo base_url('admin/data_account/edit') ?>" class="card-cta">Change Setting <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php }
?>