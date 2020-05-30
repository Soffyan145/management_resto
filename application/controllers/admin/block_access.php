<?php
class Block_access extends CI_Controller
{
    public function index()
    {
        $this->load->view('layout/backend/header');
        $this->load->view('layout/backend/topbar');
        $this->load->view('layout/backend/sidebar');
        $this->load->view('pages/backend/block_access');
        $this->load->view('layout/backend/footer');
    }
}
