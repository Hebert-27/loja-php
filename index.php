<?php require_once("cabecalho.php"); 
require_once("conectar.php");
require_once("logica-login.php");
require_once("mostra-alerta.php");
    
mostraAlerta('success');
mostraAlerta('danger');

if(verificaSeEstaLogado()){?>
    <h1>Bem vindo!</h1>
    <p class="text-success">Você está logando como: <?= retornaCookieUsuario() ?> 
        <a href="logout.php">Deslogar</a>
    </p>
<?php
} else{
?>
<h2>Login</h2>

<form action="login.php" method="GET"> 
    <table class="table">
        <tr>
            <td>E-mail:</td>
            <td><input class="form-control" type="email" name="email"></td>
        </tr>
        <tr>
            <td>Senha:</td>
            <td><input class="form-control" type="password" name="senha"></td>
        </tr>
        <tr>
            <td><button type="submit" class="btn btn-primary">Login</button></td>
        </tr>
    </table>
</form>
<?php
}

include("rodape.php"); ?>