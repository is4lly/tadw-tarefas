<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processo de Venda</title>
</head>
<body>
    <form action="saida.php" method="post">

        <p> escolha um cliente</p>
        <select name="idcliente" required> 
            <?php
                require_once "conexao.php";
                require_once "funcoes.php";
                $listacliente = listarClientes($conexao);
                foreach ($listacliente as $cliente){
                    $nome = $cliente['nome'];
                    $id = $cliente['idcliente'];
                    echo"<option value='$id'>$nome</option>";
                }
                
            ?>
        </select>
        <p>Data</p>
        <input type="date" id="data" name="data" required> 
        <p>Preço</p>
        <input type="text" name="preco" required> <br><br>

                <?php
                    $listaproduto = listarProdutos($conexao);
                    foreach($listaproduto as $produto){
                        $nome = $produto['nome'];
                        $idproduto = $produto['idproduto'];

                        echo "<input type='checkbox' name='produto[]' value='$idproduto'> $nome";
                        echo "<input type='number' name='quantidade[]' min='1'><br>";
                    } 
                ?>
        <input type="submit" value="compra">

        
    
    </form>
</body>
</html>