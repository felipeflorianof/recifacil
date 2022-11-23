<?php
    session_start();
    
    if(!empty($_GET['cnpj'])){
        include_once('config.php');

        if((!isset($_SESSION['emailponto']) == true) and (!isset($_SESSION['senhaponto']) == true)){
            unset($_SESSION['emailponto']);
            unset($_SESSION['senhaponto']);
            header('Location: loginRecycling_Center.php');
         }
        $emailponto = $_SESSION['emailponto'];
        $senhaponto = $_SESSION['senhaponto'];

        $cnpj = $_GET['cnpj'];
        $sqlSelect = "SELECT * FROM recycling_center WHERE cnpj = '$cnpj' AND emailponto = '$emailponto' AND senhaponto = '$senhaponto'";
        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0){

            while($user_data = mysqli_fetch_assoc($result)){

        $nome = $user_data['nome'];
        $senhaponto = $user_data['senhaponto'];
        $emailponto = $user_data['emailponto'];
        $telefone = $user_data['telefone'];
        $fundacao = $user_data['fundacao'];
        $cep = $user_data['cep'];
        $cidade = $user_data['cidade'];
        $estado = $user_data['estado'];
        $bairro = $user_data['bairro'];
        $rua = $user_data['rua'];
        $numero = $user_data['numero'];
        $complemento = $user_data['complemento'];

            }
        }else{
            header('location: Systemponto.php');
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
    <a href="Systemponto.php">Voltar</a>
        <h1>Editar Perfil</h1>
     <form action="saveRecyclingCenterEdit.php" method="POST">     

                    <!-- Users Table -->
        <p><input type="text" name="nome" id="nome" value="<?php echo $nome?>" required>
            <label for="nome">Nome</label></p>


        <p><input type="text" name="senhaponto" id="senha" value="<?php echo $senhaponto?>" required>
            <label for="senha">Senha:</label></p>
                
        <p><input type="text" name="emailponto" id="email" value="<?php echo $emailponto?>" required>
            <label for="email">Email</label></p>
                
        <p><input type="tel" name="telefone" id="telefone" value="<?php echo $telefone?>" required>
            <label for="telefone">Telefone</label></p>
                               
        <p><label for="fundacao"><b>Fundação da Empresa:</b></label>
            <input type="date" name="fundacao" id="fundacao" value="<?php echo $fundacao?>" required></p>

        
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
                
        <input type="hidden" name="cnpj" value="<?php echo $cnpj?>">
        <p><input type="submit" name="update_recycling_Center" id="update_recycling_Center"></p>

        </form>

</body>
</html> 