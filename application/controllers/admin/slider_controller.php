<?php

class Slider_controller extends CI_Controller
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
            $data['slider'] = $this->M_slider->get_data('slider')->result();
            $this->load->view('layout/backend/header');
            $this->load->view('layout/backend/topbar');
            $this->load->view('layout/backend/sidebar');
            $this->load->view('pages/backend/slider/index', $data);
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
            $this->load->view('pages/backend/slider/add');
            $this->load->view('layout/backend/footer');
        } else {
            redirect('admin/block_access');
        }
    }
    public function add_action()
    {
        $title_slider              = $this->input->post('title_slider');
        $description                 = $this->input->post('description');
        $img                       = $_FILES['img'];
        if ($img = '') {
        } else {
            $config['upload_path']    = './assets/backend/img/upload_slider';
            $config['allowed_types']  = 'jpg|png|jpeg';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('img')) {
                $img = 'default.jpg';
            } else {
                $img = $this->upload->data('file_name');
            }
        }
        $data = array(
            'title_slider'            => $title_slider,
            'description'             => $description,
            'img'                     => $img
        );

        $this->M_resto->insert_data($data, 'slider');
        redirect('a/slider');
    }
    public function edit($id)
    {
        if ($this->session->userdata('role_id') === '1') {
            $where = array('id_slider' => $id);
            $data['slider'] = $this->db->query("SELECT * FROM slider WHERE id_slider='$id'")->result();

            $this->load->view('layout/backend/header');
            $this->load->view('layout/backend/topbar');
            $this->load->view('layout/backend/sidebar');
            $this->load->view('pages/backend/slider/update', $data);
            $this->load->view('layout/backend/footer');
        } else {
            redirect('a/block_access');
        }
    }
    public function edit_action()
    {
        $id_slider                = $this->input->post('id_slider');
        $title_slider              = $this->input->post('title_slider');
        $description                 = $this->input->post('description');
        $img                       = $_FILES['img'];
        if ($img = '') {
        } else {
            $config['upload_path']    = './assets/backend/img/upload_slider';
            $config['allowed_types']  = 'jpg|png|jpeg';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('img')) {
                $img = 'default.jpg';
            } else {
                $img = $this->upload->data('file_name');
            }
        }
        $data = array(
            'title_slider'            => $title_slider,
            'description'             => $description,
            'img'                     => $img
        );

        $where = array('id_slider' => $id_slider);
        $this->M_slider->update_data('slider', $data, $where);
        redirect('a/slider');
    }

    public function delete($id)
    {
        $where = array('id_slider' => $id);
        $this->M_resto->delete_data($where, 'slider');
        redirect('a/slider');
    }
}
