<?php
session_start();
include('conexao.php');


$telefone = mysqli_real_escape_string($conexao, $_POST['telefone']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);


echo $telefone;

echo $senha;

$query = "select usuario from loginadmin where usuario = '{$telefone}' and senha = {$senha}";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	
	header('Location: painel-admin.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}