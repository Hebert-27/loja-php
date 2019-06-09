<?php
session_start();

/**
 * Verifica se está logado através do COOKIE
 */
function verificaSeEstaLogado(){
    return isset($_SESSION['usuario_logado']);
}

/**
 * Retorna o cookie com o nome: usuário logado
 */
function retornaCookieUsuario(){
    return $_SESSION['usuario_logado'];
}

/**
 * Verifica se não existe cookie, se não houve é passado um parâmetro chamado "falhaDeSegurança" para a página
 * index.php
 */
function falhaDeSeguranca(){
    if(!retornaCookieUsuario()){
        $_SESSION['danger'] = "Você não tem acesso a essa funcionalidade";
        header("Location:index.php");
        die();
    }
}

function criarCookieUsuarioLogado($email){
    $_SESSION['usuario_logado'] = $email;
}

function logout(){
    session_destroy();
    session_start();
}