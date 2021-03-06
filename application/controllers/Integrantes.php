<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Integrantes extends CI_Controller {

    public function index() {
        $this->listar();
    }

    public function __construct() {
        parent::__construct();
        $this->load->model('Integrantes_model');
        $this->load->model('Equipe_model');
    }

    public function listar() {
       
        $it['integrantes'] = $this->Integrantes_model->getAll();
        $this->load->view('Header');
        $this->load->view('ListaIntegrantes', $it);
        $this->load->view('Footer');
    }

    public function cadastrar() {

        $this->form_validation->set_rules('id_equipe', 'id_equipe', 'required');
        $this->form_validation->set_rules('nome', 'nome', 'required');

        if ($this->form_validation->run() === FALSE) {

            $dados['equipe'] = $this->Equipe_model->getAll();

            $this->load->view('Header');
            $this->load->view('FormIntegrantes', $dados);
            $this->load->view('Footer');
        } else {


            $it = array(
                'id_equipe' => $this->input->post('id_equipe'),
                'nome' => $this->input->post('nome'),
                'data_nasc' => $this->input->post('data_nasc'),
                'rg' => $this->input->post('rg'),
                'cpf' => $this->input->post('cpf'),
            );
            if ($this->Integrantes_model->insert($it)) {
                $this->session->set_flashdata('mensagem', 'Intregrante cadastrado com sucesso!!');
                redirect('integrantes/listar');
            } else {
                redirect('integrantes/cadastrar');
                $this->session->set_flashdata('mensagem', 'Erro ao cadastrar o Integrante!!');
            }
        }
    }

    public function alterar($id) {
        if ($id > 0) {

            $this->form_validation->set_rules('id_equipe', 'id_equipe', 'required');
            $this->form_validation->set_rules('nome', 'nome', 'required');

            if ($this->form_validation->run() === false) {
                $it['integrantes'] = $this->Integrantes_model->getOne($id);
                $it['equipe'] = $this->Equipe_model->getAll();


                $this->load->view('Header');
                $this->load->view('FormIntegrantes', $it);
                $this->load->view('Footer');
            } else {
                $it = array(
                    'id_equipe' => $this->input->post('id_equipe'),
                    'nome' => $this->input->post('nome'),
                    'data_nasc' => $this->input->post('data_nasc'),
                    'rg' => $this->input->post('rg'),
                    'cpf' => $this->input->post('cpf'),
                );
                if ($this->Integrantes_model->update($id, $it)) {
                    $this->session->set_flashdata('mensagem', 'Integrante alterado com sucesso!!!');
                    redirect('Integrantes/listar');
                } else {
                    $this->session->set_flashdata('mensagem', 'Erro ao alterar!!!');
                    redirect('Integrantes/alterar/' . $id);
                }
            }
        } else {
            redirect('integrantes/listar');
        }
    }

    public function deletar($id) {
        if ($id > 0) {
            if ($this->Integrantes_model->delete($id)) {
                $this->session->set_flashdata('mensagem', 'Integrante deletado com sucesso!');
            } else {
                $this->session->set_flashdata('mensagem', 'Falha ao deletar o Integrante!');
            }
        }
        redirect('integrantes/listar');
    }

}
