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

</head>

<body id="page-top">

    <script type="text/javascript">
        Swal.fire({
  title: 'Bem vindo, boas vendas !',
  text: 'Prescione okay e continue',
  icon: 'success',
  confirmButtonText: 'Okay'
})
    </script>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="painel-admin.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-motorcycle"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Fast <sup>Food</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="painel-admin.php">
                    <i class="fas fa-fw fa-home"></i>
                    <span>P??gina Inicial</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Produtos
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
           
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="cadastro-produto.php">
                    <i class="fas fa-solid fa-plus"></i>
                    <span>Cadastro De Produto</span></a>
            </li>


      <li class="nav-item">
                <a class="nav-link" href="listar-produtos.php">
                    <i class="fas fa-solid fa-wrench"></i>
                    <span>Gerenciar Produtos</span></a>
            </li>


      <li class="nav-item">
            <!-- href pra aonde leva -->        <a class="nav-link" href="relatorios.php">
             <!-- icone -->       <i class="fas fa-solid fa-folder"></i>
                 <!-- placeholder -->       <span>Relatorios</span></a>
            </li>





        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Pesquisar"
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Pericles</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Configura????es
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Registro de Atividades
                                </a>
                                <div class="dropdown-divider"></div>

                                
                                <a class="dropdown-item" href="index.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Sair
                                </a>
                            </div>
                        </li> 

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information 
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Perfil</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>-->
                       
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Vendas (Mensal)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><span nome="usersa" id="usersa">0</span></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

             

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Vendas (Diarias)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><span nome="usersa" id="usersa">0</span></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                  

                           <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                               Pedidos Pendentes </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><span nome="users2" id="users2"></span></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                            <script type="text/javascript">
                           
                        function ajx1(){
                           var ajax = new XMLHttpRequest(); // cria o objeto XHR
                           ajax.onreadystatechange = function(){
                              // verifica quando o Ajax for completado
                              if(ajax.readyState == 4 && ajax.status == 200){
                                 document.getElementById("users2").innerHTML = ajax.responseText; // atualiza o span
                                 setTimeout(ajx1, 4000); // chama a fun????o novamente ap??s 4 segundos
                              }
                           }
                           ajax.open("GET", "ajax-pericles.php"); // p??gina a ser requisitada
                           ajax.send(); // envia a requisi????o
                        }
                        ajx1(); // chama a fun????o

                         </script>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Data De Hoje</div> 

<html>
    <body>
        <div id="data-hora"></div>
        <script>
            // Fun????o para formatar 1 em 01
            const zeroFill = n => {
                return ('0' + n).slice(-2);
            }

            // Cria intervalo
            const interval = setInterval(() => {
                // Pega o hor??rio atual
                const now = new Date();

                // Formata a data conforme dd/mm/aaaa hh:ii:ss
                const dataHora = zeroFill(now.getUTCDate()) + '/' + zeroFill((now.getMonth() + 1)) + '/' + now.getFullYear() + ' ' + zeroFill(now.getHours()) + ':' + zeroFill(now.getMinutes()) + ':' + zeroFill(now.getSeconds());

                // Exibe na tela usando a div#data-hora
                document.getElementById('data-hora').innerHTML = dataHora;
            }, );
        </script>
    



                                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                

                            <!-- Approach -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Pedidos Pendentes</h6>
                                </div>
                                <div class="card-body">
                                    <p>

<span nome="users1" id="users1"></span>


       <script type="text/javascript">
                           
                        function ajx(){
                           var ajax = new XMLHttpRequest(); // cria o objeto XHR
                           ajax.onreadystatechange = function(){
                              // verifica quando o Ajax for completado
                              if(ajax.readyState == 4 && ajax.status == 200){
                                 document.getElementById("users1").innerHTML = ajax.responseText; // atualiza o span
                                 setTimeout(ajx, 4000); // chama a fun????o novamente ap??s 4 segundos
                              }
                           }
                           ajax.open("GET", "ajax-pericles2.php"); // p??gina a ser requisitada
                           ajax.send(); // envia a requisi????o
                        }
                        ajx(); // chama a fun????o

                         </script>






<?php
// Conectando ao banco de dados: 
include_once("conexao.php");
// Criando tabela e cabe??alho de dados:

 
 $strcon = mysqli_connect('localhost','root','','evarini') or die('danieus kkk');
 $sql = "SELECT * FROM pedidosfeitos";
 $resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");



$num_rows = mysqli_num_rows($resultado);





// Obtendo os dados por meio de um loop while



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
        $adicionais = "N??o";
    }


         
    if ($cliente != '') {


        echo '';


     }




 }



 mysqli_close($strcon);
 echo "</table>";
 




// echo "<button type='button' class='btn btn-success'>Finalizar Compra</button>";



   // echo '<button class="btn btn-success" type="submit">Finalizar Compra</button>';

   
   // echo '</form>';


   ?>
</body>
</html>










                                    </p>




                                    <!--<p class="mb-0">Before working with this theme, you should become familiar with the
                                        Bootstrap framework, especially the utility classes.</p>-->
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Vai sair mesmo?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
                    </button>
                </div>
                <div class="modal-body">Se ?? isso que quer, ent??o clique em sair para encerrar sua sess??o!</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="administrador.php">Sair</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>