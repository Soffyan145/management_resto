<?php

class Menu_not_available extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['menus'] = $this->M_resto->get_data_menu_not_available()->result();
        $this->load->view('layout/backend/header');
        $this->load->view('layout/backend/topbar');
        $this->load->view('layout/backend/sidebar');
        $this->load->view('pages/backend/menu/menu_not_available', $data);
        $this->load->view('layout/backend/footer');
    }
}
