<?php

class M_resto extends CI_model
{
    public function get_data($table)
    {
        return $this->db->get($table);
    }
    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function update_data($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }
    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function take_id_menu($id)
    {
        $final = $this->db->where('id_menu', $id)->get('menu');
        if ($final->num_rows() > 0) {
            return $final->result();
        } else {
            return false;
        }
    }
    public function take_id_employee($id)
    {
        $final = $this->db->where('id_employee', $id)->get('employee');
        if ($final->num_rows() > 0) {
            return $final->result();
        } else {
            return false;
        }
    }
    public function get_data_menu_not_available()
    {
        $this->db->select('*');
        $this->db->from('menu');
        $this->db->where("status", "0");
        return $this->db->get();
    }
    public function count_menu()
    {
        $query = $this->db->get('menu');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function count_user()
    {
        $query = $this->db->get('user');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function count_menu_not_available()
    {
        $not_available = $this->db->where('status', '0');
        $query = $this->db->get('menu');
        if ($query->num_rows() > 0 and $not_available) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function count_employee()
    {
        $query = $this->db->get('employee');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function count_table()
    {
        $query = $this->db->get('meja');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function count_slider()
    {
        $query = $this->db->get('slider');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    function total_rows($q = NULL)
    {
        $this->db->like('id_menu', $q);
        $this->db->or_like('nama_menu', $q);
        $this->db->or_like('nama_kategori', $q);
        $this->db->or_like('nama_type', $q);
        $this->db->or_like('status', $q);
        $this->db->or_like('harga_dasar', $q);
        $this->db->or_like('harga_jual', $q);
        $this->db->or_like('deskripsi', $q);
        $this->db->or_like('discount', $q);
        $this->db->or_like('foto_menu', $q);
        $this->db->from('menu');
        return $this->db->count_all_results();
    }
    public function find($id)
    {
        $result = $this->db->where('id_menu', $id)
            ->limit(1)
            ->get('menu');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }
}
