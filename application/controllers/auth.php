<?php

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
            'valid_email'       =>  'Please Check again your email!.'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/backend/header');
            $this->load->view('auth/login');
            $this->load->view('layout/backend/footer');
        } else {
            $this->_login(); // "_"adalah method private
        }
    }
    private function _login()
    {
        $email      = $this->input->post('email');
        $password   = $this->input->post('password');

        $user       = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            //jika usernya aktif
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email'     => $user['email'],
                        'role_id'   => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('a/dashboard');
                    }
                    redirect('a/dashboard');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Wrong Password!.
                </div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                This email has not been activated.
                </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Your email Not registration!.
            </div>');
            redirect('auth');
        }
    }
    public function registration()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique'  => 'Sorry, this email has already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches'    => 'Password dont match!',
            'min_length' => 'Password too Sort!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/backend/header');
            $this->load->view('auth/registration');
            $this->load->view('layout/backend/footer');
        } else {
            $data = [
                'nama'          => htmlspecialchars($this->input->post('nama', true)),
                'email'         => htmlspecialchars($this->input->post('email', true)),
                'img'           => 'default.jpg',
                'password'      => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id'       => 2,
                'is_active'     => 0,
                'date_created'  => time()
            ];
            $this->M_resto->insert_data($data, 'user');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Congratulation, Please Login.
            </div>');
            redirect('auth');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            You have been logout, thankyou.
            </div>');
        redirect('auth');
    }
}
