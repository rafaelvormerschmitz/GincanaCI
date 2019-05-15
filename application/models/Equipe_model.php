<?php

class Equipe_model extends CI_Model {

    public function getAll() {
        $query = $this->db->get('equipe');
        return $query->result();
    }

    public function insert($eq = array()) {
        $this->db->insert('equipe', $eq);
        return $this->db->affected_rows();
    }

    public function getOne($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('equipe');
        return $query->row(0);
    }

    public function update($id, $eq = array()) {
        if ($id > 0) {
            $this->db->where('id', $id);
            $this->db->update('equipe', $eq);
            return $this->db->affected_rows();
        }
    }

    public function delete($id) {
        if ($id > 0) {
            $this->db->where('id', $id);
            $this->db->delete('equipe');
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

}
