<?php

/**
 * Método responsável por favor a conexão no banco de dados
 */
function conectar(){
$conexao = mysqli_connect("localhost", "root", "", "loja");

return $conexao;
}

?>