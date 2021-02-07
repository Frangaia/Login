<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller { // Controller da página inicial

    public function __construct() {
        
        parent::__construct();
        permission();
        $this->load->model("dados_model");
    }

    //Aqui traz todos os dados que estão gravados no banco de dados para a tabela da página Dashboard
	public function index() // Recebe os dados da model pra depois enviar para a view(página)
	{   
        $this->load->model("dados_model"); 
        $data["email"] = $this->dados_model->index(); // A variável($data) recebe os dados da model
        $data["title"] = "Dashboard"; // Título da página

        $this->load->view('templates/header', $data); 
        $this->load->view('templates/nav-top', $data);
        $this->load->view('pages/dashboard', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);
    }
    
        
        
}