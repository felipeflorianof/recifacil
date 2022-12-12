<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/styleloginponto.css">
</head>
<body>
<div class="saida">
        <div class="sair">
            <a href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                </svg>
            </a>
        </div>
    </div>
    <form action="testloginRecycling_center.php" method="POST">
<div class="login">
        <h1>Login:</h1>
        <input class="input" type="text" name="emailponto" placeholder="E-mail">
        <hr>
        <input class="input" type="password" name="senhaponto" placeholder="Senha">
        <hr>
        <input class="botaoenviar" type="submit" name="submit_recycling_center" value="Login"><br><br>
        <a class="naotemconta" href="cadastroponto.php">Não tem uma conta? Registre aqui</a>
</div>  
    </form>
</body>
</html>