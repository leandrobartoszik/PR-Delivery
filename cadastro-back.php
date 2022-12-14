
session_start();
include('verifica_login.php');
?>

<html>
    
<head>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="sweetalert2.all.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Cadastro - PHP + MySQL - Canal TI</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Sistema de Cadastro</h3>
                 <a href="https://youtube.com/canaltioficial" target="_blank">Canal TI</a></h3>






                    <?php 

                    if ($_SESSION['status_cadastro']):



                     ?>

                       


                   


                                    <?php 
                                    endif;
                                    unset($_SESSION['status_cadastro']);
                                     ?>
                 
                    <div class="box">
                        <form action="cadastrar.php" method="POST">




                            <div class="field">
                                <div class="control">
                                    <input name="nome" type="text" class="input is-large" placeholder="Nome Completo" autofocus>
                                </div>
                            </div>




                            <div class="field">
                                <div class="control">
                                    <input name="telefone" type="text" class="input is-large" placeholder="Telefone">
                                </div>
                            </div>




                            <div class="field">
                                <div class="control">
                                    <input name="endereco" type="text" class="input is-large" placeholder="Endere??o ( Rua , Cep , Bairro , Numero )">
                                </div>
                            </div>



                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Senha">
                                </div>
                            </div>







                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>