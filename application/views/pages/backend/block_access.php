<?php
$this->load->model("M_resto");
$count_menu = $this->M_resto->count_menu_not_available();
$user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
?>

<div class="main-content">
    <section class="section">
        <div class="section-body">

            <body>
                <div id="app">
                    <section class="section">
                        <div class="container mt-5">
                            <div class="page-error">
                                <div class="page-inner">
                                    <h1>.404.</h1>
                                    <div class="page-description">
                                        Ohh Sorry, <?php echo $user['nama']; ?> your account don't have access this page
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
        </div>
    </section>
</div>