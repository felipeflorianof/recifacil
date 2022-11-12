<?php
session_start();

if(isset($_POST['submit_recycling_center']) && !empty($_POST['emailponto']) && !empty($_POST['senhaponto'])){

    include('config.php');

    $emailponto = $_POST['emailponto'];
    $senhaponto = $_POST['senhaponto'];

    $sql2 = "SELECT * FROM recycling_center WHERE emailponto = '$emailponto' AND senhaponto = '$senhaponto'";
    $result2 = $conexao->query($sql2);

    if(mysqli_num_rows($result2) < 1){
        unset($_SESSION['emailponto']);
        unset($_SESSION['senhaponto']);
        header('Location: loginRecycling_Center.php');
    }
    else{
        $_SESSION['emailponto'] = $emailponto;
        $_SESSION['senhaponto'] = $senhaponto;
        header('Location: Systemponto.php');
    }
}
else{
    // Não acessa
    header('Location: loginRecycling_Center.php');
}
