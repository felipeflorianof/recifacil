<?php

    if(isset($_POST['submit'])){

        include_once('config.php');

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

        $result = mysqli_query($conexao, "INSERT INTO users(cpf, nome, senha, email, telefone, sexo, nascimento, cep, cidade, estado, bairro, rua, numero, complemento) VALUES ('$cpf','$nome','$senha','$email','$telefone','$sexo','$nascimento', '$cep', '$cidade', '$estado', '$bairro', '$rua', '$numero', '$complemento')");
        
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
    <a href="index.php">Voltar</a>
        <h1>Cadastro</h1>
     <form action="cadastro.php" method="POST">     

                    <!-- Users Table -->
        <p><input type="text" name="nome" id="nome"required>
            <label for="nome">Nome completo</label></p>

        <p><input type="number" name="cpf" id="cpf">
            <label for="cpf">CPF</label></p>

        <p><input type="password" name="senha" id="senha" required>
            <label for="senha">Senha:</label></p>
                
        <p><input type="text" name="email" id="email"required>
            <label for="email">Email</label></p>
                
        <p><input type="tel" name="telefone" id="telefone"required>
            <label for="telefone">Telefone</label></p>
                
    <p>Sexo:</p>
        <p><input type="radio" id="feminino" name="sexo" value="feminino" required>
            <label for="feminino">Feminino</label></p>
               
        <p><input type="radio" id="masculino" name="sexo" value="masculino" required>
            <label for="masculino">Masculino</label></p>

        <p><input type="radio" id="outro" name="sexo" value="outro" required>
            <label for="outro">Outro</label></p>

        <p><input type="radio" id="pfnd" name="sexo" value="pfnd" required>
            <label for="pfnd">Prefiro não dizer</label></p>
                
        <p><label for="nascimento"><b>Data de Nascimento:</b></label>
            <input type="date" name="nascimento" id="nascimento" required></p>

        
     <!--Address-->

     <p><input type="number" name="cep" id="cep">
            <label for="cep">Cep</label></p>

        <p><input type="text" name="cidade" id="cidade" required>
            <label for="cidade">Cidade</label></p>
                
        <p><input type="text" name="estado" id="estado" required>
            <label for="estado">Estado</label></p>
                
        <p><input type="text" name="bairro" id="bairro" required>
            <label for="bairro">bairro</label></p>

        <p><input type="text" name="rua" id="rua">
            <label for="rua">Rua</label></p>

        <p><input type="text" name="numero" id="numero" size="3">
            <label for="Numero">Numero</label></p>

        <p><input type="text" name="complemento" id="complemento" >
            <label for="rua">complemento</label></p>
                
        <p><input type="submit" name="submit" id="submit"></p>
        </form>
</body>
</html> 