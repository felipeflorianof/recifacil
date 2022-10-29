<?php
session_start();

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){

    include('config.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM users WHERE email = '$email' AND senha = '$senha'";
    $result = $conexao->query($sql);

    if(mysqli_num_rows($result) < 1){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    else{
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: System.php');
    }
}
else{
    // Não acessa
    header('Location: login.php');
}

/*
<?php

// print_r($_REQUEST); Teste. Com os parâmetros que estão vindo do formulário do login.

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
    // Se a variável $_POST['submit'] existir, A variável $_POST['email'] e a variável $_POST['senha'] forem != de empty, O sistema dá permição de acesso.

    include('config.php'); // Incluindo a conexão com o BD;
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
     // Teste pra ver se as variáveis acima estão funcionando.
     // print_r('Email: '. $email.'<br>');
     // print_r('Senha: '. $senha.'<br>');
     
     $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";

     $result = $conexao->query($sql);

     // Teste/Verificação pra ver se o email e a senha digitados, estão cadastrados no DB
     // Se sim quando dermos um print_r($result), 'logo abaixo'. Vai aparecer [num_rows] => 1 Caso não aparecerá [num_rows] => 0
     
     print_r($sql);
     print('<br>');
     print_r($result);

    if(mysqli_num_rows($result) < 1){
        print_r('Cadastro não existente');
    }
    else{
        print('funfo');
    }
    //Verificação simples com if pra ver se as linhas são == á 1 ou 0, ou seja se existe esse Registro no BD ou não.
    
}else{
    // Se não, Retorna pra página de login
    header('Location: login.php');
}
*/
