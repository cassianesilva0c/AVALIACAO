<?php
include 'conn.php';

$sql = "SELECT * From PRODUTO";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Documento</title>
</head>
<body>
<a href='http://localhost/avaliacao/formulario.php'> <button>Cadastrar o Produto</button></a>
    <table border=2>
        <thead>
            <th>Cod</th>
            <th>Nome_cadastro</th>
            <th>Data_cadastro</th>
            <th>VALOR</th>
           
        </thead>
        <?php while($dados = $result->fetch_assoc()) { 
            $cod = $cod['COD_PRODUTO'];    
        ?>
        <tbody>
            <td><?php echo $dados['COD_PRODUTO']; ?></td>
            <td><?php echo $dados['NOM_PRODUTO']; ?></td>
            <td><?php echo $dados['DATA_CADASTRO']; ?></td>
            <td><?php echo $dados['VALOR']; ?></td>
        
        </tbody>
        <?php } ?>
    </table>    

</body>
</html>
