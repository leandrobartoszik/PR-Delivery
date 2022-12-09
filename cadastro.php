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
            <h1>Cadastre-se<br>e faça parte do nosso time!</h1>
            <img src="cadastre-se.svg" class="cadastro-image" alt="cadastro">
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1>CADASTRO</h1>
                                        <form action="cadastrar.php" method="POST">

                <div class="textfield">
                    <label for="usuario">Nome Completo</label>
                    <input type="text" name="usuario" placeholder="Seu nome">
                </div>
                <div class="textfield">
                    <label for="usuario">telefone</label>
                    <input type="telefone" name="telefone" placeholder="telefone">
                </div>
                <div class="textfield">
                    <label for="usuario">Senha</label>
                    <input type="password" name="senha" placeholder="Sua senha">
                </div>
                <div class="textfield">
                    <label for="usuario">Repita a Senha!</label>
                    <input type="password" name="senha_verifica" placeholder="Repita por favor">
                </div>
                    <div class="textfield">
                    <label for="CEP">CEP</label>
                    <input type="number" name="CEP" placeholder="CEP">
                </div>
                <input type="submit" name="submit">teste</form>
            </div>
        </div>
    </div> 
</body>
</html>