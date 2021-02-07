<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Página de Login
class Login extends CI_Controller {

	public function index()
	{
        $data["title"] = "Login";
        $this->load->view('pages/login', $data);  
    }
    
    //Aqui o usuário insere o E-mail e Senha para logar no sistema
    public function store() {

        $this->load->model("login_model");
        $email = $_POST["email"];
        $password = $_POST["password"];
        $user = $this->login_model->store($email, $password); //Aqui identifica se o usuário tem cadastro

        if($user) { // se o usuário estiver cadastrado, então ele faz o login e vai para a página inicial do sistema

            $this->session->set_userdata("logged_user", $user);
            redirect("dashboard");
        } else { // caso contrário ele é direcinado para a tela de login novamente
            redirect("login");
        }
    }
    
    // Aqui é a função para sair da página
    public function logout() {
     
        $this->session->unset_userdata("logged_user");//quando a sessão é encerrada, o usuário volta pra tela de login
        redirect("login");

    }
        
}