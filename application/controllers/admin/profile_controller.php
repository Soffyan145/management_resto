<?php

class Profile_controller extends CI_Controller
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
        $data['count_menu']                     = $this->M_resto->count_menu();
        $data['count_employee']                 = $this->M_resto->count_employee();
        $data['count_menu_not_available']         = $this->M_resto->count_menu_not_available();
        $data['profile']                        = $this->M_profile->get_data('resto')->result();
        $data['social_media']                   = $this->M_profile->get_data('social_media')->result();

        $this->load->view('layout/backend/header');
        $this->load->view('layout/backend/topbar');
        $this->load->view('layout/backend/sidebar');
        $this->load->view('pages/backend/profile/profile', $data);
        $this->load->view('layout/backend/footer');
    }
    public function update_action()
    {
        $id_resto                = $this->input->post('id_resto');
        $nama_resto              = $this->input->post('nama_resto');
        $owner                   = $this->input->post('owner');
        $about                   = $this->input->post('about');
        $image_resto             = $_FILES['image_resto'];
        if ($image_resto) {
            $config['upload_path']        = './assets/img/upload_resto';
            $config['allowed_types']    = 'png';

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('image_resto')) {
                $image_resto = $this->upload->data('file_name');
                $this->db->set('image_resto', $image_resto);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $data = array(
            'nama_resto'             => $nama_resto,
            'owner'                  => $owner,
            'about'                  => $about
        );

        $where = array('id_resto' => $id_resto);
        $this->M_resto->update_data('resto', $data, $where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
    <strong>Data Resto</strong> Success To Update.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>');
        redirect('admin/setting');
    }
}
