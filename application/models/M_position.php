<?php

class M_position extends CI_model
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
    public function take_id_position($id)
    {
        $final = $this->db->where('id_position', $id)->get('position');
        if ($final->num_rows() > 0) {
            return $final->result();
        } else {
            return false;
        }
    }
}
