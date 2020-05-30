<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data table</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?= base_url('a/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item">Table</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Data table</h2>
            <p class="section-lead">
                manage your table data here
            </p>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="<?php echo base_url('a/table/add') ?>" class="btn btn-primary mb-6">Add table</a>
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
                                            <th>Capacity</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($tables as $table) : ?>
                                            <tr>
                                                <td>
                                                    <?php echo $no++ ?>
                                                </td>
                                                <td><?php echo $table->nama_table ?></td>
                                                <td class="align-middle">
                                                    <?php echo $table->kapasitas ?>
                                                </td>
                                                <td><?php echo $table->deskripsi ?></td>
                                                <td><?php if ($table->status == "0") {
                                                        echo "<span class='badge badge-danger'>Not Allready</span>";
                                                    } else {
                                                        echo "<span class='badge badge-info'>Allready</span>";
                                                    } ?></td>
                                                <td>
                                                    <a href="<?php echo base_url('admin/table_controller/update/') . $table->id_table ?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                                    <a href="<?php echo base_url('admin/table_controller/delete/') . $table->id_table ?>" class="btn btn-danger" onclick="javascript: return confirm('Are You sure to delete ?')"><i class="fas fa-trash"></i></a>
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