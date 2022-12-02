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
    <link rel="stylesheet" href="CSS/userprofile.css">
    <title>EditProfile</title>
</head>
<body>
    <a href="System.php">Voltar</a>
     <form action="saveEdit.php" method="POST">     
     <div class="box">
             <div class="container">
                
                <div class="dividir">
                <div id="parte">
                    <h1>Configurações</h1>
                    <legend>Doador Recifacil</legend>
                    <br>
                    <br>
                    <div class="lado">
                    <div class="input">
                        <input type="text" name="nome" id="nome" class="inputUser"  value="<?php echo $nome?>"  >
                        <label for="nome" class="labelinput">Nome Completo</label>
                    </div>
                    <br>
                    <br>
                    <p>Seu Sexo:</p>
                    <br>
                    <input type="radio" id="feminino" name="sexo" value="feminino"  <?php echo ($sexo == 'feminino') ? 'checked': '' ?> >
                    <label for="feminino">Feminino</label></p>
                       
                  <p><input type="radio" id="masculino" name="sexo" value="masculino" <?php echo ($sexo == 'masculino') ? 'checked': '' ?>>
                    <label for="masculino">Masculino</label></p>
        
                  <p><input type="radio" id="outro" name="sexo" value="outro" <?php echo ($sexo == 'outro') ? 'checked': '' ?>  >
                    <label for="outro">Outro</label></p>
        
                  <p><input type="radio" id="pfnd" name="sexo" value="pfnd"  <?php echo ($sexo == 'pfnd') ? 'checked': '' ?> >
                    <label for="pfnd">Prefiro não dizer</label></p>
                    <br>
                    <br>
                    
                    <div class="input">
                        <input type="text" name="email" id="email" class="inputUser" value="<?php echo $email?>" >
                        <label for="email" class="labelinput">Email</label>
                    </div>
                    <br>
                    <br>
                    <div class="input">
                        <input type="password" name="senha" id="senha" class="inputUser" value="<?php echo $senha?>">
                        <label for="senha" class="labelinput">Senha</label>
                    </div>
                    <br>
                    <br>
                    <div class="input">
                        <input type="tel" name="telefone" id="telefone" class="inputUser" value="<?php echo $telefone?>">
                        <label for="telefone" class="labelinput">Telefone</label>
                    </div>
                    <br>
                    <br>
                    <div class="input">
                        <input type="date" name="nascimento" id="nascimento" class="inputUser" value="<?php echo $nascimento?>">
                        <label for="nascimento" class="labeldata">Data de Nascimento</label>
                    </div>
                    </div>
                    <br>
                    </div>
        
                    <div id="content">
                    <div class="input">
                        <input type="text" name="cidade" id="cidade" class="inputUser" value="<?php echo $cidade?>">
                        <label for="cidade" class="labelinput">Cidade</label>
                    </div>
                    <br>
                    <br>
                    
                    <div class="input">
                        <input type="text" name="estado" id="estado" class="inputUser" value="<?php echo $estado?>">
                        <label for="estado" class="labelinput">Estado</label>
                    </div>
                    <br>
                    <br>
                    
                    <div class="input">
                        <input type="text" name="rua" id="rua" class="inputUser" value="<?php echo $rua?>">
                        <label for="rua" class="labelinput">Rua</label>
                    </div>
                    <br>
                    <br>
                    <div class="input">
                        <input type="number" name="cep" id="cep" class="inputUser" value="<?php echo $cep?>">
                        <label for="cep" class="labelinput">CEP</label>
                    </div>
                    <br>
                    <br>
                    <div class="input">
                        <input type="text" name="bairro" id="bairro" class="inputUser" value="<?php echo $bairro?>">
                        <label for="bairro" class="labelinput">Bairro</label>
                    </div>
                    <br>
                    <br>
                    <div class="input">
                        <input type="text" name="numero" id="numero" class="inputUser" value="<?php echo $numero?>">
                        <label for="Numero" class="labelinput">Número</label>
                    </div>
                    <br>
                    <br>
                    <div class="input">
                        <input type="text" name="complemento" id="complemento" class="inputUser" value="<?php echo $complemento?>">
                        <label for="rua" class="labelinput">Complemento</label>
                    </div>
                    <input type="hidden" name="cpf" value="<?php echo $cpf?>">

                    <br>
                    <br>
                <button id="submit" name="update" id="update">Salvar Alterações</button>
                    <br>
                    </div>
                    </div>
                </div>
                </div>
               
            </div>
     </div>
     </form>
</body>
</html> 