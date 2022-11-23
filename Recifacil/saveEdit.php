<?php
session_start();
if(isset($_POST['update'])){

    include('config.php');
        $cpf = $_POST['cpf'];
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['sexo'];
        $nascimento = $_POST['nascimento'];
        $cep = $_POST['cep'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $bairro = $_POST['bairro'];
        $rua = $_POST['rua'];
        $numero = $_POST['numero'];
        $complemento = $_POST['complemento'];

        $sqlUpdate = "UPDATE users SET nome = '$nome', senha = '$senha', email = '$email', telefone = '$telefone', sexo = '$sexo', nascimento = '$nascimento', cep = '$cep', cidade = '$cidade', estado = '$estado', bairro = '$bairro', rua = '$rua', numero = '$numero', complemento = '$complemento' where cpf = '$cpf'";

        $result = $conexao->query($sqlUpdate);
}
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('location: login.php');