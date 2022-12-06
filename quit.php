<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['senha']);
unset($_SESSION['cpf']);
header('Location: login.php');
