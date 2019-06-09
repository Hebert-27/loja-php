<?php require_once("cabecalho.php"); 
require_once("banco-produto.php");
require_once("logica-login.php");
require_once("mostra-alerta.php");

$conexao = conectar();

falhaDeSeguranca();
mostraAlerta("success");

?>

<table class="table"> 
<?php
$produtos = listarProdutos($conexao);
foreach($produtos as $produto){ ?>
        <tr>
            <td><?= $produto['id'] ?></td>
            <td><?= $produto['nome'] ?></td>
            <td><?= $produto['preco'] ?></td>
            <td><?= substr($produto['descricao'], 0, 40) ?></td>
            <td><?= $produto['categoria_nome'] ?></td>
            <td><a class="btn btn-primary" href="altera-produto-formulario.php?id=<?= $produto['id'] ?>" method="GET">alterar</a></td>
            <td>
                <form action="remove-produto.php?id=<?= $produto['id'] ?>" method="POST">
                    <input type="hidden" name="id" value="<?= $produto['id'] ?>" />
                    <button class="btn btn-danger">remover</button>
                </form>
            </td>
        </tr>
    

<?php
}
?>
</table>

<?php include("rodape.php"); ?>