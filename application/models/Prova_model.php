<?php

class Prova_model extends CI_Model {

    public function getAll() {
        $query = $this->db->get('prova');
        return $query->result();
    }

    public function insert($pv = array()) {
        $this->db->insert('prova', $pv);
        return $this->db->affected_rows();
    }

    public function getOne($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('prova');
        return $query->row(0);
    }

    public function update($id, $pv = array()) {
        if ($id > 0) {
            $this->db->where('id', $id);
            $this->db->update('prova', $pv);
            return $this->db->affected_rows();
        }
    }

    public function delete($id) {
        if ($id > 0) {
            $this->db->where('id', $id);
            $this->db->delete('prova');
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

}
