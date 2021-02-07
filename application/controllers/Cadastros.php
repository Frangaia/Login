<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastros extends CI_Controller { // Controller da rota Cadastro da página Dashboard

    // A Construct abrange a aplicação de métodos para todas as funções do código, sem necessidade de repeti-las
    public function __construct() { 
        
        parent::__construct();
        permission(); // Bloqueio de página para ser somente acessada pelo Login
        $this->load->model("dados_model");
    }
    
	public function index()
	{
        $data["email"] = $this->dados_model->index();
        $data["title"] = "Cadastros";
        
         // carrega todas as partes da página que tem o mesmo layout e código nas outras páginas
        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
        $this->load->view('pages/cadastros', $data);// somente o que muda aqui são as tabelas e outras funções
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);
    }
    
    // Método para chamada do formulário para preenchimento
    public function new() {

        $data["title"] = "Cadastros";
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
        $this->load->view('pages/form-cadastros', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);
    }

    // Cria um novo cadastro de usuário no formulário
    public function store() {

        $email = $_POST; 
       $this->dados_model->store($email);// São preenchidos no formulário as informações NOME, EMAIL, SENHA
       redirect("cadastros"); // Depois de salvo, redireciona para a página de cadastro.
    }

    /* Edita os dados do usuário como NOME, EMAIL,SENHA e o formulário vem com os dados prenchidos para 
    fazer a edição*/
    public function edit($id) { // Traz as informações através do " id ", número que identifica o usuário

        $email["id"] = '1';
        $data["email"] = $this->dados_model->show($id);
        $data["title"] = "Editar";
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
        $this->load->view('pages/form-cadastros', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);
 
    }

    // Atualiza os dados do usuário na página e no banco de dados
    public function update($id) {

        $email = $_POST;
        $this->dados_model->update($id, $email);
        redirect("cadastros"); // volta para a página de cadastros
    }

    // Deleta o usuário da página de cadastros e do banco de dados
    public function delete($id) {

        $this->dados_model->destroy($id);
        redirect("cadastros");

    }
}