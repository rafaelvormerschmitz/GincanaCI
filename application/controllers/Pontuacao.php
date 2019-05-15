<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pontuacao extends CI_Controller {

    public function index() {
        $this->listar();
    }

    public function __construct() {
        parent::__construct();
        $this->load->model('Pontuacao_model');
        $this->load->model('Equipe_model');
        $this->load->model('Usuario_model');
        $this->load->model('Prova_model');
    }

    public function listar() {

        $pt['pontuacao'] = $this->Pontuacao_model->getAll();
        $this->load->view('Header');
        $this->load->view('ListaPontuacao', $pt);
        $this->load->view('Footer');
    }

    public function cadastrar() {

        $this->form_validation->set_rules('id_equipe', 'id_equipe', 'required');
        $this->form_validation->set_rules('id_prova', 'id_prova', 'required');
        $this->form_validation->set_rules('id_usuario', 'id_usuario', 'required');
        $this->form_validation->set_rules('pontos', 'pontos', 'required');
        $this->form_validation->set_rules('data_hora', 'data_hora', 'required');

        if ($this->form_validation->run() === FALSE) {

            $dados['pontuacao'] = $this->Pontuacao_model->getAll();
            $dados['equipe'] = $this->Equipe_model->getAll();
            $dados['usuario'] = $this->Usuario_model->getAll();
            $dados['prova'] = $this->Prova_model->getAll();

            $this->load->view('Header');
            $this->load->view('FormPontuacao', $dados);
            $this->load->view('Footer');
        } else {

            $pt = array(
                'id_equipe' => $this->input->post('id_equipe'),
                'id_prova' => $this->input->post('id_prova'),
                'id_usuario' => $this->input->post('id_usuario'),
                'pontos' => $this->input->post('pontos'),
                'data_hora' => $this->input->post('data_hora'),
            );
            if ($this->Pontuacao_model->insert($pt)) {
                $this->session->set_flashdata('mensagem', 'Pontuação cadastrada com sucesso!!');
                redirect('pontuacao/listar');
            } else {

                $this->session->set_flashdata('mensagem', 'Erro ao cadastrar a Pontuação!!');
                redirect('pontuacao/cadastrar');
            }
        }
    }

    public function alterar($id) {
        if ($id > 0) {

            $this->form_validation->set_rules('id_equipe', 'id_equipe', 'required');
            $this->form_validation->set_rules('id_prova', 'id_prova', 'required');
            $this->form_validation->set_rules('id_usuario', 'id_usuario', 'required');
            $this->form_validation->set_rules('pontos', 'pontos', 'required');

            if ($this->form_validation->run() === false) {
                $pt['equipe'] = $this->Pontuacao_model->getOne($id);
                $pt['prova'] = $this->Pontuacao_model->getOne($id);
                $pt['usuario'] = $this->Pontuacao_model->getOne($id);
                $pt['pontuacao'] = $this->Pontuacao_model->getOne($id);


                $this->load->view('Header');
                $this->load->view('FormPontuacao', $pt);
                $this->load->view('Footer');
            } else {
                $pt = array(
                    'id_equipe' => $this->input->post('id_equipe'),
                    'id_prova' => $this->input->post('id_prova'),
                    'id_usuario' => $this->input->post('id_usuario'),
                    'pontos' => $this->input->post('pontos'),
                    'data_hora' => $this->input->post('data_hora'),
                );
                if ($this->Pontuacao_model->update($id, $pt)) {
                    $this->session->set_flashdata('mensagem', 'Pontuação alterada com sucesso!!!');
                    redirect('Pontuacao/listar');
                } else {
                    $this->session->set_flashdata('mensagem', 'Erro ao alterar!!!');
                    redirect('Pontuacao/alterar/' . $id);
                }
            }
        } else {
            redirect('pontuacao/listar');
        }
    }

    public function deletar($id) {
        if ($id > 0) {
            if ($this->Pontuacao_model->delete($id)) {
                $this->session->set_flashdata('mensagem', 'Pontuação deletada!');
            } else {
                $this->session->set_flashdata('mensagem', 'Falha ao deletar a Pontuação!');
            }
        }
        redirect('pontuacao/listar');
    }

}
