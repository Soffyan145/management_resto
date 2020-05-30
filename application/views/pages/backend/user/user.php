<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data user</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?= base_url('a/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item">user</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Data user</h2>
            <p class="section-lead">
                manage your user data here
            </p>

            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                No
                                            </th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($users as $user) : ?>
                                            <tr>
                                                <td>
                                                    <?php echo $no++ ?>
                                                </td>
                                                <td><?php echo $user->nama ?></td>
                                                <td><?php echo $user->email ?></td>
                                                <td><?php if ($user->is_active == "0") {
                                                        echo "<span class='badge badge-danger'>Not Allready</span>";
                                                    } else {
                                                        echo "<span class='badge badge-info'>Allready</span>";
                                                    } ?></td>
                                                <td>
                                                    <a href="<?php echo base_url('admin/user_controller/detail/') . $user->id ?>" class="btn btn-success"><i class="fas fa-eye"></i></a>
                                                    <a href="<?php echo base_url('admin/user_controller/update/') . $user->id ?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                                    <a href="<?php echo base_url('admin/user_controller/delete/') . $user->id ?>" class="btn btn-danger" onclick="javascript: return confirm('Are You sure to delete ?')"><i class="fas fa-trash"></i></a>
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