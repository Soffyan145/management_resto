<?php

class Type_controller extends CI_Controller
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
        $data['types'] = $this->M_food_type->get_data('type')->result();
        $this->load->view('layout/backend/header');
        $this->load->view('layout/backend/topbar');
        $this->load->view('layout/backend/sidebar');
        $this->load->view('pages/backend/type/type', $data);
        $this->load->view('layout/backend/footer');
    }

    public function add()
    {
        $this->load->view('layout/backend/header');
        $this->load->view('layout/backend/topbar');
        $this->load->view('layout/backend/sidebar');
        $this->load->view('pages/backend/type/add');
        $this->load->view('layout/backend/footer');
    }

    public function add_action()
    {
        $nama_type              = $this->input->post('nama_type');

        $data = array(
            'nama_type'         => $nama_type
        );
        $this->M_food_type->insert_data($data, 'type');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Type</strong> Success To add.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>');
        redirect('a/food_type');
    }

    public function update($id)
    {
        $where = array('id_type' => $id);
        $data['type'] = $this->db->query("SELECT * FROM type WHERE id_type='$id'")->result();

        $this->load->view('layout/backend/header');
        $this->load->view('layout/backend/topbar');
        $this->load->view('layout/backend/sidebar');
        $this->load->view('pages/backend/type/update', $data);
        $this->load->view('layout/backend/footer');
    }

    public function update_action()
    {
        $id_type               = $this->input->post('id_type');
        $nama_type          = $this->input->post('nama_type');

        $data = array(
            'nama_type'           => $nama_type
        );

        $where = array('id_type' => $id_type);
        $this->M_food_type->update_data('type', $data, $where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
    <strong>Type</strong> Success To Update.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>');
        redirect('a/food_type');
    }

    public function delete($id)
    {
        $where = array('id_type' => $id);
        $this->M_food_type->delete_data($where, 'type');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Type</strong> Success To Delete.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>');
        redirect('a/food_type');
    }
}
