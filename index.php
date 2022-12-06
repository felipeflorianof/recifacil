<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recifacil</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
   <header id="topo">
    <nav>
    <section class="links" id="links">
        <i class="fa fa-times" onclick="hideMenu()"></i>
        <ul>
            <li><a href="#" id="login">Login</a></li>
            <li><a href="#" id="cadastro">Cadastro</a></li>
            <li><a href="about.php">Sobre</a></li>
            <li><a href="mailto:felipeflorianof@gmail.com">Suporte</a></li>
        </ul>
    </section>
    <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
    <div class="texto">
        <img src="/recifacil/img/Logotipo1.png" class="logotipo">
    </div>
   </header>
   <div class="escolha">
    <dialog class="popUp" id="logar">
        <div class="container">
        <h2>Logar como:</h2>
        <a href="loginRecycling_Center.php">Ponto de Coleta</a>
        <a href="login.php">Doador</a>
        <button id="exit" class="close">Voltar</button>
        </div>
        </dialog>
   </div>


   <dialog class="popUp" id="janela">
    <div class="container">
    <h2>Quer se Cadastrar como:</h2>
    <a href="cadastroponto.php">Ponto de Coleta</a>
    <a href="cadastro.php">Doador</a>
    <button id="sair" class="close">Voltar</button>
    </div>
  </dialog>
   
   </div>
    <script src="/recifacil/JS/scripthome.js"></script>
   

</body>
</html>