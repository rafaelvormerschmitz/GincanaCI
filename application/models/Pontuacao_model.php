<?php

class Pontuacao_model extends CI_Model {

    public function getAll() {
        $this->db->select('pontuacao.*, equipe.nome as nm');
        $this->db->select('pontuacao.*, prova.nome as pv');
        $this->db->select('pontuacao.*, usuario1.nome as rio');
        $this->db->from('pontuacao');
        $this->db->join('equipe', 'equipe.id = pontuacao.id_equipe', 'inner');
        $this->db->join('prova', 'prova.id = pontuacao.id_prova', 'inner');
        $this->db->join('usuario1', 'usuario1.id = pontuacao.id_usuario', 'inner');
        $query = $this->db->get();
        return $query->result();
    }

    public function insert($pt = array()) {
        $this->db->insert('pontuacao', $pt);
        return $this->db->affected_rows();
    }

    public function getOne($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('pontuacao');
        return $query->row(0);
    }

    public function update($id, $pt = array()) {
        if ($id > 0) {
            $this->db->where('id', $id);
            $this->db->update('pontuacao', $pt);
            return $this->db->affected_rows();
        }
    }

    public function delete($id) {
        if ($id > 0) {
            $this->db->where('id', $id);
            $this->db->delete('pontuacao');
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

}
