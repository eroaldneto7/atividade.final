<?php
include "conexao.php";
$modelo = $_POST['modelo_digitado'];
$placa = $_POST['placa_digitado'];
$ano = $_POST['ano_digitado'];
$valor = $_POST['valor_digitado'];

$sql = "INSERT INTO tb_veiculo
(modelo, placa, ano, preco)
value
('$modelo', '$placa', '$ano', '$preco',)";
$inserir = $pdo->prepare($sql);
try{
    $inserir->execute();
    header("Location: pg_gerenciar.php?inserir=ok");
}catch(PDOException $erro){
echo "Falha ao cadastrar!" .$erro->getmessage();
}
?>