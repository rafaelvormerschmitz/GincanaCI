<?php

class Integrantes_model extends CI_Model {

    public function getAll() {
        $this->db->select('integrantes.*, equipe.nome as nm');
        $this->db->from('integrantes');
        $this->db->join('equipe', 'equipe.id = integrantes.id_equipe', 'inner');
        $query = $this->db->get();
        return $query->result();
    }

    public function insert($it = array()) {
        $this->db->insert('integrantes', $it);
        return $this->db->affected_rows();
    }

    public function getOne($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('integrantes');
        return $query->row(0);
    }

    public function update($id, $it = array()) {
        if ($id > 0) {
            $this->db->where('id', $id);
            $this->db->update('integrantes', $it);
            return $this->db->affected_rows();
        }
    }

    public function delete($id) {
        if ($id > 0) {
            $this->db->where('id', $id);
            $this->db->delete('integrantes');
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

}
