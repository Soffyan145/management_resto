<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?php echo base_url('a/salary') ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Data salary</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?= base_url('a/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="<?php echo base_url('a/salary') ?>">Salary</a></div>
                <div class="breadcrumb-item">Choose employee</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Salary</h2>
            <p class="section-lead">
                manage your employee salary here
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
                                            <th>Position</th>
                                            <th>Salary</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($employees as $employee) : ?>
                                            <tr>
                                                <td>
                                                    <?php echo $no++ ?>
                                                </td>
                                                <td><?php echo $employee->nama_employee ?></td>
                                                <td class="align-middle">
                                                    <?php echo $employee->nama_position ?>
                                                </td>
                                                <td><?php echo number_format($employee->salary, 0, ',', '.') ?></td>
                                                <td>
                                                    <?php echo $employee->email ?>
                                                </td>
                                                <td>
                                                    <a href="<?php echo base_url('admin/salary_controller/add/') . $employee->id_employee ?>" class="btn btn-success"><i class="fas fa-money-bill-wave"></i></a>
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