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
    <link rel="stylesheet" href="CSS/recyclingCenterProfile.css">
    <title>EditProfile</title>
</head>
<body>
    <a href="Systemponto.php">Voltar</a>
     <form action="saveRecyclingCenterEdit.php" method="POST">     

     <div class="box">
             <div class="container">
                <div class="dividir">
                <div id="parte">
                <h1>Configurações</h1>
                <legend>Ponto de Coleta</legend>
                <br>
                <br>
                <div class="input">
                    <input type="text" name="nome" id="nome" value="<?php echo $nome?>"  class="inputUser">
                    <label for="nome" class="labelinput">Nome da Empresa</label>
                </div>
                <br>
                <br>
                
                <div class="input">
                    <input type="text" name="emailponto" id="email" value="<?php echo $emailponto?>"  class="inputUser">
                    <label for="email" class="labelinput">Email</label>
                </div>
                <br>
                <br>
                <div class="input">
                    <input type="text" name="senhaponto" id="senha" value="<?php echo $senhaponto?>" class="inputUser">
                    <label for="senha" class="labelinput">Senha</label>
                </div>
                <br>
                <br>
                
                <div class="input">
                    <input type="tel" name="telefone" id="telefone" value="<?php echo $telefone?>" class="inputUser">
                    <label for="telefone" class="labelinput">Telefone</label>
                </div>
                <br>
                <br>
                <div class="input">
                    <input type="date" name="fundacao" id="fundacão"  value="<?php echo $fundacao?>" class="inputUser">
                    <label for="fundacao" class="labeldata">Data de fundação</label>
                </div>
                <br>
                </div>
    
                <div id="content">
                <p>Quais materiais você recicla?</p>
                <br>
                <div class="alinhamento">
                <input type="checkbox" id="plastico" name="material" value="Plastico">
                <label for="Plastico"><img src="/recifacil/img/Plástico.png"></label>
                <br>
                <br>
                
                <input type="checkbox" id="plastico" name="material" value="Metal">
                <label for="Plastico"><img src="/recifacil/img/Metal.png"></label>
                <br>
                <br>
                
                <input type="checkbox" id="plastico" name="material" value="vidro">
                <label for="Plastico"><img src="/recifacil/img/vidro.png"></label>
                <br>
                <br>
                
                <input type="checkbox" id="plastico" name="material" value="papel">
                <label for="Plastico"><img src="/recifacil/img/Papel.png"></label>
                <br>
                <br>
                <input type="checkbox" id="plastico" name="material" value="E-lixo">
                <label for="Plastico"><img src="/recifacil/img/E-lixo.png"></label>
                </div>
                <br>
                <br>
                <br>
                <div class="input">
                    <input type="text" name="cidade" id="cidade" value="<?php echo $cidade?>" class="inputUser">
                    <label for="cidade" class="labelinput">Cidade</label>
                </div>
                <br>
                
                <div class="input">
                    <input type="text" name="estado" id="estado" value="<?php echo $estado?>" class="inputUser">
                    <label for="estado" class="labelinput">Estado</label>
                </div>
                <br>
                <div class="input">
                    <input type="text" name="rua" id="rua" value="<?php echo $rua?>" class="inputUser">
                    <label for="rua" class="labelinput">Rua</label>
                </div>
                <br>
                <div class="input">
                    <input type="number" name="cep" id="cep"  value="<?php echo $cep?>" class="inputUser">
                    <label for="cep" class="labelinput">CEP</label>
                </div>
                <br>
                <div class="input">
                    <input type="text" name="bairro" id="bairro" value="<?php echo $bairro?>" class="inputUser">
                    <label for="bairro" class="labelinput">Bairro</label>
                </div>
                <br>
                <div class="input">
                    <input type="text" name="numero" id="numero" value="<?php echo $numero?>" class="inputUser">
                    <label for="Numero" class="labelinput">Número</label>
                </div>
                <br>
                <div class="input">
                    <input type="text" name="complemento" id="complemento" value="<?php echo $complemento?>" class="inputUser">
                    <label for="complemento" class="labelinput">Complemento</label>
                </div>
                <br>
                <input type="hidden" name="cnpj" value="<?php echo $cnpj?>">
                <button name="update_recycling_Center" id="update_recycling_Center">Salvar Alterações</button>
                <br>
                </div>
                </div>
            </div>
     </div>
     </form>
</body>
</html> 