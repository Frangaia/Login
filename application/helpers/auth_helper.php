<?php

// Bloqueio de página para ser somente acessada pelo login e não pela URL da página
// o auth é carregado também na pasta config->autoload->autoload[helper]
function permission() {

    $ci = get_instance();//Toda vez que acessar a página, será feita a verificação
    $loggedUser = $ci->session->userdata("logged_user");
    if(!$loggedUser) { // se o usuário não estiver logado, aparecerá a seguinte mensagem
        $ci->session->set_flashdata("danger", "Você precisa estar logado para acessar está página");
        redirect("login"); // direciona para a página de Login
    }
    return $loggedUser;
}