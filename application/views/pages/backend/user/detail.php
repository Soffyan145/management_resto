<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?php echo base_url('a/user') ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Detail user</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo base_url('a/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="<?php echo base_url('a/user') ?>">Data user</a></div>
                <div class="breadcrumb-item">Detail user</div>
            </div>
        </div>
    </section>
    <?php foreach ($details as $detail) : ?>

        <div class="card">
            <div class="card-body">

                <div class="row">
                    <div class="col-md-4"><br>
                        <img src="<?php echo base_url() . 'assets/backend/img/upload_profile/' . $detail->img ?>" width="340px" height="400">
                    </div>
                    <div class="col-md-6">
                        <table class="table">
                            <tr>
                                <td>Nama</td>
                                <td><?php echo $detail->nama ?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><?php echo $detail->email ?></td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td><?php echo $detail->phone ?></td>
                            </tr>
                            <tr>
                                <td>Position</td>
                                <td><?php if ($detail->role_id == "1") {
                                        echo "<span class='badge badge-primary'>Super Admin</span>";
                                    } else {
                                        echo "<span class='badge badge-info'>Employee</span>";
                                    } ?></td>
                                <td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td><?php if ($detail->is_active == "0") {
                                        echo "<span class='badge badge-danger'>Not Allready</span>";
                                    } else {
                                        echo "<span class='badge badge-primary'>Allready</span>";
                                    } ?></td>
                                <td>
                            </tr>
                            <tr>
                                <td>Data Created</td>
                                <td><?= date('d F Y', $detail->date_created); ?></td>
                            </tr>
                        </table>
                        <a href="<?php echo base_url('a/user/') ?>" class="btn btn-danger ml-4">Back</a>
                        <a href="<?php echo base_url('admin/user_controller/update/' . $detail->id) ?>" class="btn btn-primary ml-3">Update</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>