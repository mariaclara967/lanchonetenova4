<?php

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];


//echo $nome;


// Salva no banco de dados
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "lanchonete";

$conn = new mysqli($servidor, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Erro: " . $conn->connect_error);
} else {
    //echo "Conectado com o banco!";
}

$consulta = "INSERT INTO `menu`(`nome`, `descricao`, `preco`) VALUES ('$nome','$descricao','$preco')";
$result = $conn->query($consulta);
$conn->close();


// Redireciona para INDEX
header('Location: http://localhost/lanchonete/alunos.php');


?>