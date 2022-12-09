
<?php
session_start();
include('verifica_login.php');
?>

<?php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));
$endereco = mysqli_real_escape_string($conexao, trim($_POST['endereco']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));

$sql = "select count(*) as total from login where telefone = '$telefone'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: cadastro.php');
	exit;
}

$sql = "INSERT INTO login (nome, telefone, endereco, senha, data_do_pedido) VALUES ('$nome', '$telefone', '$endereco', '$senha', NOW())";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}



$conexao->close();

$_SESSION['notifica'] = true;


header('Location: login.php');

exit;
?>.