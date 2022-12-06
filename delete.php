<?php
    
    if(!empty($_GET['id'])){

        include_once('config.php');
        

        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM pedidos";
        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0){

            $sqlDelete = "DELETE FROM pedidos WHERE id = $id";
            $resultDelete = $result = $conexao->query($sqlDelete);
        }
    }
    header('location: Systemponto.php');

