
<?php 
error_reporting(0);

 ?>

 <?php
session_destroy();
session_start();
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

<?php   
    error_reporting(0);
    require_once "functions/product.php";
    $pdoConnection = require_once "connection.php";
    $products = getProducts($pdoConnection);
?>
<!DOCTYPE html>
<html lang="pt-br">

<body>
   
            <?php foreach($products as $product) : ?>
             
                    <div class="card">
                        <div class="card-body">
                             <h4 class="card-title"><?php echo $product['nome']?></h4>
                             <h6 class="card-subtitle mb-2 text-muted">

                                
                                R$<?php echo number_format($product['preco'], 2, ',', '.')?>
                             </h6>


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

                               <form action="carrinho.php" method="POST">

                                <input type="hidden" name="sessao" id="sessao" value="<?php echo $sessao; ?>" placeholder="Repita por favor">

                                <input type="hidden" name="cliente" id="cliente" value="<?php echo $cliente; ?>" placeholder="Repita por favor">

                                <input type="hidden" name="telefone" id="telefone" value="<?php echo $telefone; ?>" placeholder="Repita por favor">

                                <input type="hidden" name="endereco" id="endereco" value="<?php echo $endereco; ?>" placeholder="Repita por favor">

                                <input type="hidden" name="produto" id="produto" value="<?php echo $produto; ?>" placeholder="Repita por favor">

                                <input type="hidden" name="preco" id="preco" value="<?php echo $preco_unitario; ?>" placeholder="Repita por favor">


                                <input type="text" name="adicionais" id="adicionais"  placeholder="Insira Os Adicionais Aqui"> 

                                <br><br>

                           

                             <button type="submit" class="btn btn-primary" name="submit">Adicionar Ao Carrinho</button>

                                </form>

                        </div>
                    </div>

                </div>

            <?php endforeach;?>



          <center>  <a class="btn btn-success" href="carrinho-final.php" class="card-link">Finalizar Compra</a> </center>

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