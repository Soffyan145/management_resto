<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?php echo base_url('a/food') ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>List of menus</h1>
            <div class="section-header-breadcrumb">
                <a href="<?= base_url('admin/shop_controller/detail') ?>" class="btn btn-lg btn-icon icon-left btn-info"><?php
                                                                                                                        $cart = 'Your total shopping : ' . $this->cart->total_items() . ' item'
                                                                                                                        ?>
                    <?php echo $cart ?></a>
            </div>
        </div>
    </section>
    <div class="row text-center">
        <?php foreach ($menu as $data) : ?>

            <div class="card-body">
                <div class="card" style="width: 16rem;">
                    <img src="<?php echo base_url() . 'assets/backend/img/upload_menu/' . $data->foto_menu ?>" class="card-img-top" width="130px" height="160px">
                    <div class="card-body">
                        <h5 class="card-title"><?= $data->nama_menu ?></h5>
                        <h6 class="card-title"><?= $data->harga_jual ?></h6>
                        <p class="card-text"><?php echo $data->deskripsi ?></p>
                        <a href="<?= base_url() . 'admin/shop_controller/add_cart/', $data->id_menu ?>">
                            <button class="btn btn-primary">Add To Cart</button>
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>