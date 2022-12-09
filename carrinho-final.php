
<?php 
error_reporting(0);

 ?>

 <?php
//session_destroy();
//session_start();

include('verifica_login.php');
?>

<!DOCTYPE html>
<html>
<head>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>

<body>

<style type="text/css">
    
body {
  background: #00b09b;
  background: -webkit-linear-gradient(to right, #00b09b, #96c93d);
  background: linear-gradient(to right, #00b09b, #96c93d);
  min-height: 100vh;
}

.text-gray {
    color: #aaa
}




</style>

<div class="container py-5">
    <div class="row text-center text-white mb-5">
        <div class="col-lg-7 mx-auto">
            <h1 class="display-4">Lista De Produtos Evarini</h1>

        </div>

    </div>
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <!-- List group-->
            <ul class="list-group shadow">
                <!-- list group item-->
                <li class="list-group-item">
                    <!-- Custom content-->

                    <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                        <div class="media-body order-2 order-lg-1">


<!DOCTYPE html>
<html lang="pt-br">

<body>
   
         

<?php

include_once("conexao.php");

 $sessao = session_id();

 //echo $sessao;

 $strcon = mysqli_connect('localhost','root','','evarini') or die('danieus kkk');
 $sql = "SELECT * FROM pedidos WHERE sessao = '$sessao'";
 $resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");



$num_rows = mysqli_num_rows($resultado);





// Obtendo os dados por meio de um loop while


 if ($num_rows == "0"){

        echo "<center><h5>Não Existem Pedidos Por Enquanto...</h5></center>";
       
    }

echo '<div class="card">
                        <div class="card-body">
                        ';
 while ($registro = mysqli_fetch_array($resultado))
 {




    $sessao = $registro['sessao'];
    $cliente = $registro['cliente']; 
    $telefone = $registro['telefone']; 
    $endereco = $registro['endereco']; 
    $produto = $registro['produto'];
    $preco = $registro['preco'];
    $adicionais = $registro['adicionais'];
    $horapedido = $registro['horapedido'];
  
if ($adicionais != '') {
	echo '
                             <h4 class="card-title">'.$produto.'</h4>
                             <h6 class="card-subtitle mb-2 text-muted">
                                Preço Unitário : <b>'.$preco.'</b>
                                <br><br>
                                Adicionais : '.$adicionais.'
                             </h6><br>';



 }
else{
	echo '
                             <h4 class="card-title">'.$produto.'</h4>
                             <h6 class="card-subtitle mb-2 text-muted">
                                Preço Unitário : <b>'.$preco.'</b>
                                
                                
                             </h6><br>';



 
}
 

}




//echo 'Preço Total : '.$preco.'';





  ?>


<?php

include_once("conexao.php");

 $sessao = session_id();

 //echo $sessao;

 $strcon = mysqli_connect('localhost','root','','evarini') or die('danieus kkk');
 $sql = "SELECT SUM(preco) as total FROM pedidos WHERE sessao = '$sessao'";
 $resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");



$num_rows = mysqli_num_rows($resultado);





// Obtendo os dados por meio de um loop while


 if ($num_rows == "0"){

        echo "<h5>Não Existem Pedidos Por Enquanto...</h5>";

       
    }


 while ($registro = mysqli_fetch_array($resultado))
 {



    $preco = $registro['total'];

    if ($preco != '') {
    	
    echo "Preço Total : $".$preco;

    }

    
  
 

}




//echo 'Preço Total : '.$preco.'';





  ?>



             


                             <?php



                             $produto = $product['nome'];

                             $preco_unitario = $product['preco'];

                             $preco_total = "";


                             //echo $produto;






                            $sessao = session_id();




                            $cliente = $_SESSION['nome'];

                            $telefone =  $_SESSION['telefone'];

                            $endereco = $_SESSION['endereco'];



                               ?>


                           

                      

                                </form>

                        </div>
                    </div>

                </div>

                <br>

 		  <center>  <a class="btn btn-danger" href="carrinho-limpo.php" class="card-link">Limpar Carrinho</a> </center> <br>

 		  <center>  <a class="btn btn-primary" href="produtos-evarini.php" class="card-link">Selecionar Mais Produtos</a> </center> <br>

          <center>  <a class="btn btn-success" href="carrinho-concluido.php" class="card-link">Finalizar Compra</a> </center> <br>

        </div>

    </div>
    
</body>
</html>



                    
                            </div>
                        </div>
                    </div> <!-- End -->
                </li> <!-- End -->
            </ul> <!-- End -->
        </div>
    </div>
</div>
</body>
</html>