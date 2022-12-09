<?php
// Conectando ao banco de dados: 
include_once("conexao.php");
// Criando tabela e cabeçalho de dados:

 
 $strcon = mysqli_connect('localhost','root','','evarini') or die('danieus kkk');
 $sql = "SELECT * FROM pedidosfeitos";
 $resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");


if (isset($_POST["cliente"])) {
	$busca = $_POST["cliente"];
	$query = "select * from pedidosfeitos where cliente like '%".$busca."%' order by cliente";
}
else {
	$query = "select * from pedidosfeitos order by cliente";
}
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$rowCount = $statement->rowCount();

if ($rowCount > 0) {
	$data = '<div class="table-responsive">
		<table class="table bordered">
		<tr>
			<th>cliente</th>
			<th>Telefone</th>
			<th>Cidade</th>
		</tr>
	';
	foreach($result as $row) {
		$data .= '
			<tr>
				<td>'.$row["cliente"].'</td>
				<td>'.$row["telefone"].'</td>
				<td>'.$row["cidade"].'</td>
			</tr>
		';
	}
	$data .= '</table></div>';
}
else {
	$data = "Nenhum registro localizado.";
}

echo $data;