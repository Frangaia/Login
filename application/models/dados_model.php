<?php

class Dados_model extends CI_Model { // Controller para o banco de dados

    // método para pegar os dados da tabela já existentes no banco de dados
    public function index() { 

        return $this->db->get("signup")->result_array(); 
    }


            // CRUD
    // Para inserir os dados na tabela(CRIAR - CREATE)
    public function store($email) { 

        $this->db->insert("signup", $email);// Insere os dados criados na tabela do banco 

    }

    // Mostra o usuário cadastrado na tabela do banco de dados e na tabela da página
    public function show($id) {

        return $this->db->get_where("signup", array(
            "id" => $id
        ))->row_array();
    }

    // Atualiza o usuário na página e no banco de dados
    public function update($id, $email) {

        $this->db->where("id", $id); // a variável busca no campo id da tabela do banco
        return $this->db->update("signup", $email); // atualiza no banco de dados
    }

    // Deleta o usuário da tabela da página e no banco de dados
    public function destroy($id) { 

        $this->db->where("id", $id);
        return $this->db->delete("signup");

    }
}