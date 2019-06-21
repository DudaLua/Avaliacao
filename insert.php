
<?php

include 'conn.php';

$id = $_POST['Codigo'];
$nome = $_POST['Nome'];
$dt_cad = $_POST['data_cadastro'];
$qtd_part= $_POST['Valor'];






$sql = "INSERT into Produto(COD_PRODUTO,NOM_PRODUTO,DATA_CADASTRO,VALOR) 
Values($Codigo,'$nome','$data_cadadastro',$Valor)";

$result = $conn->query($sql);

header('Location: http://localhost/Avaliacao/index.php');

?>