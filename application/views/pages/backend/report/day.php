<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Report transaction per day</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo base_url('a/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item">Report transaction per day</div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <img src="<?php echo base_url('assets/backend') ?>/img/logo/transaction.svg" height="60px" width="60px">
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Jumlah transaction</h4>
                        </div>
                        <div class="card-body">
                            587
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <img src="<?php echo base_url('assets/backend') ?>/img/logo/transaction.svg" height="60px" width="60px">
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Pendapatan</h4>
                        </div>
                        <div class="card-body">
                            12.000.000
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <img src="<?php echo base_url('assets/backend') ?>/img/logo/reservation.svg" height="60px" width="60px">
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Keuntungan</h4>
                        </div>
                        <div class="card-body">
                            2.000.000
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <a href="<?php echo base_url('a/report/pdf') ?>" class="btn btn-danger mb-6">Print PDF</a> &nbsp &nbsp
                        <a href="<?php echo base_url('a/report/excel') ?>" class="btn btn-success mb-6">Print Excel</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            No
                                        </th>
                                        <th>Date</th>
                                        <th>Income</th>
                                        <th>Keuntungan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($report as $data) : ?>
                                        <tr>
                                            <td>
                                                <?= $no++ ?>
                                            </td>
                                            <td><?= $data->date ?></td>
                                            <td><?= number_format($data->total, 0, ',', '.') ?></td>
                                            <td><?= number_format($data->pay, 0, ',', '.') ?></td>
                                            <td>
                                                <a href="<?php echo base_url('admin/report_controller/detail/') . $data->id ?>" class="btn btn-success"><i class="fas fa-eye"></i></a>
                                                <a href="<?php echo base_url('admin/report_controller/delete/') . $data->id ?>" class="btn btn-danger" onclick="javascript: return confirm('Are You sure to delete ?')"><i class="fas fa-trash"></i></a>
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
    </section>
</div>