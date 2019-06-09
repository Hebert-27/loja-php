<?php require_once("cabecalho.php");
require_once("banco-produto.php");
require_once("logica-login.php");

falhaDeSeguranca();

$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoria_id = $_POST["categoria_id"];
$conexao = conectar();

if(!array_key_exists('usado', $_POST)){
    $usado = "false";
}else{
    $usado = "true";
}
/**
 * Código responsável por inserir o produto cadastrado no banco de dados, caso dê algum erro é disparada a mensagem que o produto não foi adicionado
 * e do erro 
 */
if(insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado)){ ?>
    <p class="alert-success">Produto <?= $nome ?> no valor de <?= $preco ?> adicionado com sucesso!</p>
<?php
} else { 
    $msg = mysqli_error($conexao); 
?>
    <p class="alert-danger">Produto <?= $nome ?> no valor de <?= $preco ?> não foi adicionado!</p>
    <p class="alert-danger">Erro: <?= $msg ?></p>
<?php
}

include("rodape.php");

?>

