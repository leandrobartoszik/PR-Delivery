<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <h1>Conheça o<br>Melhor delivery do Paraná</h1>
            <img src="vendas.svg" class="left-login-image" alt="Venda animacao">
        </div>
        <form action="login.php" method="post">
        <div class="right-login">
            <div class="card-login">
                <h1>LOGIN</h1>
                <div class="textfield">
                    <label for="usuario">Usuário</label>
                    <input type="text" name="telefone" placeholder="Usuário">
                </div>
                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Senha">
                </div>

                <button type="submit" class="btn-login">Login</button>
                <a href="cadastro.php" class="btn-cadastre">Cadastre-se</a>
            </div>
        </div>
    </div> 
</body>
</html>