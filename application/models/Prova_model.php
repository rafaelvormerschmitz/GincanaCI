<?php

class Prova_model extends CI_Model {

    public function getALL() {
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

}
