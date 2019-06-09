<?php
require_once("conectar.php"); 
/**
 * Método responsável por inserir um produto no banco de dados
 */
function insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado){
    $query =    "INSERT INTO produtos(nome, preco, descricao, categoria_id, usado) 
                VALUES ('$nome', $preco, '$descricao', $categoria_id, $usado)";

    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

/**
 * Método responsável pela listagem dos produtos que estão salvos no banco de dados
 */
function listarProdutos($conexao){
    $produtos = array();

    $query =    "SELECT produtos.*, categorias.nome as categoria_nome 
                FROM produtos
                JOIN categorias
                ON produtos.categoria_id = categorias.id;";

    $resultado = mysqli_query($conexao, $query);
    while($produto = mysqli_fetch_assoc($resultado)){
        array_push($produtos, $produto);
    }
    return $produtos;
}

/**
 * Método responsável por deletar o produto selecionado
 */
function deletarProduto($conexao, $id){
    $query =    "DELETE FROM produtos 
                WHERE id = {$id}";

    mysqli_query($conexao, $query); ?>
    <p class="text-success">ID <?=$id?> removido com sucesso!</p>
<?php    
}

function buscaProduto($conexao, $id){
    $query = "SELECT * FROM produtos WHERE id = {$id}"; 
    $resultado = mysqli_query($conexao, $query);
    $produto = mysqli_fetch_assoc($resultado);
    return $produto;

}

?>