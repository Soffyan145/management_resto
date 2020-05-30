<?php

class Category_controller extends CI_Controller
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
        $data['categories'] = $this->M_food_category->get_data('kategori')->result();
        $this->load->view('layout/backend/header');
        $this->load->view('layout/backend/topbar');
        $this->load->view('layout/backend/sidebar');
        $this->load->view('pages/backend/category/category', $data);
        $this->load->view('layout/backend/footer');
    }

    public function add()
    {
        $this->load->view('layout/backend/header');
        $this->load->view('layout/backend/topbar');
        $this->load->view('layout/backend/sidebar');
        $this->load->view('pages/backend/category/add');
        $this->load->view('layout/backend/footer');
    }

    public function add_action()
    {
        $nama_kategori          = $this->input->post('nama_kategori');
        $data = array(
            'nama_kategori'         => $nama_kategori
        );

        $this->M_food_category->insert_data($data, 'kategori');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Category</strong> Success To add.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>');
        redirect('a/food_category');
    }

    public function update($id)
    {
        $where = array('id_kategori' => $id);
        $data['categories'] = $this->db->query("SELECT * FROM kategori WHERE id_kategori='$id'")->result();

        $this->load->view('layout/backend/header');
        $this->load->view('layout/backend/topbar');
        $this->load->view('layout/backend/sidebar');
        $this->load->view('pages/backend/category/update', $data);
        $this->load->view('layout/backend/footer');
    }

    public function update_action()
    {
        $id_kategori                  = $this->input->post('id_kategori');
        $nama_kategori                = $this->input->post('nama_kategori');

        $data = array(
            'nama_kategori'           => $nama_kategori
        );

        $where = array('id_kategori' => $id_kategori);
        $this->M_food_category->update_data('kategori', $data, $where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
    <strong>Data Kategori</strong> Success To Update.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>');
        redirect('a/food_category');
    }

    public function delete($id)
    {
        $where = array('id_kategori' => $id);
        $this->M_food_category->delete_data($where, 'kategori');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Data Kategori</strong> Success To Delete.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>');
        redirect('a/food_category');
    }
}
