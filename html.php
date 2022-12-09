
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
    background: linear-gradient(to right, #c04848, #480048);
    min-height: 100vh
}

.text-gray {
    color: #aaa
}




</style>

<div class="container py-5">
    <div class="row text-center text-white mb-5">
        <div class="col-lg-7 mx-auto">
            <h1 class="display-4">Product List</h1>
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
// Conectando ao banco de dados: 
include_once("conexao.php");
// Criando tabela e cabeçalho de dados:

 
 $strcon = mysqli_connect('localhost','root','','evarini') or die('danieus kkk');
 $sql = "SELECT * FROM produtos";
 $resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");



$num_rows = mysqli_num_rows($resultado);





// Obtendo os dados por meio de um loop while


 if ($num_rows == "0"){

        echo "<h5><center>Não Existem Produtos Por Enquanto...</h5></center>";
        die();
    }


 while ($registro = mysqli_fetch_array($resultado))
 {




    $id = $registro['id'];
    $id_original = $registro['id'];
    $nome = $registro['nome'];
    $preco = $registro['preco'];
    $imagem = $registro['imagem'];


    echo $id;

    if ($adicionais != "") {
        $adicionais = "Sim";
    }else{
        $adicionais = "Não";
    }


 

   



    echo "<tr>";
  
    echo "<h5 class='mt-0 font-weight-bold mb-2'>".$nome."</h5>";
    echo "<p class='font-italic text-muted mb-0 small'>Preço : ".$preco."</p>";
    echo "<br>";
    echo "<img src='".$imagem."' height='200' width='200' >";

    echo "<br><br>";
   



    echo '<form action="produtos-final.php" method="post"';

    echo '<label for="usuario"></label><input type="text" value="'.$id_original.'" name="'.$id_original.'"';

    echo '<label for="usuario"></label>
          <input type="text" name="'.$id.'a" placeholder="Quantidade Desejada"><br><br>
                ';








    echo "<hr>";

 
    echo "</tr>";
 }
 mysqli_close($strcon);
 echo "</table>";
 






// echo "<button type='button' class='btn btn-success'>Finalizar Compra</button>";



    echo '<button class="btn btn-success" type="submit">Finalizar Compra</button>';

   
    echo '</form>';


   ?>


                    
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