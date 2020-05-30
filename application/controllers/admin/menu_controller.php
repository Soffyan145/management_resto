<?php

class Menu_controller extends CI_Controller
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
        $data['menus'] = $this->M_resto->get_data('menu')->result();
        $data['categoryes'] = $this->M_resto->get_data('kategori')->result();
        $data['types'] = $this->M_resto->get_data('type')->result();
        $data['count_menu_not_available']     = $this->M_resto->count_menu_not_available();

        $this->load->view('layout/backend/header');
        $this->load->view('layout/backend/topbar');
        $this->load->view('layout/backend/sidebar', $data);
        $this->load->view('pages/backend/menu/menu', $data);
        $this->load->view('layout/backend/footer');
    }

    public function add()
    {
        $data['categories'] = $this->M_resto->get_data('kategori')->result();
        $data['types'] = $this->M_resto->get_data('type')->result();
        $this->load->view('layout/backend/header');
        $this->load->view('layout/backend/topbar');
        $this->load->view('layout/backend/sidebar');
        $this->load->view('pages/backend/menu/add', $data);
        $this->load->view('layout/backend/footer');
    }

    public function add_action()
    {
        $nama_menu              = $this->input->post('nama_menu');
        $nama_kategori          = $this->input->post('nama_kategori');
        $nama_type              = $this->input->post('nama_type');
        $status                 = $this->input->post('status');
        $harga_dasar            = $this->input->post('harga_dasar');
        $harga_jual             = $this->input->post('harga_jual');
        $deskripsi              = $this->input->post('deskripsi');
        $discount               = $this->input->post('discount');
        $foto_menu                   = $_FILES['foto_menu'];
        if ($foto_menu = '') {
        } else {
            $config['upload_path']    = './assets/backend/img/upload_menu';
            $config['allowed_types']  = 'jpg|png|jpeg';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto_menu')) {
                $foto_menu = 'default.jpg';
            } else {
                $foto_menu = $this->upload->data('file_name');
            }
        }
        $data = array(
            'nama_menu'             => $nama_menu,
            'nama_kategori'         => $nama_kategori,
            'nama_type'             => $nama_type,
            'status'                => $status,
            'harga_dasar'           => $harga_dasar,
            'harga_jual'            => $harga_jual,
            'deskripsi'             => $deskripsi,
            'discount'              => $discount,
            'foto_menu'             => $foto_menu
        );

        $this->M_resto->insert_data($data, 'menu');
        $this->session->set_flashdata('flash', 'Add');
        redirect('a/food');
    }

    public function update($id)
    {
        $where = array('id_menu' => $id);
        $data['menus'] = $this->db->query("SELECT * FROM menu mn, kategori kt WHERE mn.nama_kategori=kt.nama_kategori AND mn.id_menu='$id'")->result();
        $data['kategori'] = $this->M_resto->get_data('kategori')->result();
        $data['type'] = $this->M_resto->get_data('type')->result();

        $this->load->view('layout/backend/header');
        $this->load->view('layout/backend/topbar');
        $this->load->view('layout/backend/sidebar');
        $this->load->view('pages/backend/menu/update', $data);
        $this->load->view('layout/backend/footer');
    }

    public function update_action()
    {
        $data['categories'] = $this->M_resto->get_data('kategori')->result();
        $data['types'] = $this->M_resto->get_data('type')->result();

        $this->form_validation->set_rules('nama_menu', 'Nama_menu', 'required', [
            'required'          => 'Please enter your name menu!'
        ]);
        $this->form_validation->set_rules('nama_kategori', 'Nama_kategori', 'required', [
            'required'          => 'Please enter your name category!'
        ]);
        $this->form_validation->set_rules('nama_type', 'Nama_type', 'required', [
            'required'          => 'Please enter your name type!'
        ]);
        $this->form_validation->set_rules('status', 'Status', 'required', [
            'required'          => 'Please enter your status for menu item!'
        ]);
        $this->form_validation->set_rules('harga_dasar', 'Harga_dasar', 'required|trim|numeric', [
            'required'          => 'Please check your price again!',
            'numeric'           => 'input must be a number!',
            'trim'              => 'input cannot be spaced'
        ]);
        $this->form_validation->set_rules('harga_jual', 'Harga_jual', 'required|trim|numeric', [
            'required'          => 'Please check your price again!',
            'numeric'           => 'input must be a number!',
            'trim'              => 'input cannot be spaced'
        ]);
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required', [
            'required'          => 'Please enter your status for menu item!'
        ]);
        $this->form_validation->set_rules('discount', 'Discount', 'required', [
            'required'          => 'Please enter your status for menu item!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/backend/header');
            $this->load->view('layout/backend/topbar');
            $this->load->view('layout/backend/sidebar', $data);
            $this->load->view('pages/backend/menu/update', $data);
            $this->load->view('layout/backend/footer');
        } else {
            $id_menu                = $this->input->post('id_menu');
            $nama_menu              = $this->input->post('nama_menu');
            $nama_kategori          = $this->input->post('nama_kategori');
            $nama_type              = $this->input->post('nama_type');
            $status                 = $this->input->post('status');
            $harga_dasar            = $this->input->post('harga_dasar');
            $harga_jual             = $this->input->post('harga_jual');
            $deskripsi              = $this->input->post('deskripsi');
            $discount               = $this->input->post('discount');
            $foto                   = $_FILES['foto_menu'];
            if ($foto) {
                $config['upload_path']    = './assets/backend/img/upload_menu';
                $config['allowed_types']  = 'jpg|png|jpeg';

                $this->load->library('upload', $config);
                if ($this->upload->do_upload('foto_menu')) {
                    $foto_menu = $this->upload->data('file_name');
                    $this->db->set('foto_menu', $foto_menu);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $data = array(
                'nama_menu'             => $nama_menu,
                'nama_kategori'         => $nama_kategori,
                'nama_type'             => $nama_type,
                'status'                => $status,
                'harga_dasar'           => $harga_dasar,
                'harga_jual'            => $harga_jual,
                'deskripsi'             => $deskripsi,
                'discount'              => $discount
            );

            $where = array('id_menu' => $id_menu);
            $this->M_resto->update_data('menu', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
    <strong>Menu</strong> Success To Update.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>');
            redirect('a/food');
        }
    }

    public function detail($id)
    {
        $data['details'] = $this->M_resto->take_id_menu($id);
        $this->load->view('layout/backend/header');
        $this->load->view('layout/backend/topbar');
        $this->load->view('layout/backend/sidebar');
        $this->load->view('pages/backend/menu/detail', $data);
        $this->load->view('layout/backend/footer');
    }

    public function delete($id)
    {
        $where = array('id_menu' => $id);
        $this->M_resto->delete_data($where, 'menu');
        $this->session->set_flashdata('flash', 'delete');
        redirect('a/food');
    }

    public function update_status($id)
    {
        $where = array('id_menu' => $id);

        $data = array(
            'status'                => '1'
        );

        $this->M_resto->update_data('menu', $data, $where);
        $this->session->set_flashdata('flash', 'available');
        redirect('a/food_not_available');
    }
}
