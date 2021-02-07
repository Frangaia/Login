<?php

// Aqui se busca o E-mail e Senha cadastrados pelo usuário no banco de dados
class Login_model extends CI_Model {

    public function store($email, $password) {

        $this->db->where("email", $email);
        $this->db->where("password", $password);
        $user = $this->db->get("tb_users")->row_array();// aqui busca o usuário no banco
        return $user;
    }
}