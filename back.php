<?php

//chmando o arquivo que conecta no banco
require_once('conexao.php');

$loginSucesso = "login efetuado";
$loginFracasso = "Dados errados";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    //verifica se o botao de name="login" ou "cadastro" foi clickado
    if(isset($_POST['login'])){
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
    } elseif (isset($_POST['cadastro'])){
        //verifica se os campos foram preenchidos
        if(isset($_POST['usuario']) && isset($_POST['senha'])){

            //obtém os valores digitados
            $usuario = addslashes($_POST['usuario']);
            $senha = addslashes($_POST['senha']);
    
            //consulta SQL para inserir os dados no banco
            $insert = "INSERT INTO login (usuario, senha) VALUES ('$usuario', '$senha')";
    
            //executa a consulta
            $stmt = $conn->query($insert);
    
            //se $stmt for verdadeiro
            if($stmt){
                //registro inserido com sucesso
                echo '<script>alert("Cadastro realizado com sucesso");</script>';
            } else {
                //ocorreu um erro ao inserir o registro
                echo '<script>alert("Erro ao cadastrar");</script>';
            }
        }
    } else {
        echo '<script>alert("Preencha todos os campos");</script>';
    }
    
}

/*-------------------------------------------------------------
colocar a pasta no C:\xampp\htdocs
abrir no navegador localhost/nome da pasta/
*/
?>