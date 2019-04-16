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
    