<?php

class M_invoice extends CI_Model
{
    public function index()
    {
        date_default_timezone_set('Asia/Jakarta');

        $kode    = $this->input->post('kode');
        $pay        = $this->input->post('pay');
        $message    = $this->input->post('message');

        $invoice = array(
            'pay'       => $pay,
            'message'   => $message,
            'kode'      => $kode,
            'date'      => date('Y-m-d H:i:s'),
            'status'    => 1
        );

        $this->db->insert('transaction', $invoice);
        $id_invoice = $this->db->insert_id();

        foreach ($this->cart->contents() as $menu) {
            $data = array(
                'id_invoice'        => $id_invoice,
                'id_menu'           => $menu['id'],
                'nama_menu'         => $menu['name'],
                'qty'               => $menu['qty'],
                'price'             => $menu['price'],
                'purchase'          => $menu['purchase'],
                'status'            => 1
            );
            $this->db->insert('order', $data);
        }
        return TRUE;
    }

    public function get_data()
    {
        $result = $this->db->get('transaction');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function take_id_invoice($id)
    {
        $final = $this->db->where('id', $id)->get('transaction');
        if ($final->num_rows() > 0) {
            return $final->result();
        } else {
            return false;
        }
    }

    public function count_transaction()
    {
        $query = $this->db->get('transaction');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    function total_rows($q = NULL)
    {
        $this->db->like('id', $q);
        $this->db->or_like('kode', $q);
        $this->db->or_like('pay', $q);
        $this->db->or_like('message', $q);
        $this->db->from('transaction');
        return $this->db->count_all_results();
    }

    public function update_data($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    public function get_id_invoice($id_invoice)
    {
        $result = $this->db->where('id', $id_invoice)->limit(1)->get('transaction');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }

    public function get_id_order($id_invoice)
    {
        $result = $this->db->where('id_invoice', $id_invoice)->get('order');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function get_kode()
    {
        $kode       = "INV";
        $query      = "SELECT max(kode) as kode_auto from transaction";
        $data       = $this->db->query($query)->row_array();
        $max_kode   = $data['kode_auto'];
        $max_kode2  = (int) substr($max_kode, 6, 3);
        $kodecount  = $max_kode2 + 1;
        $kode_auto  = $kode . "-" . sprintf('%03s', $kodecount);
        return $kode_auto;
    }
}
