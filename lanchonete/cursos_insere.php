<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$cargo = $_POST['cargo'];
$salario = $_POST['salario'];



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

$consulta = "INSERT INTO `funcionarios`(`nome`, `email`, `cargo`, `salario`) VALUES ('$nome','$email','$cargo','$salario')";
$result = $conn->query($consulta);
$conn->close();


// Redireciona para INDEX
header('Location: http://localhost/lanchonete/cursos.php');


?>