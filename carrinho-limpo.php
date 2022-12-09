
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



$sql = "select * from pedidos";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);


                            $sessao = session_id();


$sql = "DELETE FROM pedidos WHERE sessao = '$sessao'";

if ($conexao->query($sql) === TRUE) {
  header('Location: carrinho-final.php');
} else {
  echo "Error deleting record: " . $conn->error;
}




$conexao->close();

$_SESSION['notifica'] = true;


exit;
?>.