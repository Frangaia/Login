<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Página de cadastro de email para login
class Signup extends CI_Controller {

	public function index()
	{
        $data["title"] = "Signup";
        $this->load->view('pages/signup', $data); // carregamento da página
        
    }
    
    // Recebe os dados para cadastro de NOME, EMAIL E SENHA
    public function store() {

        $this->load->model("users_model");
        $user = array(
            "name" => $_POST["name"],
            "email" => $_POST["email"],
            "password" => $_POST["password"]
        );

        $this->users_model->store($user);
        redirect("login"); // assim que cadastrado, o usuário é direcionado para a página de login
    }    
        
}