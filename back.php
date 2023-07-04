<?php

//chmando o arquivo que conecta no banco
require_once('db_login.php');

$loginSucesso = "login efetuado";
$loginFracasso = "Dados errados";

//verifica se os campos foram preenchidos
if(isset($_POST['usuario']) && isset($_POST['senha'])){

    //obtem os valores digitados
    $usuario = addslashes($_POST['usuario']);
    $senha = addslashes($_POST['senha']);

    //procura os dados no banco
    $select = "SELECT * FROM login WHERE usuario='" . $usuario . "' AND senha='" . $senha . "'";
    $stmt = $conn->query($select);

    // Verifica se os dados foram encontrados
    $count = $stmt->rowCount();

    //verificando se os dados estao corretos
    if($count != 0){
        //alert usando java script
        echo '<script>alert("' . $loginSucesso . '");</script>';
    } else {
        echo '<script>alert("' . $loginFracasso . '");</script>';
    }
} else {
    echo '<script>alert("Preencha todos os campos");</script>';
}



/*-------------------------------------------------------------
colocar a pasta no C:\xampp\htdocs
abrir no navegador localhost/nome da pasta/
*/



/*-------------------------------------------------------------
$loginSucesso = "login efetuado";
$loginFracasso = "Dados errados";

//verifica se os campos foram preenchidos
if(isset($_POST['usuario']) && isset($_POST['senha'])){

    //obtem os valores digitados
    $usuario = addslashes($_POST['usuario']);
    $senha = addslashes($_POST['senha']);

    //verificando se os dados estao corretos
    if($usuario === "henrique" && $senha === "123"){
        //alert usando java script
        echo '<script>alert("' . $loginSucesso . '");</script>';
    } else {
        echo '<script>alert("' . $loginFracasso . '");</script>';
    }
} else {
    echo '<script>alert("Preencha todos os campos");</script>';
}
*/
?>