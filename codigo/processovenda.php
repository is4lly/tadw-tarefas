<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processo de Venda</title>
</head>
<body>
    <p> escolha um vendedor</p>
    <select> 
        <?php
            require_once "conexao.php";
            require_once "funcoes.php";
            // listarClientes($conexão);
        ?>
    </select>
    <p>Data</p>
    <input type="date" id="data" name="data">
    <p>Preço</p>
    <input type="text" id="preço" name="preço">
</body>
</html>