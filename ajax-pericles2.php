<!DOCTYPE html>
<html>
<head>
   
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fast Food</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title></title>
</head>
<body>

</body>
</html>
<?php 
error_reporting(0);
?>
<?php
// Conectando ao banco de dados: 
include_once("conexao.php");
// Criando tabela e cabeçalho de dados:

 
 $strcon = mysqli_connect('localhost','root','','evarini') or die('danieus kkk');
 $sql = "SELECT * FROM pedidosfeitos";
 $resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");



$num_rows = mysqli_num_rows($resultado);





// Obtendo os dados por meio de um loop while


 if ($num_rows == "0"){

        echo "<h5>Não Existem Pedidos Por Enquanto...</h5>";
        die();
    }


$x = 0;

 while ($registro = mysqli_fetch_array($resultado))
 {



    $sessao = session_id();
    $cliente = $registro['cliente'];
    $telefone = $registro['telefone'];
    $endereco = $registro['endereco'];
    $produto = $registro['produto'];
    $quantidade = $registro['quantidade'];
    $preco = $registro['preco'];
    $horapedido = $registro['horapedido'];


    echo $id;

    if ($adicionais != "") {
        $adicionais = "Sim";
    }else{
        $adicionais = "Não";
    }


         
    if ($cliente != '') {

     echo '<hr>';

     echo '<form action="pedido-concluido.php" method="POST">';

     echo '<input type="hidden" name="sessao" value="'.$sessao.'" placeholder="Seu nome">';

     echo '<input type="hidden" name="cliente" value="'.$cliente.'" placeholder="Seu nome">';

     echo '<input type="hidden" name="telefone" value="'.$telefone.'" placeholder="Seu nome">';

     echo '<input type="hidden" name="endereco" value="'.$endereco.'" placeholder="Seu nome">';

     echo '<input type="hidden" name="produto" value="'.$produto.'" placeholder="Seu nome">';

     echo '<input type="hidden" name="quantidade" value="'.$quantidade.'" placeholder="Seu nome">';

     echo '<input type="hidden" name="preco" value="'.$preco.'" placeholder="Seu nome">';

     echo '<input type="hidden" name="horapedido" value="'.$horapedido.'" placeholder="Seu nome">';

     echo '<button type="submit" class="btn btn-primary" name="submit">Enviar Pedido</button>';

     echo '</form>';

     echo '<br>';


     echo "Nome Do Cliente : <b>".$cliente."</b>"; 
     echo "<br>";
     echo "Número De Telefone Do Cliente : <b>".$telefone."</b>"; 
     echo "<br>";
     echo "Endereço Do Cliente : <b>".$endereco."</b>";
     echo "<br>";
     echo '<br>';
       echo "Hora Do Pedido : <b>".$horapedido."</b>";
     echo "<br>";


    }
           

     echo '<br>';
     echo "Produto Comprado : <b>".$produto."</b>";
     echo "<br>"; 
     echo "Quantidade Do Produto : <b> 1 Unidade </b>";
     echo "<br>";
     echo "Preço Do Produto : <b>R$".$preco."</b>";
     echo "<br>";
     echo "<br>";

     //echo '<button>Finalizar Pedido</button>';
   
    
 

    
 
    echo "</tr>";




 }



 mysqli_close($strcon);
 echo "</table>";
 




// echo "<button type='button' class='btn btn-success'>Finalizar Compra</button>";



   // echo '<button class="btn btn-success" type="submit">Finalizar Compra</button>';

   
   // echo '</form>';


   ?>