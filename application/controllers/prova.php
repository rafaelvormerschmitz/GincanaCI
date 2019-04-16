<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Prova extends CI_Controller {

    public function index() {
        $this->listar();
    }

    public function listar() {
        $this->load->model('Prova_model');
        $data['prova'] = $this->cm->getAll();

        $this->load->view('ListaProva', $data);
    }

    public function cadastrar() {
        $this->form_validation->set_rules('nome', 'nome', 'required');
        $this->form_validation->set_rules('tempo', 'tempo', 'required');
        $this->form_validation->set_rules('descricao', 'descricao', 'required');
        $this->for_validation->set_rules('NmIntegrantes', 'NmIntegrantes', 'required');

        if ($this->form_validation->run() === FALSE) {

            $this->load->view('FormProva');
        } else {
            $this->load->model('Prova_model');
        }
        $data = array(
            'nome' => $this->input->post('nome'),
            'tempo' => $this->input->post('tempo'),
            'descricao' => $this->input->post('decricao'),
            'NmIntegrantes' => $this->input->post('NmIntegrentes'),
        );
        if ($this->Prova_model->insert($data)) {
            $this->session->set_flashdata('mensagem', 'Prova cadastrado com sucesso!!!!');
            redirect('Prova/listar');
        } else {
            redirect('Prova/cadastrar');
            $this->session->set_flashdata('mensagem', 'Erro ao cadastrar Prova!!!!');
        }
    }

}

?>