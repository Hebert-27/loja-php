<?php require_once("cabecalho.php"); 
require_once("banco-categoria.php");
require_once("logica-login.php");

falhaDeSeguranca();

$conexao = conectar();
$produto = array("nome" => "", "descricao" => "", "preco" => "", "categoria_id" => "1");
$usado = "";
$categorias = listaCategorias($conexao)
?>
<h2>Cadastro de Produto</h2>

<div class="form-group">
    <form action="adiciona-produto.php" method="POST">
    <table class="table">
        <?php include("produto-formulario-base.php"); ?>
        <tr>
            <td><input type="submit" class="btn btn-primary" value="Cadastrar"/></td>
        </tr>
    </table>
    </form>
</div>

<?php include("rodape.php"); ?>
                