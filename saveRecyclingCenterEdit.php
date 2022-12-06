<?php
session_start();
if(isset($_POST['update_recycling_Center'])){

    include('config.php');
        $cnpj = $_POST['cnpj'];
        $nome = $_POST['nome'];
        $senhaponto = $_POST['senhaponto'];
        $emailponto = $_POST['emailponto'];
        $telefone = $_POST['telefone'];
        $fundacao = $_POST['fundacao'];
        $cep = $_POST['cep'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $bairro = $_POST['bairro'];
        $rua = $_POST['rua'];
        $numero = $_POST['numero'];
        $complemento = $_POST['complemento'];

        $sqlUpdate = "UPDATE recycling_center SET nome = '$nome', senhaponto = '$senhaponto', emailponto = '$emailponto', telefone = '$telefone', fundacao = '$fundacao', cep = '$cep', cidade = '$cidade', estado = '$estado', bairro = '$bairro', rua = '$rua', numero = '$numero', complemento = '$complemento' where cnpj = '$cnpj'";

        $result = $conexao->query($sqlUpdate);
}
    unset($_SESSION['emailponto']);
    unset($_SESSION['senhaponto']);
    header('location: loginRecycling_Center.php');