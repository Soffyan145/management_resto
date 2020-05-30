<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Category</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?= base_url('a/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item">Category</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Category</h2>
            <p class="section-lead">
                manage your category employee here
            </p>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="<?php echo base_url('a/food_category/add') ?>" class="btn btn-primary mb-6">Add category</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                No
                                            </th>
                                            <th>name category</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($categories as $category) : ?>
                                            <tr>
                                                <td>
                                                    <?php echo $no++ ?>
                                                </td>
                                                <td><?php echo $category->nama_kategori ?></td>
                                                <td>
                                                    <a href="<?php echo base_url('admin/category_controller/update/') . $category->id_kategori ?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                                    <a href="<?php echo base_url('admin/category_controller/delete/') . $category->id_kategori ?>" class="btn btn-danger" onclick="javascript: return confirm('Are You sure to delete ?')"><i class="fas fa-trash"></i></a>
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