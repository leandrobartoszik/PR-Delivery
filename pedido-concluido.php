<!DOCTYPE html>
<html>
<head>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="sweetalert2.all.min.js"></script>


	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<script type="text/javascript">

Swal.fire(
    "Pedido Concluido Com Sucesso!",
    "Clique Abaixo Para Fechar!",
    "success"
).then(function() {
    window.location = "http://localhost/painel-admin.php";
});


</script>
</body>
</html>

<?php




?>

<?php
session_start();
include('verifica_login.php');
?>

<?php
session_start();
include("conexao.php");

$sessao = mysqli_real_escape_string($conexao, trim($_POST['sessao']));
$cliente = mysqli_real_escape_string($conexao, trim($_POST['cliente']));
$telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));
$endereco = mysqli_real_escape_string($conexao, trim($_POST['endereco']));
$produto = mysqli_real_escape_string($conexao, trim($_POST['produto']));
$preco = mysqli_real_escape_string($conexao, trim($_POST['preco']));
$adicionais = mysqli_real_escape_string($conexao, trim($_POST['adicionais']));
$horapedido = mysqli_real_escape_string($conexao, trim($_POST['horapedido']));

echo $horapedido;




$strcon1 = mysqli_connect('localhost','root','','evarini') or die('danieus kkk');
$sql1 = "SELECT * FROM pedidosfeitos WHERE sessao = '$sessao'";
$resultado1 = mysqli_query($strcon1,$sql1) or die("Erro ao retornar dados");




$registro = mysqli_fetch_array($resultado1);




$cliente_db = $registro['cliente'];


if ($cliente_db != '' && $sessao = session_id()) {
	$cliente = '';
	$telefone = '';
	$endereco = '';
}


$sql = "select * from pedidos";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);



$sql = "DELETE FROM pedidosfeitos WHERE horapedido = '$horapedido'";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}






$conexao->close();

$_SESSION['notifica'] = true;


exit;
?>.