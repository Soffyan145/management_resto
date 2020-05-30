<?php

class Account_controller extends CI_Controller
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
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('layout/backend/header');
        $this->load->view('layout/backend/topbar');
        $this->load->view('layout/backend/sidebar', $data);
        $this->load->view('pages/backend/account/account', $data);
        $this->load->view('layout/backend/footer');
    }

    public function update()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('layout/backend/header');
        $this->load->view('layout/backend/topbar');
        $this->load->view('layout/backend/sidebar', $data);
        $this->load->view('pages/backend/account/update_account', $data);
        $this->load->view('layout/backend/footer');
    }

    public function change_password()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('layout/backend/header');
        $this->load->view('layout/backend/topbar');
        $this->load->view('layout/backend/sidebar', $data);
        $this->load->view('pages/backend/account/Change_password', $data);
        $this->load->view('layout/backend/footer');
    }

    public function update_action()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Name', 'required', [
            'required'          => 'Please enter your name!'
        ]);
        $this->form_validation->set_rules('phone', 'Phone', 'required|trim|numeric', [
            'required'          => 'Please check your Phone number again!',
            'numeric'           => 'input must be a number!',
            'trim'              => 'input cannot be spaced'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/backend/header');
            $this->load->view('layout/backend/topbar');
            $this->load->view('layout/backend/sidebar', $data);
            $this->load->view('pages/backend/account/edit_account', $data);
            $this->load->view('layout/backend/footer');
        } else {
            $nama           = $this->input->post('nama');
            $phone           = $this->input->post('phone');
            $email          = $this->input->post('email');

            $upload_img = $_FILES['img']['name'];

            if ($upload_img) {
                $config['allowed_types'] = 'jpg|jpeg';
                $config['max_size']     = '5120';
                $config['upload_path'] = './assets/backend/img/upload_profile';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('img')) {

                    $old_img = $data['user']['img'];
                    if ($old_img != 'default.jpg') {
                        unlink(FCPATH . 'assets/backend/img/upload_profile/' . $old_img);
                    }

                    $new_img = $this->upload->data('file_name');
                    $this->db->set('img', $new_img);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('nama', $nama);
            $this->db->set('phone', $phone);
            $this->db->where('email', $email);
            $this->db->update('user');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Your Profile has been updated.
            </div>');
            redirect('admin/account_controller');
        }
    }

    public function change_password_action()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_password', 'Cureent password', 'required|trim', [
            'required'                  => 'Please check Current Password again',
        ]);
        $this->form_validation->set_rules('new_password1', 'New password', 'required|trim|min_length[6]|matches[new_password2]', [
            'required'                  => 'Please check New Password again',
            'min_length'                => 'minimum 6 character',
            'matches'                   => 'password do not matches'
        ]);
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[6]|matches[new_password1]', [
            'required'                  => 'Please check New Password again',
            'min_length'                => 'minimum 6 character',
            'matches'                   => 'password do not matches'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/backend/header');
            $this->load->view('layout/backend/topbar');
            $this->load->view('layout/backend/sidebar', $data);
            $this->load->view('pages/backend/account/Change_password', $data);
            $this->load->view('layout/backend/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Wrong Curent Passsword.
                </div>');
                redirect('admin/account_controller/change_password_action');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                New password cannot be the same as current password.
                </div>');
                    redirect('admin/account_controller/change_password_action');
                } else {
                    //password ok
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Password Change.
                </div>');
                    redirect('admin/account_controller/index');
                }
            }
        }
    }
}
