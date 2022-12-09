
<?php
session_start();
include("conexao.php");
?>

<?php 

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));
$endereco = mysqli_real_escape_string($conexao, trim($_POST['endereco']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));

$sql = "select count(*) as total from login where telefone = '42999984243'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);



$sql = "INSERT INTO pedidos (cliente, telefone, endereco, produto, quantidade, preco, horapedido) VALUES ('a', 'a', 'a', 'a', 'a', 'a', NOW())";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}


?>.