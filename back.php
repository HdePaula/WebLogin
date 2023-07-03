<?php

$loginSucesso = "login efetuado";
$loginFracasso = "Dados errados";

//verifica se os campos foram preenchidos
if(isset($_POST['usuario'])) && isset($_POST['senha']){

    //obtem os valores digitados
    $usuario = addslashes($_POST['usuario']);
    $senha = addslashes($_POST['senha']);

    //verificando se os dados estao corretos
    if($usuario === "henrique" && $senha === "123"){
        echo '<script>alert("' . $loginSucesso . '");</script>';
    } else {
        echo '<script>alert("' . $loginFracasso . '");</script>';
    }
} else {
    echo '<script>alert("Preencha todos os campos");</script>';
}
?>