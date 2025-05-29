<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processo de Venda</title>
</head>
<body>
    <form>

        <p> escolha um cliente</p>
        <select> 
            <?php
                require_once "conexao.php";
                require_once "funcoes.php";
    
    
    
                // $sql = "SELECT idcliente, nome FROM tb_cliente";
                // $resultados = mysqli_query($conexao, $sql);
                // if ($resultado){
                //     $clienteid=mysqli_fetch_array($resultado);
                //     foreach($clienteid as $clienteid){
                //         $id=$linha["clienteid"];
                //         $nome=$linha['nome'];
                //         echo "<option value='id'>$nome</option>";
                //     }
                // }
                
            ?>
        </select>
        <p>Data</p>
        <input type="date" id="data" name="data">
        <p>Preço</p>
        <input type="text" id="preço" name="preço">
    
    </form>
</body>
</html>