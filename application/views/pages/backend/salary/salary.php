<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data salary</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?= base_url('a/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item">salary</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Data salary</h2>
            <p class="section-lead">
                manage your salary data here
            </p>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="<?php echo base_url('a/salary/choose') ?>" class="btn btn-primary mb-6">Add salary</a>
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
                                            <th>position</th>
                                            <th>salary</th>
                                            <th>date</th>
                                            <th>total</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($salaryes as $salary) : ?>
                                            <tr>
                                                <td>
                                                    <?php echo $no++ ?>
                                                </td>
                                                <td><?php echo $salary->nama_employee ?></td>
                                                <td class="align-middle">
                                                    <?php echo $salary->nama_position ?>
                                                </td>
                                                <td><?php echo number_format($salary->salary, 0, ',', '.') ?></td>
                                                <td>
                                                    <?php echo $salary->date_salary ?>
                                                </td>
                                                <td><?php echo number_format($salary->total_salary, 0, ',', '.') ?></td>
                                                <td>
                                                    <a href="<?php echo base_url('admin/salary_controller/detail/') . $salary->id ?>" class="btn btn-success"><i class="fas fa-eye"></i></a>
                                                    <a href="<?php echo base_url('admin/salary_controller/update/') . $salary->id ?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                                    <a href="<?php echo base_url('admin/salary_controller/delete/') . $salary->id ?>" class="btn btn-danger" onclick="javascript: return confirm('Are You sure to delete ?')"><i class="fas fa-trash"></i></a>
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