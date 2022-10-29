<?php
    session_start();
    include("config.php");
    
    $email = $_SESSION['email'];
    $senha = $_SESSION['senha'];

    $sql = "SELECT * FROM users WHERE email = '$email' AND senha = '$senha'";
    $result = $conexao->query($sql);
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" integrity="sha512-Oy+sz5W86PK0ZIkawrG0iv7XwWhYecM3exvUtMKNJMekGFJtVAhibhRPTpmyTj8+lJCkmWfnpxKgT2OopquBHA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <a href="System.php">Voltar</a>
<h1>Editar Informações:</h1>

        <div>
            <table class="table">
            <thead>
                <tr>
                    <td scope="col">Nome</td>
                    <td scope="col">E-mail</td>
                    <td scope="col">Telefone</td>
                </tr>
            </thead>
                <tbody>
                    <?php
                        while($user_data = mysqli_fetch_assoc($result)){
                            echo "<tr>";
                            echo "<td>".$user_data['nome']."</td>";
                            echo "<td>".$user_data['email']."</td>";
                            echo "<td>".$user_data['telefone']."</td>";
                            echo "<td>".'<a href="" <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16"><path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/></svg></a>'."</td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>

    
</body>
</html>