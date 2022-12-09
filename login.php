<?php
session_start();
include('conexao.php');

if(empty($_POST['telefone']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}



$telefone = mysqli_real_escape_string($conexao, $_POST['telefone']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select * from login where telefone = '{$telefone}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);




if($_POST['telefone'] == '42999984243' && $_POST['senha'] == '117711'){
	$_SESSION['verifica'] = 'evarini';
	header('Location: painel-admin.php');
	exit();
}




if($row == 1) {
	$usuario_bd = mysqli_fetch_assoc($result);
	$_SESSION['nome'] = $usuario_bd['nome'];
	$_SESSION['telefone'] = $usuario_bd['telefone'];
	$_SESSION['endereco'] = $usuario_bd['endereco'];
	header('Location: dashboard.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}