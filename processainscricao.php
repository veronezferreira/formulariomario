<?php
    include_once("conexao.php");
    $numero = $_POST['numero'];
    $nome = $_POST ['nome'];
    $rg = $_POST ['rg'];
    $expedido = $_POST ['expedido'];
    $cpf = $_POST ['cpf'];
    $datanascimento = date("y:m:d h:i:s");
    $numerodependentes = $_POST ['dependentes']
    $endereco = $_POST ['endereco'];
    $n = $_POST ['nome1'];
    $bairro = $_POST ['bairro'];
    $municipio = $_POST ['municipio'];
    $UF = $_POST ['UF'];
    $fone = $_POST ['fone'];
    $cell = $_POST ['zap'];
    $tell = $_POST ['recado'];
    $nomerecado = $_POST ['nomerecado'];
    $email = $_POST ['email'];   


$result_cadastro = "INSERT INTO usuarios (numero, nome, rg, expedido, cpf, 
datanascimento, numerodependentes, endereco, n, bairro, municipio, UF, fone, cell, tell, nomerecado, email) VALUES ('$numero', '$nome', '$rg','$expedido', 
'$cpf', '$datanascimento', '$numerodependentes', '$endereco', '$n', '$bairro', '$municipio', '$UF', '$fone', '$cell', '$tell', '$nomerecado', '$email' )";    

$resultado_cadastro = mysqli_query($conn, $result_cadastro);
$ultimo_id = mysqli_insert_id($conn);

echo "ID: $ultimo_id <br>";


?>