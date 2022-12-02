<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/stylelogin.css">
    <title>Login</title>
</head>
<body>
<a href="index.php">Voltar</a>
    <form action="testlogin.php" method="POST">
        <div>
        <h1>Login:</h1>
            <p><input class="input" type="text" name="email" placeholder="E-mail"></p>
            <hr>
            <p><input class="input" type="password" name="senha" placeholder="Senha"></p>
            <hr>
            <p><input class="botaoenviar" type="submit" name="submit" value="Enviar"></p>
            
            <a class="naotemconta" href="cadastro.php">Não tem uma conta? Registre aqui</a>
        </div>
    </form>
    
</body>
</html>