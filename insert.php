
<?php

include 'conn.php';

$id = $_POST['Codigo'];
$nome = $_POST['Nome'];
$Data_cad = $_POST['Data_cadastro'];
$qtd_part= $_POST['Valor'];






$sql = "INSERT into Produto(COD_PRODUTO,NOM_PRODUTO,DATA_CADASTRO,VALOR) 
Values($Codigo,'$Nome','$Data_cadadastro',$Valor)";

$result = $conn->query($sql);

header('Location: http://localhost/Avaliacao/index.php');

?>