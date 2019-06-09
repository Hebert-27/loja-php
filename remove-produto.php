<?php require_once("cabecalho.php"); 
require_once("banco-produto.php");
require_once("logica-login.php");

$conexao = conectar();
$idProduto = $_POST['id'];


deletarProduto($conexao, $idProduto);
$_SESSION['success'] = "Produto apagado com sucesso!";
header("Location: listar-produtos.php");
die();

include("rodape.php");

?>