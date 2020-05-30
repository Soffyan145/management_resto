<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?php echo base_url('admin/data_employee') ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Detail data employee</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo base_url('admin/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="<?php echo base_url('admin/data_employee') ?>">Data employee</a></div>
                <div class="breadcrumb-item">Detail employee</div>
            </div>
        </div>
    </section>
    <?php foreach ($details as $detail) : ?>

        <div class="card">
            <div class="card-body">

                <div class="row">
                    <div class="col-md-4"><br>
                        <img src="<?php echo base_url() . 'assets/backend/img/upload_employee/' . $detail->foto_employee ?>" widetailh="340px" height="400">
                    </div>
                    <div class="col-md-6">
                        <table class="table">
                            <tr>
                                <td>Nama Employee</td>
                                <td><?php echo $detail->nama_employee ?></td>
                            </tr>
                            <tr>
                                <td>Position</td>
                                <td><?php echo $detail->nama_position ?></td>
                            </tr>
                            <tr>
                                <td>Date salary</td>
                                <td><?php echo $detail->date_salary ?></td>
                            </tr>
                            <tr>
                                <td>Salary</td>
                                <td><?php echo number_format($detail->salary, 0, ',', '.') ?></td>
                            </tr>
                            <tr>
                                <td>Salary bonus</td>
                                <td><?php echo $detail->salary_bonus ?></td>
                            </tr>
                            <tr>
                                <td>Salary cuts</td>
                                <td><?php echo $detail->salary_cuts ?></td>
                            </tr>
                            <tr>
                                <td>Salary Total</td>
                                <td><?php echo $detail->total_salary ?></td>
                            </tr>
                        </table>
                        <a href="<?php echo base_url('a/salary/') ?>" class="btn btn-danger ml-4">Back</a>
                        <a href="<?php echo base_url('admin/salary_controller/update/' . $detail->id) ?>" class="btn btn-primary ml-3">Update</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>