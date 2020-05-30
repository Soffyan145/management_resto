<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data menu</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?= base_url('a/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item">Menu</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Data menu</h2>
            <p class="section-lead">
                manage your menu data here
            </p>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="<?php echo base_url('a/food/add') ?>" class="btn btn-primary mb-6">Add menu</a>
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
                                            <th>img</th>
                                            <th>category</th>
                                            <th>price</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($menus as $menu) : ?>
                                            <tr>
                                                <td>
                                                    <?php echo $no++ ?>
                                                </td>
                                                <td><?php echo $menu->nama_menu ?></td>
                                                <td class="align-middle">
                                                    <img width="80px" src='<?= base_url() ?>assets/backend/img/upload_menu/<?= $menu->foto_menu; ?>' height='80px'>
                                                </td>
                                                <td><?php echo $menu->nama_kategori ?></td>
                                                <td>
                                                    <?= $menu->harga_jual ?>
                                                </td>
                                                <td><?php if ($menu->status == "0") {
                                                        echo "<span class='badge badge-danger'>Not Allready</span>";
                                                    } else {
                                                        echo "<span class='badge badge-info'>Allready</span>";
                                                    } ?></td>
                                                <td>
                                                    <a href="<?php echo base_url('admin/menu_controller/detail/') . $menu->id_menu ?>" class="btn btn-success"><i class="fas fa-eye"></i></a>
                                                    <a href="<?php echo base_url('admin/menu_controller/update/') . $menu->id_menu ?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                                    <a href="<?php echo base_url('admin/menu_controller/delete/') . $menu->id_menu ?>" class="btn btn-danger" onclick="javascript: return confirm('Are You sure to delete ?')"><i class="fas fa-trash"></i></a>
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