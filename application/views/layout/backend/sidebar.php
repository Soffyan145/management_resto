<?php
$this->load->model("M_resto");
$count_menu = $this->M_resto->count_menu_not_available();
$user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

if ($this->session->userdata('role_id') === '1') {  ?>
    <div class="main-sidebar">
        <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <a href="<?= base_url('a/dashboard') ?>">NPIC Restaurant</a>
            </div>
            <div class="sidebar-brand sidebar-brand-sm">
                <a href="<?= base_url('a/dashboard') ?>">Resto</a>
            </div>
            <ul class="sidebar-menu">
                <li class="menu-header">DASHBOARD</li>
                <li><a class="nav-link" href="<?php echo base_url('a/dashboard') ?>"><i class="fas fa-server"></i> <span>Dashboard</span></a></li>
                <li><a class="nav-link" href="<?php echo base_url('a/slider') ?>"><i class="fas fa-sliders-h"></i> <span>Slider</span></a></li>
                <li><a class="nav-link" href="blank.html"><i class="far fa-clipboard"></i> <span>Reservation</span></a></li>
                <li><a class="nav-link" href="<?php echo base_url('a/transaction') ?>"><i class="fas fa-check-double"></i> <span>Transaction</span></a></li>
                <li><a class="nav-link" href="<?php echo base_url('a/shop') ?>"><i class="fas fa-cart-plus"></i> <span>Shop</span></a></li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Report</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="<?php echo base_url('a/report/day') ?>">A day</a></li>
                        <li><a class="nav-link" href="<?php echo base_url('a/report/week') ?>">A week</a></li>
                        <li><a class="nav-link" href="<?php echo base_url('a/report/month') ?>">A month</a></li>
                        <li><a class="nav-link" href="<?php echo base_url('a/report/year') ?>">A year</a></li>
                        <li><a class="nav-link" href="<?php echo base_url('a/report/all') ?>">All transaction</a></li>
                    </ul>
                </li>
                <li class="menu-header">Food</li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Food Menu</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="<?php echo base_url('a/food') ?>">Menu Item</a></li>
                        <li><a class="nav-link" href="<?php echo base_url('a/food_category') ?>">Category</a></li>
                        <li><a class="nav-link" href="<?php echo base_url('a/food_type') ?>">Type</a></li>
                        <li><a class="nav-link" href="<?php echo base_url('a/food_not_available') ?>">Menu Not Available</a></li>
                    </ul>
                </li>

                <li class="menu-header">Employee</li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user-friends"></i><span>Employee</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="<?php echo base_url('a/employee') ?>">Data Employee</a></li>
                        <li><a class="nav-link" href="<?php echo base_url('a/salary') ?>">Salary</a></li>
                        <li><a class="nav-link" href="<?php echo base_url('a/position') ?>">Position</a></li>
                    </ul>
                </li>

                <li class="menu-header">Profile</li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-id-card"></i><span>Profile</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="<?php echo base_url('a/profile') ?>">Profile</a></li>
                        <li><a class="nav-link" href="<?php echo base_url('a/update_account') ?>">Edit profile</a></li>
                        <li><a class="nav-link" href="<?php echo base_url('a/change_password') ?>">Change password</a></li>
                    </ul>
                </li>

                <li class="menu-header">Restaurant</li>

                <li><a class="nav-link" href="<?php echo base_url('a/user') ?>"><i class="fas fa-users"></i> <span>Users</span></a></li>
                <li><a class="nav-link" href="<?php echo base_url('a/table') ?>"><i class="fas fa-couch"></i> <span>Tables</span></a></li>
                <li><a class="nav-link" href="<?php echo base_url('a/setting') ?>"><i class="fas fa-tools"></i> <span>Settings</span></a></li>
            </ul>

            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                    <i class="fas fa-rocket"></i> Documentation
                </a>
            </div>
        </aside>
    </div>

<?php } elseif ($this->session->userdata('role_id') === '2') { ?>

    <div class="main-sidebar">
        <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <a href="index.html">Restaurant</a>
            </div>
            <div class="sidebar-brand sidebar-brand-sm">
                <a href="index.html">Resto</a>
            </div>
            <ul class="sidebar-menu">
                <li class="menu-header">DASHBOARD</li>
                <li><a class="nav-link" href="<?php echo base_url('a/dashboard') ?>"><i class="fas fa-server"></i> <span>Dashboard</span></a></li>
                <li><a class="nav-link" href="blank.html"><i class="far fa-clipboard"></i> <span>Reservation</span></a></li>
                <li class="menu-header">Food</li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Food Menu</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="<?php echo base_url('a/food') ?>">Menu Item</a></li>
                        <li><a class="nav-link" href="<?php echo base_url('a/food_category') ?>">Category</a></li>
                        <li><a class="nav-link" href="<?php echo base_url('a/food_type') ?>">Type</a></li>
                        <li><a class="nav-link" href="<?php echo base_url('a/food_not_available') ?>">Menu Not Available</a></li>
                    </ul>
                </li>

                <li class="menu-header">Restaurant</li>

                <li><a class="nav-link" href="<?php echo base_url('a/profile') ?>"><i class="fas fa-id-card"></i> <span>Profile</span></a></li>
                <li><a class="nav-link" href="<?php echo base_url('a/table') ?>"><i class="fas fa-couch"></i> <span>Table</span></a></li>
                <li><a class="nav-link" href="<?php echo base_url('a/setting') ?>"><i class="fas fa-tools"></i> <span>Settings</span></a></li>
            </ul>

            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                    <i class="fas fa-rocket"></i> Documentation
                </a>
            </div>
        </aside>
    </div>

<?php } elseif ($this->session->userdata('role_id') === '3') { ?>

    <div class="main-sidebar">
        <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <a href="index.html">Restaurant</a>
            </div>
            <div class="sidebar-brand sidebar-brand-sm">
                <a href="index.html">Resto</a>
            </div>
            <ul class="sidebar-menu">
                <li class="menu-header">DASHBOARD</li>
                <li><a class="nav-link" href="<?= base_url('a/dashboard') ?>"><i class="fas fa-server"></i> <span>Dashboard</span></a></li>
                <li><a class="nav-link" href="<?= base_url('a/shop') ?>"><i class="far fa-clipboard"></i> <span>Order</span></a></li>
        </aside>
    </div>
<?php }
?>