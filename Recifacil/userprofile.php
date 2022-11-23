<?php
    session_start();
    
    if(!empty($_GET['cpf'])){
        include_once('config.php');

        if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');
         }
        $email = $_SESSION['email'];
        $senha = $_SESSION['senha'];

        $cpf = $_GET['cpf'];
        $sqlSelect = "SELECT * FROM users WHERE cpf = '$cpf' AND email = '$email' AND senha = '$senha'";
        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0){

            while($user_data = mysqli_fetch_assoc($result)){

        $nome = $user_data['nome'];
        $senha = $user_data['senha'];
        $email = $user_data['email'];
        $telefone = $user_data['telefone'];
        $sexo = $user_data['sexo'];
        $nascimento = $user_data['nascimento'];
        $cep = $user_data['cep'];
        $cidade = $user_data['cidade'];
        $estado = $user_data['estado'];
        $bairro = $user_data['bairro'];
        $rua = $user_data['rua'];
        $numero = $user_data['numero'];
        $complemento = $user_data['complemento'];

            }
        }else{
            header('location: System.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EditProfile</title>
</head>
<body>
    <a href="System.php">Voltar</a>
        <h1>Editar Perfil</h1>
     <form action="saveEdit.php" method="POST">     

                    <!-- Users Table -->
        <p><input type="text" name="nome" id="nome" value="<?php echo $nome?>" required>
            <label for="nome">Nome completo</label></p>


        <p><input type="password" name="senha" id="senha" value="<?php echo $senha?>" required>
            <label for="senha">Senha:</label></p>
                
        <p><input type="text" name="email" id="email" value="<?php echo $email?>" required>
            <label for="email">Email</label></p>
                
        <p><input type="tel" name="telefone" id="telefone" value="<?php echo $telefone?>" required>
            <label for="telefone">Telefone</label></p>
                
    <p>Sexo:</p>
        <p><input type="radio" id="feminino" name="sexo" value="feminino" <?php echo ($sexo == 'feminino') ? 'checked': '' ?> required>
            <label for="feminino">Feminino</label></p>
               
        <p><input type="radio" id="masculino" name="sexo" value="masculino" <?php echo ($sexo == 'masculino') ? 'checked': '' ?> required>
            <label for="masculino">Masculino</label></p>

        <p><input type="radio" id="outro" name="sexo" value="outro" <?php echo ($sexo == 'outro') ? 'checked': '' ?> required>
            <label for="outro">Outro</label></p>

        <p><input type="radio" id="pfnd" name="sexo" value="pfnd" <?php echo ($sexo == 'pfnd') ? 'checked': '' ?> required>
            <label for="pfnd">Prefiro não dizer</label></p>
                
        <p><label for="nascimento"><b>Data de Nascimento:</b></label>
            <input type="date" name="nascimento" id="nascimento" value="<?php echo $nascimento?>" required></p>

        
     <!--Address-->

     <p><input type="number" name="cep" id="cep" value="<?php echo $cep?>">
            <label for="cep">Cep</label></p>

        <p><input type="text" name="cidade" id="cidade" value="<?php echo $cidade?>" required>
            <label for="cidade">Cidade</label></p>
                
        <p><input type="text" name="estado" id="estado" value="<?php echo $estado?>" required>
            <label for="estado">Estado</label></p>
                
        <p><input type="text" name="bairro" id="bairro" value="<?php echo $bairro?>" required>
            <label for="bairro">bairro</label></p>

        <p><input type="text" name="rua" id="rua" value="<?php echo $rua?>">
            <label for="rua">Rua</label></p>

        <p><input type="text" name="numero" id="numero" size="3" value="<?php echo $numero?>">
            <label for="Numero">Numero</label></p>

        <p><input type="text" name="complemento" id="complemento" value="<?php echo $complemento?>"></input>
            <label for="rua">complemento</label></p>
                
        <input type="hidden" name="cpf" value="<?php echo $cpf?>">
        <p><input type="submit" name="update" id="update"></p>

        </form>

</body>
</html> 