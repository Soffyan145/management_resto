<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?php echo base_url('a/setting') ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Social media</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?= base_url('a/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item">Social media</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Social media</h2>
            <p class="section-lead">
                manage your social media here
            </p>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="<?php echo base_url('a/social_media/add') ?>" class="btn btn-primary mb-6">Add menu</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                No
                                            </th>
                                            <th>Name</th>
                                            <th>Account</th>
                                            <th>Link</th>
                                            <th>Logo</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($social_media as $sosmed) : ?>
                                            <tr>
                                                <td>
                                                    <?php echo $no++ ?>
                                                </td>
                                                <td><?php echo $sosmed->nama_social_media ?></td>
                                                <td><?php echo $sosmed->account ?></td>
                                                <td><?php echo $sosmed->link ?></td>
                                                <td class="align-middle">
                                                    <img width="70px" height='70px' src='<?= base_url() ?>assets/backend/img/upload_social_media/<?= $sosmed->logo_social_media; ?>'>
                                                </td>
                                                <td>
                                                    <a href="<?php echo base_url('admin/sosmed_controller/update/') . $sosmed->id_social_media ?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                                    <a href="<?php echo base_url('admin/sosmed_controller/delete/') . $sosmed->id_social_media ?>" class="btn btn-danger" onclick="javascript: return confirm('Are You sure to delete ?')"><i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>