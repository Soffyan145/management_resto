<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Type</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?= base_url('a/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item">type</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">type</h2>
            <p class="section-lead">
                manage your food type here
            </p>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="<?php echo base_url('a/food_type/add') ?>" class="btn btn-primary mb-6">Add type</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                No
                                            </th>
                                            <th>name type</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($types as $type) : ?>
                                            <tr>
                                                <td>
                                                    <?php echo $no++ ?>
                                                </td>
                                                <td><?php echo $type->nama_type ?></td>
                                                <td>
                                                    <a href="<?php echo base_url('admin/type_controller/update/') . $type->id_type ?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                                    <a href="<?php echo base_url('admin/type_controller/delete/') . $type->id_type ?>" class="btn btn-danger" onclick="javascript: return confirm('Are You sure to delete ?')"><i class="fas fa-trash"></i></a>
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