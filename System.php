<?php
// Trabalhando com Sessões php
session_start();
include("config.php");
//print_r($_SESSION); Informações da Sessão atual.
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
   unset($_SESSION['email']);
   unset($_SESSION['senha']);
   header('Location: login.php');
}
    $logado = $_SESSION['email'];

    $email = $_SESSION['email'];
    $senha = $_SESSION['senha'];

    $sql = "SELECT users.nome, users.telefone, endereco.cidade from users  inner join endereco on endereco.fk_endereco = users.cpf WHERE email = '$email' AND senha = '$senha'";
    $result = $conexao->query($sql);
    //
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="JS/scriptSystem.js" defer></script>
    <link rel="stylesheet" href="CSS/styleSystem.css">
    <title>Document</title>
</head>
<body>
    <a href="quit.php">Sair</a>
    <br>
    <br>
    <!--Após posicionar onde vai ficar mesmo(criando um nav) apague os br's acima-->
    <a href="profile.php">Configurações</a>
    <?php
    echo "<h1>Bem vindo ao Recifácil <u>$logado</u></h1>";
    ?>
    <section>
        <img src="img/perfil-0.png" alt="Imagem do usuário">
            <?php
                            while($user_data = mysqli_fetch_assoc($result)){
                                echo "<tr>";
                                echo "<p><td>".$user_data['nome']."</td></p>";
                                echo "<p><td>".$user_data['cidade']."</td></p>";
                                echo "<p><td>".$user_data['telefone']."</td></p>";
                                echo "</tr>";
                            }
                        ?>
    </section>


    <div id="minhaDiv" style="display:none">
        Há tantos materiais que podem ser reciclados que seria necessário um livro para entrar em detalhes sobre cada um deles.No entanto, listamos abaixo alguns dos itens recicláveis ​​mais comuns que as pessoas encontram em suas vidas cotidianas.

        <div>
            <img src="img/Plástico.png" alt="icone de Plástico" class="imgs">
            <img src="img/vidro.png" alt="icone de Vidro" class="imgs">
            <img src="img/Metal.png" alt="icone de Metal" class="imgs">
            <img src="img/Papel.png" alt="icone de Papel" class="imgs">
            <img src="img/E-lixo.png" alt="icone de E-lixo" class="imgs">
        </div>

        <div>
            <p><label for="plastico">Plástico</label></p><input type="checkbox" name="plastico" id="plastico">
            <p><label for="vidro">Vidro</label></p><input type="checkbox" name="vidro" id="vidro">
            <p><label for="metal">Metal</label></p><input type="checkbox" name="metal" id="metal">
            <p><label for="papel">Papel</label></p><input type="checkbox" name="papel" id="papel">
            <p><label for="e-lixo">E-lixo</label></p><input type="checkbox" name="e-lixo" id="e-lixo">
        </div>
        
        <!--Adicionar o nome do que cada ícone representa, provavelmente utilizando flexbox.-->
        <!--Fazer Listas de 'Material está enviando','Peso aproximado'-->
        

        <textarea name="text" id="text" cols="30" rows="10" placeholder="Digite alguma informação extra que devemos estar cientes   (este campo não é obrigatório)"></textarea> 
        <ul>
            <!--Criar tabela 'pedidos' se se relacione com users, e também consica o endereco do user-->
            <li name="leve">1kg á 3kg</li>
            <li name="medio">3kg á 7kg</li>
            <li name="pesado">7kg á 15kg</li>
            <li name="muitopesado">Mais de 15kg</li>
        </ul>

        <br><input type="submit" value="Enviar">
    </div>

    <button type="button" id="botao" onclick="Mudarestado('minhaDiv')" onclick="change()">Solicitar Coleta</button>
   
</body>
</html>