<?php
session_start();
include('config.php');

if((!isset($_SESSION['emailponto']) == true) and (!isset($_SESSION['senhaponto']) == true)){

    unset($_SESSION['emailponto']);
    unset($_SESSION['senhaponto']);
    header('Location: loginponto.php');
}
     $emailponto = $_SESSION['emailponto'];
     $senhaponto = $_SESSION['senhaponto'];
 
     $sql3 = "SELECT nome, telefone, cidade, cnpj from recycling_center WHERE emailponto = '$emailponto' AND senhaponto = '$senhaponto'";
     $result3 = $conexao->query($sql3);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"  integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"  crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/styleSystemponto.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <a href="quitponto.php">Sair</a>
<main>
    <div class="perfil">
            <img src="img/Ponto.png" alt="foto de perfil"></img>
        <div class="dados">
           <?php
                            while($user_data = mysqli_fetch_assoc($result3)){
                                echo "<div class='config'>
                                <a href='RecyclingCenterprofile.php?cnpj=$user_data[cnpj]'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='30' height='30' fill='currentColor' class='bi bi-person-gear' viewBox='0 0 16 16'>
                                <path d='M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm.256 7a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Zm3.63-4.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z'/>
                                </svg>
                                </a>";
                                echo "<h2><br>".$user_data['nome']."</h2>";
                                
                                echo "</div>";
                                echo "<br>".$user_data['cidade'];
                                echo "<br>".$user_data['telefone'];
                                $cnpj = $user_data['cnpj'];
                            }
            ?>     
        </div>
    </div>
</main>
    
<br><br><br>
<h2>Pedidos De Coleta:</h2>

<div class="box-search">
    <input type="search" class="form-control w-25" placeholder="Pesquise Por Cidade" id="pesquisar">   
    <button onclick="searchData()" class="btn btn-primary">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg>
    </button>
</div>

    <?php
            
            if(!empty($_GET['search'])){

                $data = $_GET['search'];
                $sql = "SELECT pedidos.id, pedidos.plastico, pedidos.vidro, pedidos.metal, pedidos.papel, pedidos.elixo, pedidos.pesomedio, users.nome, users.telefone, users.cidade, users.cpf from pedidos inner join users  on pedidos.fk_users = users.cpf WHERE users.cidade LIKE '%$data%' or users.nome LIKE '%$data%' or users.estado LIKE '%$data%' or users.email LIKE '%$data%' or users.telefone LIKE '%$data%'";
                $result = $conexao->query($sql);

                while($user_data = mysqli_fetch_assoc($result)){
                    echo "<div class='pedidosDeUsers'>";
                    $id = $user_data['id'];
                    echo "<p>Materiais: ".$user_data['plastico']." ".$user_data['vidro']." ".$user_data['metal']." ".$user_data['papel']." ".$user_data['elixo'];
                    echo "<p>Solicitante: <td>".$user_data['nome']."</td></p>";
                    echo "<p>Contato: <td>".$user_data['telefone']."</td></p>";
                    echo "<p>Cidade: <td>".$user_data['cidade']."</td></p>";     
                    echo "<p>Peso em Média: <td>".$user_data['pesomedio']."Kg</td></p>";     
                    echo "<a class='trash' href='delete.php?id=$user_data[id]'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                    </svg>
                    </a></p>";
                    echo "</div>";
                }

            }else{

                $sqlshowpedidos = "SELECT pedidos.id, pedidos.plastico, pedidos.vidro, pedidos.metal, pedidos.papel, pedidos.elixo, pedidos.pesomedio, users.nome, users.telefone, users.cidade, users.cpf from pedidos inner join users  on pedidos.fk_users = users.cpf ORDER BY id DESC";
                $resultpedidos = $conexao->query($sqlshowpedidos);


                while($user_data = mysqli_fetch_assoc($resultpedidos)){
                    echo "<div class='pedidosDeUsers'>";
                    $id = $user_data['id'];
                    echo "<p>Materiais: ".$user_data['plastico']." ".$user_data['vidro']." ".$user_data['metal']." ".$user_data['papel']." ".$user_data['elixo'];
                    echo "<p>Solicitante: <td>".$user_data['nome']."</td></p>";
                    echo "<p>Contato: <td>".$user_data['telefone']."</td></p>";
                    echo "<p>Cidade: <td>".$user_data['cidade']."</td></p>";     
                    echo "<p>Peso em Média: <td>".$user_data['pesomedio']."Kg</td></p>";     
                    echo "<a class='trash' href='delete.php?id=$user_data[id]'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                    </svg>
                    </a></p>";
                    echo "</div>";  
                }
            }

    ?>

    <script src="JS/ScriptSystemPonto.js"></script>
</body>
</html>