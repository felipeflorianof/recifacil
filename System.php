<?php
session_start();
include("config.php");

if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){

   unset($_SESSION['email']);
   unset($_SESSION['senha']);
   header('Location: login.php');
}
    //$logado = $_SESSION['email'];
    $email = $_SESSION['email'];
    $senha = $_SESSION['senha'];


    $sqlpedidos = "SELECT nome, telefone, cidade, cpf from users WHERE email = '$email' AND senha = '$senha'";
    $result1 = $conexao->query($sqlpedidos);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styleSystem.css">
    <script src="JS/scriptSystem.js" defer></script>
    
    <title>Document</title>
</head>
<body>
    <a href="quitponto.php">Sair</a>
<main>
    <div class="perfil">
            <img src="img/Doador.png" alt="foto de perfil"></img>
        <div class="dados">
           <?php
                            while($user_data = mysqli_fetch_assoc($result1)){
                                echo "<div class='config'>
                                <a href='userprofile.php?cpf=$user_data[cpf]'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='30' height='30' fill='currentColor' class='bi bi-person-gear' viewBox='0 0 16 16'>
                                <path d='M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm.256 7a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Zm3.63-4.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z'/>
                                </svg>
                                </a>
                                </div>";
                                echo "<p><td>".$user_data['nome']."</td></p>";
                                echo "<p><td>".$user_data['cidade']."</td></p>";
                                echo "<p><td>".$user_data['telefone']."</td></p>";
                                $cpf = $user_data['cpf'];
                            }
            ?>     
        </div>
    </div>
</main>
<?php
    if(isset($_POST['request'])){
        
        $plastico =  $_POST['plastico'];
        $vidro =     $_POST['vidro'];
        $metal =     $_POST['metal'];
        $papel =     $_POST['papel'];
        $elixo =     $_POST['elixo'];
        $pesomedio = $_POST['pesomedio'];
        $fk_users = $cpf;      
        $sqlpedido = mysqli_query($conexao, "INSERT INTO pedidos(plastico, vidro, metal, papel, elixo, pesomedio, fk_users) VALUES('$plastico', '$vidro', '$metal', '$papel', '$elixo', '$pesomedio', '$fk_users')");
            header('Location: System.php');
    }

?>
<form action="System.php" method="POST">
    <div id="minhaDiv">
        Há tantos materiais que podem ser reciclados que seria necessário um livro para entrar em detalhes sobre cada um deles.No entanto, listamos abaixo alguns dos itens recicláveis ​​mais comuns que as pessoas encontram em suas vidas cotidianas.
        <br><br><br><br>
        <!-- Simbolos de reciclagem -->
 <section class="materiais">
        <section class="material">
        <h3 class="types">Plástico</h3>
        <label for="plastico">
            <figure>
              <img src="img/Plástico.png" alt="Reciclagem de Plástico">   
            </figure>
            <div>
                <input type="checkbox" name="plastico" id="plastico" value="plastico">
            </div>
        </label>        
        </section>
        <section class="material">
        <h3 class="types">Vidro</h3>
        <label for="vidro">
            <figure>
                 <img src="img/vidro.png" alt="Reciclagem de Vidro">
            </figure>         
            <div>
                <input type="checkbox" name="vidro" id="vidro" value="vidro">  
            </div>   
            </label>
        </section>
        <section class="material">
        <h3 class="types">Metal</h3>
        <label for="metal">
            <figure>
                <img src="img/Metal.png" alt="Reciclagem de Metal">
            </figure>
            <div>
                <input type="checkbox" name="metal" id="metal" value="metal">
            </div>       
            </label>                     
        </section>
        <section class="material">
        <h3 class="types">Papel</h3>
        <label for="papel">
            <figure>
                <img src="img/Papel.png" alt="Reciclagem de Papel">
            </figure>       
            <div>
                <input type="checkbox" name="papel" id="papel" value="papel">
            </div>      
            </label>        
        </section>
        <section class="material">
        <h3 class="types">E-lixo</h3>
        <label for="elixo">
            <figure>
                <img src="img/E-lixo.png" alt="Reciclagem de E-lixo">
            </figure>    
            <div>
                <input type="checkbox" name="elixo" id="elixo" value="elixo">
            </div>     
            </label>           
        </section>
    </section>
    <br><div><input type="number" name="pesomedio" id="peso" placeholder="Peso Médio da carga:" required></div><br>
        <input type="submit" name="request" value="Solicitar Coleta">
    </div>
</form>

<?php
    $sqlshowpedidos = "SELECT pedidos.id, pedidos.plastico, pedidos.vidro, pedidos.metal, pedidos.papel, pedidos.elixo, pedidos.pesomedio, users.nome, users.telefone, users.cidade from pedidos inner join users on pedidos.fk_users = users.cpf WHERE email = '$email' AND senha = '$senha'";
    $result2 = $conexao->query($sqlshowpedidos);

        while($user_data = mysqli_fetch_assoc($result2)){
            echo "<div class='pedidosDeUsers'>";
            echo "<p>Materiais: <td>".$user_data['plastico']." ".$user_data['vidro']." ".$user_data['metal']." ".$user_data['papel']." ".$user_data['elixo'];
            echo "<p>Peso em Média: ".$user_data['pesomedio']."Kg</p>";
            echo "<p>Solicitante: <td>".$user_data['nome']."</td></p>";
            echo "<p>Contato: <td>".$user_data['telefone']."</td></p>";
            echo "<p>Cidade: <td>".$user_data['cidade']."</td></p>";
            echo "</div>";
        }
        ?>

</body>
</html>