<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Equipe extends CI_Controller {

    public function index() {
        $this->listar();
    }

    public function __construct() {
        parent::__construct();
        $this->load->model('Equipe_model');
    }

    public function listar() {
        $this->load->model('Equipe_model');
        $eq['equipe'] = $this->Equipe_model->getAll();
        $this->load->view('Header');
        $this->load->view('ListaEquipe', $eq);
        $this->load->view('Footer');
    }

    public function cadastrar() {

        $this->form_validation->set_rules('nome', 'nome', 'required');
        if ($this->form_validation->run() === FALSE) {

            $this->load->view('Header');
            $this->load->view('FormEquipe');
            $this->load->view('Footer');
        } else {

            $this->load->model('Equipe_model');

            $eq = array(
                'nome' => $this->input->post('nome'),
            );
            if ($this->Equipe_model->insert($eq)) {
                $this->session->set_flashdata('mensagem', 'Equipe cadastrada com sucesso!!');
                redirect('equipe/listar');
            } else {
                redirect('equipe/cadastrar');
                $this->session->set_flashdata('mensagem', 'Erro ao cadastrar a Equipe!!');
            }
        }
    }

    public function alterar($id) {
        if ($id > 0) {
            $this->load->model('Equipe_model');
            $this->form_validation->set_rules('nome', 'nome', 'required');

            if ($this->form_validation->run() === false) {
                $eq['equipe'] = $this->Equipe_model->getOne($id);
                $this->load->view('Header');
                $this->load->view('FormEquipe', $eq);
                $this->load->view('Footer');
            } else {
                $eq = array(
                    'nome' => $this->input->post('nome'),
                );
                if ($this->Equipe_model->update($id, $eq)) {
                    $this->session->set_flashdata('mensagem', 'Equipe alterada com sucesso!!!');
                    redirect('Equipe/listar');
                } else {
                    $this->session->set_flashdata('mensagem', 'Erro ao alterar!!!');
                    redirect('Equipe/alterar/' . $id);
                }
            }
        } else {
            redirect('equipe/listar');
        }
    }

    public function deletar($id) {
        if ($id > 0) {
            $this->load->model('Equipe_model');
            if ($this->Equipe_model->delete($id)) {
                $this->session->set_flashdata('mensagem', 'Equipe deletada com sucesso!');
            } else {
                $this->session->set_flashdata('mensagem', 'Falha ao deletar a Equipe!');
            }
        }
        redirect('equipe/listar');
    }

}
