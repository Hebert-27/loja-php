<?php require_once("cabecalho.php"); 
require_once("banco-categoria.php");
require_once("banco-produto.php");

$id = $_GET['id'];
$conexao = conectar();
$produto = buscaProduto($conexao, $id);
$categorias = listaCategorias($conexao);
$usado = $produto['usado'] ? "checked='checked'" : "";
?>

<h2>Alterando Produto</h2>

<div class="form-group">
    <form action="adiciona-produto.php" method="POST">
        <table class="table">
            <?php include("produto-formulario-base.php"); ?>
        </table>
        <br /><br /><input type="submit" class="btn btn-primary" value="Alterar"/>
    </form>
</div>

<?php include("rodape.php"); ?>
                