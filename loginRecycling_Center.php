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
<a href="index.php">Voltar</a>
    <form action="testloginRecycling_center.php" method="POST">
<div>
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