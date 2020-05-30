<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?= base_url('a/slider') ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Edit slider</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?= base_url('a/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="<?= base_url('a/slider') ?>">slider</a></div>
                <div class="breadcrumb-item">Edit slider</div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="section-body">
                    <h2 class="section-title">Form edit slider</h2>
                    <p class="section-lead">
                        National Polithecnic Institute Of Cambodia
                    </p>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Form edit slider</h4>
                                </div>
                                <div class="card-body">

                                    <?php foreach ($slider as $data) : ?>
                                        <form method="post" action="<?= site_url('admin/slider_controller/edit_action') ?>" enctype="multipart/form-data">

                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="hidden" class="form-control" name="id_slider" value="<?= $data->id_slider ?>">
                                                    <input type="text" class="form-control" name="title_slider" value="<?= $data->title_slider ?>">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskription</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <textarea name="deskripsi" class="form-control"><?= $data->description ?></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Images</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <img src="" alt="">
                                                    <img src="<?= base_url() . 'assets/backend/img/upload_slider/' . $data->img ?>" width="600px" height="300">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Choose To Update Images</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="file" class="form-control" name="img">
                                                </div>
                                            </div>


                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                                <div class="col-sm-12 col-md-7">
                                                    <button type="submit" class="btn btn-primary">Update slider</button>
                                                    <a href="<?= base_url('admin/data_slider/') ?>" class="btn btn-danger ml-2">Back</a>
                                                </div>
                                            </div>
                                        </form>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>