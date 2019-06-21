<?php
include 'conn.php';

$cod=$_POST['cod'];
$nome_produto=$_POST['nome_produto'];
$data_cadastro=$_POST['data_cadastro'];
$valor=$_POST['valor'];

$sql= "INSERT into PRODUTO(COD_PRODUTO,NOM_PRODUTO,DATA_CADASTRO,VALOR) VALUES($cod,'$nome_produto','$data_cadastro',$valor)";

$result = $conn->query($sql);

header('Location: http://localhost/avaliacao/index.php');