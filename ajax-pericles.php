   <?php 
error_reporting(0);

?>
<!DOCTYPE html>
<html lang="en">


<head>

   

<?php
session_start();
if($_SESSION['verifica'] != 'evarini') {
    header('Location: index.php');
    exit();
}
?>







<?php
// Conectando ao banco de dados: 
include_once("conexao.php");
// Criando tabela e cabeçalho de dados:

 
 $strcon = mysqli_connect('localhost','root','','evarini') or die('danieus kkk');
 $sql = "SELECT * FROM pedidosfeitos WHERE cliente != ''";
 $resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");



$num_rows = mysqli_num_rows($resultado);





// Obtendo os dados por meio de um loop while


 if ($num_rows == "0"){

        echo "<h5>0</h5>";
        die();
    }




 echo $num_rows;

 while ($registro = mysqli_fetch_array($resultado))
 {




    $cliente = $registro['cliente'];
    $telefone = $registro['telefone'];
    $endereco = $registro['endereco'];
    $produto = $registro['produto'];
    $quantidade = $registro['quantidade'];
    $preco = $registro['preco'];
    $horapedido = $registro['horapedido'];


  



     

 }





 mysqli_close($strcon);
 echo "</table>";
 






// echo "<button type='button' class='btn btn-success'>Finalizar Compra</button>";



   // echo '<button class="btn btn-success" type="submit">Finalizar Compra</button>';

   
   // echo '</form>';


   ?>






