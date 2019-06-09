<?php
require_once("conectar.php");
require_once("banco-usuario.php");
require_once("logica-login.php");

$conexao = conectar(); 
$email = $_GET['email'];
$senha = $_GET['senha'];

$usuario = buscarUsuario($conexao, $email, $senha);

if($usuario == null){
    $_SESSION['danger'] = "Login ou senha incorreta!";
    header("Location: index.php");
}else{
    criarCookieUsuarioLogado($email);
    $_SESSION['success'] = "Usuário logado com sucesso!";
    header("Location: index.php");
}
die();
