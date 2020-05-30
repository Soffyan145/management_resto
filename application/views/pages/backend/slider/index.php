<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Slider</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?= base_url('a/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item">Slider</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Slider</h2>
            <p class="section-lead">
                manage your slide in your website here
            </p>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="<?php echo base_url('a/slider/add') ?>" class="btn btn-primary mb-6">Add slider</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                No
                                            </th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Img</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($slider as $data) : ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $data->title_slider ?></td>
                                                <td><?= $data->description ?></td>
                                                <td>
                                                    <img width="200px" src='<?= base_url() ?>assets/backend/img/upload_slider/<?= $data->img; ?>' height='150px'>
                                                </td>
                                                <td>
                                                    <a href="<?= base_url('a/slider/edit/') . $data->id_slider ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                    <a href="<?= base_url('a/slider/delete/') . $data->id_slider ?>" class="btn btn-danger" onclick="javascript: return confirm('Are You Sure To delete ?')"><i class="fas fa-trash"></i></a>
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