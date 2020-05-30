<?php

class Salary_controller extends CI_Controller
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
            $data['salaryes'] = $this->db->query("SELECT * FROM salary INNER JOIN employee ON salary.id_employee=employee.id_employee INNER JOIN position ON employee.id_position=position.id_position")->result();
            $this->load->view('layout/backend/header');
            $this->load->view('layout/backend/topbar');
            $this->load->view('layout/backend/sidebar');
            $this->load->view('pages/backend/salary/salary', $data);
            $this->load->view('layout/backend/footer');
        } else {
            redirect('a/block_access');
        }
    }

    public function choose_employee()
    {
        if ($this->session->userdata('role_id') === '1') {
            $data['employees'] = $this->db->query("SELECT * FROM employee INNER JOIN position ON employee.id_position=position.id_position")->result();
            $data['salaryes'] = $this->M_employee->get_data('salary')->result();
            $data['positions'] = $this->M_employee->get_data('position')->result();
            $this->load->view('layout/backend/header');
            $this->load->view('layout/backend/topbar');
            $this->load->view('layout/backend/sidebar');
            $this->load->view('pages/backend/salary/choose_employee', $data);
            $this->load->view('layout/backend/footer');
        } else {
            redirect('a/block_access');
        }
    }

    public function add($id)
    {
        $where = array('id_employee' => $id);
        $data['employees'] = $this->db->query("SELECT * FROM employee pl, position pt WHERE pl.id_position=pt.id_position AND pl.id_employee='$id'")->result();
        $data['position'] = $this->M_employee->get_data('position')->result();

        if ($this->session->userdata('role_id') === '1') {
            $this->load->view('layout/backend/header');
            $this->load->view('layout/backend/topbar');
            $this->load->view('layout/backend/sidebar');
            $this->load->view('pages/backend/salary/add', $data);
            $this->load->view('layout/backend/footer');
        } else {
            redirect('a/block_access');
        }
    }

    public function add_action()
    {
        $id_employee            = $this->input->post('id_employee');
        $id_position            = $this->input->post('id_position');
        $date_salary            = $this->input->post('dale_salary');
        $salary                 = $this->input->post('salary');
        $salary_bonus           = $this->input->post('salary_bonus');
        $salary_cuts            = $this->input->post('salary_cuts');
        $total_salary           = $this->input->post('total_salary');
        $description            = $this->input->post('description');

        $data = array(
            'id_employee'             => $id_employee,
            'id_position'             => $id_position,
            'date_salary'             => $date_salary,
            'salary'                  => $salary,
            'salary_bonus'            => $salary_bonus,
            'salary_cuts'             => $salary_cuts,
            'total_salary'            => $total_salary,
            'description'             => $description
        );

        $this->M_salary->insert_data($data, 'salary');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Salary</strong> Success To add.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>');
        redirect('a/salary');
    }

    public function detail($id)
    {
        if ($this->session->userdata('role_id') === '1') {
            $data['details'] = $this->db->query("SELECT * FROM salary INNER JOIN employee ON salary.id_employee=employee.id_employee INNER JOIN position ON employee.id_position=position.id_position WHERE id=$id")->result();
            $this->load->view('layout/backend/header');
            $this->load->view('layout/backend/topbar');
            $this->load->view('layout/backend/sidebar');
            $this->load->view('pages/backend/salary/detail', $data);
            $this->load->view('layout/backend/footer');
        } else {
            redirect('a/block_access');
        }
    }

    public function delete($id)
    {
        $where = array('id' => $id);
        $this->M_salary->delete_data($where, 'salary');
        $this->session->set_flashdata('flash', 'delete');
        redirect('a/salary');
    }
}
