<?php
error_reporting(0);

session_regenerate_id();



  ?>
<!DOCTYPE html>
<html>

<?php 
error_reporting(0);
 ?>

 <?php
session_start();
if(!$_SESSION['nome']) {
  header('Location: index.php');
  exit();
}
?>

 ?>
 
<?php
session_start();
include('verifica_login.php');
?>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
<style type="">
    /*
*
* ==========================================
* FOR DEMO PURPOSE
* ==========================================
*
*/

body {
  background: #00b09b;
  background: -webkit-linear-gradient(to right, #00b09b, #96c93d);
  background: linear-gradient(to right, #00b09b, #96c93d);
  min-height: 100vh;
}

.text-gray {
  color: #aaa;
}
</style>
</body>
</html><div class="container py-5">

  <!-- For demo purpose -->
  <div class="row text-center text-white mb-5">
    <div class="col-lg-7 mx-auto">
      <h1 class="display-4">Bem-vindo!</h1>
      <p class="lead mb-0">Selecione um dos estabelecimentos abaixo para realizar um pedido</p>
    <!--  <p class="lead">Developed by
   <a href="https://bootstrapious.com/snippets" class="text-white"> 
                <u>DevNew</u></a> -->
      </p>
    </div>
  </div>
  <!-- End -->

  <div class="row">
    <div class="col-lg-8 mx-auto">

      <!-- List group-->
      <ul class="list-group shadow">

        <!-- list group item-->
        <li class="list-group-item">
          <!-- Custom content-->
          <div class="media align-items-lg-center flex-column flex-lg-row p-3">
            <div class="media-body order-2 order-lg-1">
           <center>   <h5 class="mt-0 font-weight-bold mb-2">Evarini</h5>
              <p class="font-italic text-muted mb-0 small"><a href="https://pt-br.facebook.com/sorveteriaevarini/"><b>Lista De Produtos Aqui</b></a></p>
             
                <h6 class="font-weight-bold my-2">30-60 Minutos</h6> </center>
              
              </div>
           <!--   </div><img src="https://bootstrapious.com/i/snippets/sn-cards/shoes-1_gthops.jpg" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">-->
          </div>

          <!-- End -->
        </li>


    
       
   <button class="btn btn-primary" type="button" onclick="window.location.href = 'produtos-evarini.php'">Entrar</button>



      
         </a>
        <!-- End -->

        <!-- list group item
        <li class="list-group-item">
           Custom content
          <div class="media align-items-lg-center flex-column flex-lg-row p-3">
            <div class="media-body order-2 order-lg-1">
              <h5 class="mt-0 font-weight-bold mb-2">Awesome product</h5>
              <p class="font-italic text-muted mb-0 small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit fuga autem maiores necessitatibus.</p>
              <div class="d-flex align-items-center justify-content-between mt-1">
                <h6 class="font-weight-bold my-2">$99.00</h6>
                <ul class="list-inline small">
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                </ul>
              </div>
            </div><img src="https://bootstrapious.com/i/snippets/sn-cards/shoes-2_g4qame.jpg" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">
          </div>
     
        </li>
     

      list group item 
        <li class="list-group-item">
         Custom content
          <div class="media align-items-lg-center flex-column flex-lg-row p-3">
            <div class="media-body order-2 order-lg-1">
              <h5 class="mt-0 font-weight-bold mb-2">Awesome product</h5>
              <p class="font-italic text-muted mb-0 small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit fuga autem maiores necessitatibus.</p>
              <div class="d-flex align-items-center justify-content-between mt-1">
                <h6 class="font-weight-bold my-2">$140.00</h6>
                <ul class="list-inline small">
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star-o text-gray"></i></li>
                </ul>
              </div>
            </div><img src="https://bootstrapious.com/i/snippets/sn-cards/shoes-3_rk25rt.jpg" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">
          </div>
          End 
        </li>
       End 

        list group item 
        <li class="list-group-item">
          Custom content
          <div class="media align-items-lg-center flex-column flex-lg-row p-3">
            <div class="media-body order-2 order-lg-1">
              <h5 class="mt-0 font-weight-bold mb-2">Awesome product</h5>
              <p class="font-italic text-muted mb-0 small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit fuga autem maiores necessitatibus.</p>
              <div class="d-flex align-items-center justify-content-between mt-1">
                <h6 class="font-weight-bold my-2">$220.00</h6>
                <ul class="list-inline small">
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                </ul>
              </div>
            </div><img src="https://bootstrapious.com/i/snippets/sn-cards/shoes-4_vgfjy9.jpg" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">
          </div>
          End 
        </li>
        -->

      </ul>
      <!-- End -->
    </div>
  </div>
</div>