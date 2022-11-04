<?php
session_start();
// Alterar váriáveis email/senha aqui e criar tabelas com respectivos nomes de colunas no BD
if((!isset($_SESSION['emailponto']) == true) and (!isset($_SESSION['senhaponto']) == true)){
   unset($_SESSION['emailponto']);
   unset($_SESSION['senhaponto']);
   header('Location: login.php');
}
$pontologado = $_SESSION['emailponto'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="quit.php">Sair</a>
    <br>
    <br>
    <!--Após posicionar onde vai ficar mesmo apague os br's acima-->
    <a href="profile.php">Configurações</a>
    <?php
    echo "<h1>Bem vindo ao Recifácil Colaborador <u>$logado</u></h1>";
    ?>

    <p>Lorem ipsum dolor sit amet. Eum quas enim est eius nesciunt quo magnam corrupti eum accusamus provident!<br> Qui omnis ratione est temporibus dolorem in omnis perferendis. Non quaerat dolores et blanditiis provident qui soluta dolores!<br>
    Sed dolor dicta vel facilis ipsa aut consectetur accusamus quo ipsum.<br> tempora ut alias sint quo nisi exercitationem eos consequatur quidem. Rem necessitatibus iusto aut laborum ratione At officia iure.</p>
    <form action="Systemponto.php">

    <p><input type="submit" value="Pedidos de coleta"></p>


    
    </form>

    
</body>
</html>