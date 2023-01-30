<?php

$hostname = "localhost";
$bancoDeDados = "cadastro";
$usuario = "root";
$senha = "";


$mysqli = new MySQLi($hostname, $usuario, $senha, $bancoDeDados);
if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . mysqli->connect_errno . ") " . mysqli->connect_error;
}

switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        $sql = "INSERT INTO usuarios (nome, email) VALUES ('{$nome}', '{$email}' ) ";
        $res = $mysqli->query($sql);

        if ($res==true) {
            print "<script>alert('Cadastrado com sucesso'); <script>";
            print "<script>location.href'index.php'; </script>";
        } else {
            print "<script>alert('Não foi possivel cadastrar'); <script>";
            print "<script>location.href'index.php'; </script>";
        }
        break;

    case 'editar':
        break;

    case 'excluir':
        break;
}

