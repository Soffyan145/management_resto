<?php
$this->load->model("M_resto");
$this->load->model("M_invoice");
$count_menu = $this->M_resto->count_menu_not_available();
$count_transaction = $this->M_invoice->count_transaction();
$user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
?>

<div id="app">
    <div class="main-wrapper">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                    <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                </ul>
            </form>
            <ul class="navbar-nav navbar-right">
                <?php
                if ($count_transaction > 0) { ?>
                    <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
                        <div class="dropdown-menu dropdown-list dropdown-menu-right">
                            <div class="dropdown-header">Notifications
                            </div>
                            <div class="dropdown-list-content dropdown-list-icons">
                                <a href="#" class="dropdown-item dropdown-item-unread">
                                    <div class="dropdown-item-icon bg-primary text-white">
                                        <i class="fas fa-code"></i>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        there is a transaction.
                                        <div class="time text-primary">2 Min Ago</div>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown-footer text-center">

                            </div>
                        </div>
                    </li>
                <?php } elseif ($count_transaction == 0) { ?>
                    <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg "><i class="far fa-bell"></i></a>
                        <div class="dropdown-menu dropdown-list dropdown-menu-right">
                            <div class="dropdown-header">Notifications
                            </div>
                            <div class="dropdown-list-content dropdown-list-icons">
                                <a href="#" class="dropdown-item dropdown-item-unread">
                                    <div class="dropdown-item-icon bg-primary text-white">
                                        <i class="fas fa-code"></i>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        no notifications
                                        <div class="time text-primary">2 Min Ago</div>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown-footer text-center">

                            </div>
                        </div>
                    </li>
                <?php }
                ?>
                <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <img alt="image" src="<?= base_url('assets/backend/') ?>img/avatar/avatar-1.png" class="rounded-circle mr-1">
                        <div class="d-sm-none d-lg-inline-block">Hi, <?php echo $user['nama']; ?></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="<?php echo base_url('a/profile'); ?>" class="dropdown-item has-icon">
                            <i class="far fa-user"></i> Profile
                        </a>
                        <a href="<?php echo base_url('a/setting'); ?>" class="dropdown-item has-icon">
                            <i class="fas fa-cog"></i> Settings
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="<?php echo base_url('a/logout'); ?>" class="dropdown-item has-icon text-danger">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>