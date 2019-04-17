<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Prova extends CI_Controller {

    public function index() {
        $this->listar();
    }

    public function listar() {
        $this->load->model('Prova_model');

        $pv['prova'] = $this->Prova_model->getAll();
        $this->load->view('ListaProva', $pv);
    }

    public function cadastrar() {

        $this->form_validation->set_rules('nome', 'nome', 'required');
        $this->form_validation->set_rules('tempo', 'tempo', 'required');
        $this->form_validation->set_rules('descricao', 'descricao', 'required');
        $this->form_validation->set_rules('NmIntegrantes', 'NmIntegrantes', 'required');
        if ($this->form_validation->run() === FALSE) {

            $this->load->view('FormProva');
        } else {

            $this->load->model('Prova_model');

            $pv = array(
                'nome' => $this->input->post('nome'),
                'tempo' => $this->input->post('tempo'),
                'descricao' => $this->input->post('descricao'),
                'NmIntegrantes' => $this->input->post('NmIntegrantes'),
            );
            if ($this->Prova_model->insert($pv)) {
                $this->session->set_flashdata('mensagem', 'Prova cadastrada com sucesso!!');
                redirect('Prova/listar');
            } else {
                redirect('Prova/cadastrar');
                $this->session->set_flashdata('mensagem', 'Erro ao cadastrar a Prova!!!');
            }
        }
    }

    public function alterar($id) {
        if ($id > 0) {
            $this->load->model('Prova_model');
            $this->form_validation->set_rules('nome', 'nome', 'required');
            $this->form_validation->set_rules('tempo', 'tempo', 'required');
            $this->form_validation->set_rules('descricao', 'descricao', 'required');
            $this->form_validation->set_rules('NmIntegrantes', 'NmIntegrantes', 'required');

            if ($this->form_validation->run() === false) {
                $pv['prova'] = $this->Prova_model->getOne($id);

                $this->load->view('FormProva', $pv);
            } else {
                $data = array(
                    'nome' => $this->input->post('nome'),
                    'tempo' => $this->input->post('tempo'),
                    'descricao' => $this->input->post('descricao'),
                    'NmIntegrantes' => $this->input->post('NmIntegrantes'),
                );
                if ($this->Prova_model->update($id, $pv)) {
                    $this->session->set_flashdata('mensagem', 'Prova alterada com sucesso!!!');
                    redirect('Prova/listar');
                } else {
                    $this->session->set_flashdata('mensagem', 'Erro ao alterar!!!');
                    redirect('Prova/alterar/' . $id);
                }
            }
        } else {
            redirect('Prova/listar');
        }
    }

    public function deletar($id) {
        if ($id > 0) {
            $this->load->model('Prova_model');
            if ($this->Prova_model->delete($id)) {
                $this->session->set_flashdata('mensagem', 'Prova deletado com sucesso!!!');
            } else {
                $this->session->set_flashdata('mensagem', 'Falha ao deletar a prova!!!');
            }
        }
        redirect('Prova/listar');
    }

}
