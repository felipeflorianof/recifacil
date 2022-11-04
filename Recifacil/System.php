<?php
session_start();
include("config.php");

if(isset($_POST['request'])){

    $plastico =  $_POST['plastico'];
    $vidro =     $_POST['vidro'];
    $metal =     $_POST['metal'];
    $papel =     $_POST['papel'];
    $elixo =     $_POST['elixo'];
    $pesomedio = $_POST['pesomedio'];

$sqlpedido = mysqli_query($conexao, "INSERT INTO pedidos(plastico, vidro, metal, papel, elixo, pesomedio) VALUES('$plastico', '$vidro', '$metal', '$papel', '$elixo', '$pesomedio')");
header('Location: System.php');
}

if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){

   unset($_SESSION['email']);
   unset($_SESSION['senha']);
   header('Location: login.php');
}
    //$logado = $_SESSION['email'];
    $email = $_SESSION['email'];
    $senha = $_SESSION['senha'];


    $sql = "SELECT nome, telefone, cidade, cpf from users WHERE email = '$email' AND senha = '$senha'";
    $result = $conexao->query($sql);
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
    <main>
        <section class="perfil">
        <figure class="foto">
            <img src="img/perfil-0.png" alt="foto de perfil"></img>
        </figure>
        <section class="dados">
           <div>
           <?php
                            while($user_data = mysqli_fetch_assoc($result)){
                                echo "<tr>";
                                echo "<p><td>".$user_data['nome']."</td></p>";
                                echo "<p><td>".$user_data['cidade']."</td></p>";
                                echo "<p><td>".$user_data['telefone']."</td></p>";
                                echo "<td>
                                <a href='userprofile.php?cpf=$user_data[cpf]'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-gear' viewBox='0 0 16 16'>
                                <path d='M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z'/>
                                <path d='M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z'/></svg>
                                </a>
                                </td>";
                            
                            }
                        ?>  
                        
           </div>        
        </section>
    </section>
    </main>
                                
<form action="System.php" method="POST">
    <div id="minhaDiv">
        Há tantos materiais que podem ser reciclados que seria necessário um livro para entrar em detalhes sobre cada um deles.No entanto, listamos abaixo alguns dos itens recicláveis ​​mais comuns que as pessoas encontram em suas vidas cotidianas.
        <br><br><br><br>
        <!-- Simbolos de reciclagem -->
 <section class="materiais">
        <section class="material">
        <h3 class="types">Plástico</h3>
            <figure>
              <img src="img/Plástico.png" alt="Reciclagem de Plástico">   
            </figure>
            <div>
                <input type="checkbox" name="plastico" id="plastico" value="plastico">
            </div>        
        </section>
        <section class="material">
        <h3 class="types">Vidro</h3>
            <figure>
                 <img src="img/vidro.png" alt="Reciclagem de Vidro">
            </figure>         
            <div>
                <input type="checkbox" name="vidro" id="vidro" value="vidro">  
            </div>   
        </section>
        <section class="material">
        <h3 class="types">Metal</h3>
            <figure>
                <img src="img/Metal.png" alt="Reciclagem de Metal">
            </figure>
            <div>
                <input type="checkbox" name="metal" id="metal" value="metal">
            </div>                            
        </section>
        <section class="material">
        <h3 class="types">Papel</h3>
            <figure>
                <img src="img/Papel.png" alt="Reciclagem de Papel">
            </figure>       
            <div>
                <input type="checkbox" name="papel" id="papel" value="papel">
            </div>              
        </section>
        <section class="material">
        <h3 class="types">E-lixo</h3>
            <figure>
                <img src="img/E-lixo.png" alt="Reciclagem de E-lixo">
            </figure>    
            <div>
                <input type="checkbox" name="elixo" id="elixo" value="elixo">
            </div>                
        </section>
    </section>
    <br><div><input type="number" name="pesomedio" id="peso" placeholder="Peso Médio da carga:" required></div><br>
        <input type="submit" name="request" value="Solicitar Coleta">
    </div>
</form>

</body>
</html>