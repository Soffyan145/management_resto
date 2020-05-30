<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Position</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?= base_url('a/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item">Data position</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Position</h2>
            <p class="section-lead">
                manage your position employee here
            </p>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="<?php echo base_url('a/position/add') ?>" class="btn btn-primary mb-6">Add Position</a>
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
                                            <th>Position</th>
                                            <th>Salary</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($positions as $position) : ?>
                                            <tr>
                                                <td>
                                                    <?php echo $no++ ?>
                                                </td>
                                                <td><?php echo $position->nama_position ?></td>
                                                <td class="align-middle">
                                                    <?= $position->nama_position ?>
                                                </td>
                                                <td>
                                                    <?php echo number_format($position->salary, 0, ',', '.') ?>
                                                </td>
                                                <td>
                                                    <a href="<?php echo base_url('admin/position_controller/update/') . $position->id_position ?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                                    <a href="<?php echo base_url('admin/position_controller/delete/') . $position->id_position ?>" class="btn btn-danger" onclick="javascript: return confirm('Are You sure to delete ?')"><i class="fas fa-trash"></i></a>
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