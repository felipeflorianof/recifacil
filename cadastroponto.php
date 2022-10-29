<?php
    if(isset($_POST['submit'])){

        include_once('config.php');

        $cnpj = $_POST['cnpj'];
        $nome = $_POST['nome'];
        $senhaponto = $_POST['senhaponto'];
        $emailponto = $_POST['emailponto'];
        $telefone = $_POST['telefone'];
        $fundacao = $_POST['fundacao'];
        $fk_endereco = $_POST['cep'];

        $cep = $_POST['cep'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $bairro = $_POST['bairro'];
        $rua = $_POST['rua'];
        $numero = $_POST['numero'];
        $complemento = $_POST['complemento'];
        

        $resultponto = mysqli_query($conexao, "INSERT INTO colaborador(cnpj, nome, senhaponto, emailponto, telefone, fundacao, fk_endereco) VALUES ('$cnpj','$nome','$senhaponto','$emailponto','$telefone','$sexo','$fundacao', '$fk_endereco')");

        $resultponto = mysqli_query($conexao, "INSERT INTO endereco(cep, cidade, estado, bairro, rua, numero, complemento) VALUES ('$cep', '$cidade', '$estado', '$bairro', '$rua', '$numero', '$complemento')");
        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <a href="index.html">Voltar</a>
        <h1>Cadastro</h1>
    <form action="cadastro.php" method="POST">     
                
                    <!-- Users Table -->
        <p><input type="text" name="nome" id="nome"required>
            <label for="nome">Nome Da empresa</label></p>

        <p><input type="number" name="cnpj" id="cnpj">
            <label for="cnpj">CNPJ</label></p>

        <p><input type="password" name="senha" id="senha" required>
            <label for="senha">Senha:</label></p>
                
        <p><input type="text" name="email" id="email"required>
            <label for="email">Email</label></p>
                
        <p><input type="tel" name="telefone" id="telefone"required>
            <label for="telefone">Telefone</label></p>
                
                
        <p><label for="fundacao"><b>Data de Fundação:</b></label>
            <input type="date" name="fundacao" id="fundacao" required></p>


        <!--Address-->
            
        <p><input type="number" name="cep" id="cep">
            <label for="cep">Cep</label></p>

        <p><input type="text" name="cidade" id="cidade" required>
            <label for="cidade">Cidade</label></p>
                
        <p><input type="text" name="estado" id="estado" required>
            <label for="estado">Estado</label></p>
                
        <p><input type="text" name="bairro" id="bairro" required>
            <label for="bairro">bairro</label></p>

        <p><input type="text" name="rua" id="rua" required>
            <label for="rua">Rua</label></p>

        <p><input type="text" name="numero" id="numero" size="3" required>
            <label for="Numero">Numero</label></p>

        <p><textarea name="complemento" id="complemento" cols="30" rows="10" required></textarea>
            <label for="rua">complemento</label></p>

        <p><input type="submit" name="submit" id="submit"></p>
    </form>

        <a href="">Cadastrar-se como ponto de Coleta</a>
</body>
</html>