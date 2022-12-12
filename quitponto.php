<?php
session_start();
unset($_SESSION['emailponto']);
unset($_SESSION['senhaponto']);
unset($_SESSION['cnpj']);
header('Location: loginRecycling_Center.php');
