<?php
    $produto = $_GET["produto"];
    $quantidade = $_GET['quantidade'];

    $idcliente = $_POST['cliente'];
    $data = $_POST['data'];
    $valor = $_POST["valor"];
    $produto = $_POST['produto'] ?? [];
    $quantidade = $_POST['quantidade'] ?? [];
    if (empty($produto)){
        die("Nada Selecionado");
    }
    $sql_venda = "INSERT INJTO td_venda (idcliente, valor_total, data) VALUES (?,?,?)";

    
?>