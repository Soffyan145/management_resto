<?php

class position_controller extends CI_Controller
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
        if ($this->session->userdata('role_id') === '1') {
            $data['positions'] = $this->M_position->get_data('position')->result();
            $this->load->view('layout/backend/header');
            $this->load->view('layout/backend/topbar');
            $this->load->view('layout/backend/sidebar');
            $this->load->view('pages/backend/position/position', $data);
            $this->load->view('layout/backend/footer');
        } else {
            redirect('admin/block_access');
        }
    }

    public function add()
    {
        if ($this->session->userdata('role_id') === '1') {
            $this->load->view('layout/backend/header');
            $this->load->view('layout/backend/topbar');
            $this->load->view('layout/backend/sidebar');
            $this->load->view('pages/backend/position/add');
            $this->load->view('layout/backend/footer');
        } else {
            redirect('admin/block_access');
        }
    }

    public function add_action()
    {
        $nama_position              = $this->input->post('nama_position');
        $salary                     = $this->input->post('salary');

        $data = array(
            'nama_position'         => $nama_position,
            'salary'                => $salary
        );

        $this->M_resto->insert_data($data, 'position');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Position</strong> Success To add.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>');
        redirect('a/position');
    }

    public function update($id)
    {
        if ($this->session->userdata('role_id') === '1') {
            $where = array('id_position' => $id);
            $data['position'] = $this->db->query("SELECT * FROM position WHERE id_position='$id'")->result();

            $this->load->view('layout/backend/header');
            $this->load->view('layout/backend/topbar');
            $this->load->view('layout/backend/sidebar');
            $this->load->view('pages/backend/position/update', $data);
            $this->load->view('layout/backend/footer');
        } else {
            redirect('a/block_access');
        }
    }

    public function update_action()
    {
        $id_position            = $this->input->post('id_position');
        $nama_position          = $this->input->post('nama_position');
        $salary                 = $this->input->post('salary');

        $data = array(
            'nama_position'           => $nama_position,
            'salary'                  => $salary
        );

        $where = array('id_position' => $id_position);
        $this->M_resto->update_data('position', $data, $where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
    <strong>Data Position</strong> Success To Update.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>');
        redirect('a/position');
    }

    public function delete($id)
    {
        $where = array('id_position' => $id);
        $this->M_resto->delete_data($where, 'position');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Data Position</strong> Success To Delete.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>');
        redirect('a/position');
    }
}
