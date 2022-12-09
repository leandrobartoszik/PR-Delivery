<?php
session_start();
include("conexao.php");

$imagem = mysqli_real_escape_string($conexao, trim($_POST['imagem']));
$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$preco = mysqli_real_escape_string($conexao, trim($_POST['preco']));
$adicional_1 = mysqli_real_escape_string($conexao, trim($_POST['text1_1']));
$adicional_2 = mysqli_real_escape_string($conexao, trim($_POST['text2_1']));
$adicional_3 = mysqli_real_escape_string($conexao, trim($_POST['text3_1']));
$adicional_4 = mysqli_real_escape_string($conexao, trim($_POST['text4_1']));
$adicional_5 = mysqli_real_escape_string($conexao, trim($_POST['text5_1']));
$adicional_6 = mysqli_real_escape_string($conexao, trim($_POST['text6_1']));
$adicional_7 = mysqli_real_escape_string($conexao, trim($_POST['text7_1']));
$adicional_8 = mysqli_real_escape_string($conexao, trim($_POST['text8_1']));
$adicional_9 = mysqli_real_escape_string($conexao, trim($_POST['text9_1']));


echo $adicional_1;




$sql = "select count(*) as total from produtos where nome = '$nome'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: cadastro.php');
	exit;
}

$sql = "INSERT INTO produtos (imagem, nome, preco, adicional_1, adicional_2, adicional_3, adicional_4, adicional_5, adicional_6, adicional_7, adicional_8, adicional_9) VALUES ('$imagem', '$nome', '$preco', '$adicional_1', '$adicional_2', '$adicional_3', '$adicional_4', '$adicional_5', '$adicional_6', '$adicional_7', '$adicional_8', '$adicional_9')";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: cadastro-produto.php');

exit;
?>