<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <a href="<?php echo base_url('a/food') ?>">
                            <img src="<?php echo base_url('assets/backend') ?>/img/logo/food.png" height="60px" width="60px">
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total food</h4>
                        </div>
                        <div class="card-body">
                            <?php echo $count_menu ?>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <a href="<?php echo base_url('a/food_not_available') ?>">
                            <img src="<?php echo base_url('assets/backend') ?>/img/logo/food_not_availeble.png" height="70px" width="70px">
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Menu not available</h4>
                        </div>
                        <div class="card-body">
                            <?php echo $count_menu_not_available ?>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <a href="<?php echo base_url('a/transaction') ?>">
                            <img src="<?php echo base_url('assets/backend') ?>/img/logo/transaction.svg" height="60px" width="60px">
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Transaction</h4>
                        </div>
                        <div class="card-body">
                            1,201
                        </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <a href="<?php echo base_url('a/reservation') ?>">
                            <img src="<?php echo base_url('assets/backend') ?>/img/logo/reservation.svg" height="60px" width="60px">
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Reservation</h4>
                        </div>
                        <div class="card-body">
                            47
                        </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <a href="<?php echo base_url('a/food') ?>">
                            <img src="<?php echo base_url('assets/backend') ?>/img/logo/food.png" height="60px" width="60px">
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>User</h4>
                        </div>
                        <div class="card-body">
                            <?php echo $count_user ?>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <a href="<?php echo base_url('a/food') ?>">
                            <img src="<?php echo base_url('assets/backend') ?>/img/logo/food.png" height="60px" width="60px">
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Employee</h4>
                        </div>
                        <div class="card-body">
                            <?php echo $count_employee ?>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <a href="<?php echo base_url('a/food') ?>">
                            <img src="<?php echo base_url('assets/backend') ?>/img/logo/food.png" height="60px" width="60px">
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Table</h4>
                        </div>
                        <div class="card-body">
                            <?php echo $count_menu ?>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <a href="<?php echo base_url('a/food') ?>">
                            <img src="<?php echo base_url('assets/backend') ?>/img/logo/food.png" height="60px" width="60px">
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Slider</h4>
                        </div>
                        <div class="card-body">
                            <?php echo $count_slider ?>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>