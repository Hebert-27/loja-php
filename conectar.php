<?php

/**
 * Método responsável por favor a conexão no banco de dados
 */
function conectar(){
$conexao = mysqli_connect("cdm1s48crk8itlnr.cbetxkdyhwsb.us-east-1.rds.amazonaws.com", "wnl50l7j1dulqtj3", "l1do70wbs02srspz", "hpf3q1so4loynrqh");

return $conexao;
}

?>
