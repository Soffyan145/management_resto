<?php

class Report_controller extends CI_Controller
{
    public function index()
    {
        $data['report'] = $this->db->query("SELECT * FROM transaction WHERE status = 0 ORDER BY date DESC")->result();

        $this->load->view('layout/backend/header');
        $this->load->view('layout/backend/topbar');
        $this->load->view('layout/backend/sidebar');
        $this->load->view('pages/backend/report/all', $data);
        $this->load->view('layout/backend/footer');
    }

    public function day()
    {
        $data['report'] = $this->db->query("SELECT * FROM transaction WHERE status = 0  AND date=DATE(NOW())
        GROUP BY date")->result();

        $this->load->view('layout/backend/header');
        $this->load->view('layout/backend/topbar');
        $this->load->view('layout/backend/sidebar');
        $this->load->view('pages/backend/report/day', $data);
        $this->load->view('layout/backend/footer');
    }

    public function pdf_try()
    {
        $data['profile']      = $this->M_profile->get_data('resto')->result();
        $data['report']       = $this->db->query("SELECT * FROM transaction WHERE status = 0  ORDER BY date DESC")->result();

        $this->load->view('pages/backend/report/report_pdf', $data);
    }

    public function pdf()
    {
        $this->load->library('dompdf_gen');

        $data['profile']      = $this->M_profile->get_data('resto')->result();
        $data['report']       = $this->db->query("SELECT * FROM transaction WHERE status = 0  ORDER BY date DESC")->result();

        $this->load->view('pages/backend/report/report_pdf', $data);

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Report_all_transaction.pdf", array('Attachment' => 0));
    }
}
