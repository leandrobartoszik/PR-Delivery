<!DOCTYPE html>
<html lang="en">

<?php
error_reporting(0);
session_start();
?>
<head>


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
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <link href="css/bulma.min.css" rel="stylesheet" >
        <link rel="stylesheet" type="text/css" href="css/sb-admin-2.min.css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="painel-admin.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Fast <sup>Food</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="painel-admin-php">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Página Inicial</span></a>
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
            <!-- href pra aonde leva -->        <a class="nav-link" href="tables.html">
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

    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Sistema de Cadastro</h3>

                    <?php 

                    if ($_SESSION['status_cadastro']):
                     ?>




                    <div class="notification is-success">
                      <p>Produto Cadastrado Com Sucesso!</p>
                      <p>Clique Aqui Para Visualizar A Lista De Produtos <a href="lista-produtos.php">aqui</a></p>
                    </div>


                                    <?php 
                                    endif;
                                    unset($_SESSION['status_cadastro']);
                                     ?>
                 
                    <div class="box">
                        <form action="cadastrar-produto.php" method="POST">




                            <div class="field">
                                <div class="control">
                                    <input name="imagem" type="text" class="input is-large" placeholder="Imagem Do Produto" autofocus>
                                </div>
                            </div>




                            <div class="field">
                                <div class="control">
                                    <input name="nome" type="text" class="input is-large" placeholder="Nome Do Produto">
                                </div>
                            </div>




                            <div class="field">
                                <div class="control">
                                    <input name="preco" type="text" class="input is-large" placeholder="Preço Do Produto">
                                </div>
                            </div>

                        

                            <script type="text/javascript">
                                    

                                                                var line = 1;
                                function addInput(divName) {
                                  var newdiv = document.createElement('div');
                                  newdiv.innerHTML  = '['+line +']';
                                  newdiv.innerHTML += '<input type="text" name="text'+line +'_1" id="text'+line +'_1">';
                          
                                  document.getElementById(divName).appendChild(newdiv);
                                  line++;
                                }

                                addInput('lines');

                            </script>

                            <br>                    
                            <div id="lines"></div>
                            <button type="button" onclick="addInput('lines')">Criar Adicionais</button>

        <br><button type="submit" class="button is-block is-link is-large is-fullwidth">
        <a href="listar-produto.php"></a>Cadastrar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



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
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
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