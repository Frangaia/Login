<?php

// Aqui será recebido os dados e armazenados no banco de dados para depois ser usados no login
class Users_model extends CI_Model {

    public function store($user) {

        $this->db->insert("tb_users", $user);
    }
}