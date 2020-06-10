<?php

class Shop_controller extends CI_Controller
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
        $data['menu'] = $this->M_resto->get_data('menu')->result();
        $this->load->view('layout/backend/header');
        $this->load->view('layout/backend/topbar');
        $this->load->view('layout/backend/sidebar');
        $this->load->view('pages/backend/shop/shop', $data);
        $this->load->view('layout/backend/footer');
    }
    public function add_cart($id)
    {
        $menu = $this->M_resto->find($id);

        $data = array(
            'id'        => $menu->id_menu,
            'qty'       => 1,
            'price'     => $menu->harga_jual,
            'purchase'    => $menu->harga_dasar,
            'name'      => $menu->nama_menu
        );

        $this->cart->insert($data);
        redirect('admin/shop_controller');
    }
    public function detail()
    {
        $data['kode'] = $this->M_invoice->get_kode();

        $this->load->view('layout/backend/header');
        $this->load->view('layout/backend/topbar');
        $this->load->view('layout/backend/sidebar');
        $this->load->view('pages/backend/shop/detail', $data);
        $this->load->view('layout/backend/footer');
    }
    public function add()
    {
        $data['menu'] = $this->M_resto->get_data('menu')->result();
        $is_processed = $this->M_invoice->index();
        if ($is_processed) {
            $this->cart->destroy();
            $this->load->view('layout/backend/header');
            $this->load->view('layout/backend/topbar');
            $this->load->view('layout/backend/sidebar');
            $this->load->view('pages/backend/shop/shop', $data);
            $this->load->view('layout/backend/footer');
        } else {
            echo "sorry gagal";
        }
    }
    public function cancel()
    {
        $this->cart->destroy();
        redirect('admin/shop_controller');
    }
    public function pay()
    {
        $id               = $this->input->post('id');
        $pay              = $this->input->post('pay');
        $total            = $this->input->post('total');
        $purchase         = $this->input->post('total_purchase');

        $data = array(
            'pay'             => $pay,
            'total'           => $total,
            'purchase'        => $purchase,
            'status'          => 0
        );

        $where = array('id' => $id);
        $this->M_invoice->update_data('transaction', $data, $where);
        redirect('a/transaction');
    }
}
