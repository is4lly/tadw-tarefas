<?php
require_once "conexao.php";
require_once "funcoes.php";

$idcliente = $_POST['idcliente'] ?? null;
$data = $_POST['data'] ?? null;
$preco = $_POST['preco'] ?? null;
$produto = $_POST['produto'] ?? [];
$quantidade = $_POST['quantidade'] ?? [];
if (empty($produto)) {
    die("Nada Selecionado");
}
$sql_venda = "INSERT INTO tb_venda (idcliente, valor_total, data) VALUES (?,?,?)";
$stmt_venda = mysqli_prepare($conexao, $sql_venda);
mysqli_stmt_bind_param($stmt_venda, "ids", $idcliente, $valor, $data);
if (!mysqli_stmt_execute($stmt_venda)) {
    die("Nao salvou (erro)");
}
$idvenda = mysqli_insert_id($conexao);
mysqli_stmt_close($stmt_venda);
$sql_item = "INSERT INTO tb_item_venda(idvenda, idproduto, quantidade) VALUES (?, ?, ?)";
$stmt_item = mysqli_prepare($conexao, $sql_item);
for ($i = 0; $i < count($produto); $i++) {
    $idproduto = $produto[$i];
    $quantidade = $quantidade[$i];

    if (!empty($uqantidade) && $quantidade > 0) {
        mysqli_stmt_bind_param($stmt_item, "iid", $idvenda, $idproduto, $quantidade);
        if (!mysqli_stmt_execute($stmt_item)) {
            die("Erro quando salvou");
            mysqli_error($conexao);
        }
    }
}
mysqli_stmt_close($stmt_item);

echo "deu bom <br>";
echo "<a href='processovenda.php'>nova venda</a>";
