<?php

class Dashboard extends CI_Controller
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
		$data['count_menu'] 					= $this->M_resto->count_menu();
		$data['count_user'] 					= $this->M_resto->count_user();
		$data['count_table'] 					= $this->M_resto->count_table();
		$data['count_slider'] 					= $this->M_resto->count_slider();
		$data['count_employee'] 				= $this->M_resto->count_employee();
		$data['count_menu_not_available'] 		= $this->M_resto->count_menu_not_available();

		$this->load->view('layout/backend/header');
		$this->load->view('layout/backend/topbar');
		$this->load->view('layout/backend/sidebar');
		$this->load->view('pages/backend/dashboard', $data);
		$this->load->view('layout/backend/footer');
	}

	public function get_tot()
	{
		$tot = $this->M_invoice->total_rows();
		$result['tot'] = $tot;
		$result['msg'] = "Berhasil direfresh secara realtime";
		echo json_encode($result);
	}
}
