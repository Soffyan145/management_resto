<?php

class Invoice extends CI_Controller
{
    public function index()
    {
        $data['invoices'] = $this->db->query("SELECT * FROM transaction WHERE status = 1")->result();

        $this->load->view('layout/backend/header');
        $this->load->view('layout/backend/topbar');
        $this->load->view('layout/backend/sidebar');
        $this->load->view('pages/backend/invoice/index', $data);
        $this->load->view('layout/backend/footer');
    }
    public function detail($id_invoice)
    {
        $data['invoices'] = $this->M_invoice->get_id_invoice($id_invoice);
        $data['orders'] = $this->M_invoice->get_id_order($id_invoice);

        $this->load->view('layout/backend/header');
        $this->load->view('layout/backend/topbar');
        $this->load->view('layout/backend/sidebar');
        $this->load->view('pages/backend/invoice/detail', $data);
        $this->load->view('layout/backend/footer');
    }
}
