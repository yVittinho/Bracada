<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | Braçada Final</title>
    <link rel="stylesheet" href="../styles/global.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>

<body class="form-page">
    <div class="form-container">
        <h1>Entrar</h1>
        <form action="/Bracada/actions/login.php" class="form" id="login-form" method="POST">
            <label for="email">
                <i class="fa-solid fa-envelope icon-modify"></i>
                <input type="email" name="email" placeholder="Email" required />
            </label>
            <label for="senha">
                <i class="fa-solid fa-lock icon-modify"></i>
                <input type="password" name="senha" placeholder="Senha" required />
            </label>
            <a href="forgot-password.php" class="forgot-password" id="btn_login">Esqueci a senha</a>
            <div class="btns__container">
                <button type="submit" class="btn btn_submit" id="btn_login">Entrar</button>
                <button type="reset" class="btn btn_reset">Limpar Dados</button>
            </div>

            <a href="index.php" class="voltar">
                <i class="fa-solid fa-house"></i>
            </a>
        </form>
    </div>

</body>

</html>