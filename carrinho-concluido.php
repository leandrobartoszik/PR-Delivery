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
    "Compra Realizada Com Sucesso!",
    "Aguarde Contato.",
    "success"
).then(function() {
    window.location = "http://localhost/produtos-evarini.php";
});


</script>
</body>
</html>

<?php
session_start();
include('verifica_login.php');
?>

<?php
session_start();
include("conexao.php");


$sessao = session_id();

$strcon1 = mysqli_connect('localhost','root','','evarini') or die('danieus kkk');
$sql1 = "SELECT * FROM pedidos WHERE sessao = '$sessao'";
$resultado1 = mysqli_query($strcon1,$sql1) or die("Erro ao retornar dados");


$sql = "select * from pedidos";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);


$registro = mysqli_fetch_array($resultado1);

$sessao = $registro['sessao'];
$cliente = $registro['cliente'];
$telefone = $registro['telefone'];
$endereco = $registro['endereco'];
$produto = $registro['produto'];
$preco = $registro['preco'];
$adicionais = $registro['adicionais'];
$horapedido = $registro['horapedido'];


$sql = "INSERT INTO pedidosfeitos (sessao, cliente, telefone, endereco, produto, preco, adicionais, horapedido) VALUES ('$sessao', '$cliente', '$telefone', '$endereco', '$produto', '$preco', '$adicionais', NOW())";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}



while ($registro = mysqli_fetch_array($resultado1))

{ 

$sessao = $registro['sessao'];
$cliente = $registro['cliente'];
$telefone = $registro['telefone'];
$endereco = $registro['endereco'];
$produto = $registro['produto'];
$preco = $registro['preco'];
$adicionais = $registro['adicionais'];
$horapedido = $registro['horapedido'];



$sql = "INSERT INTO pedidosfeitos (sessao, cliente, telefone, endereco, produto, preco, adicionais, horapedido) VALUES ('$sessao', '$cliente', '$telefone', '$endereco', '$produto', '$preco', '$adicionais', NOW())";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}


}





session_regenerate_id();






$conexao->close();

$_SESSION['notifica'] = true;


exit;
?>.