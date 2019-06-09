<?php

/**
 * Método responsável por favor a conexão no banco de dados
 */
function conectar(){
$conexao = mysqli_connect("s3lkt7lynu0uthj8.cbetxkdyhwsb.us-east-1.rds.amazonaws.com", "inw4t7uz1z4u7d2z", "kn0p05f74mzvil15", "owwpgdlhr9qppan1");

return $conexao;
}

?>
