<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hinova</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
</head>
</a>
<a class="navbar-brand" href="/">
    <img src="/src/login.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
    <span class="Login-text">Login</span>
</a>
</header>
<div class="containerForm">
    <form method="POST" action="controllers\Login.php">
        <div class="mb-3">
            <label for="formLabel" class="form-label">E-mail</label>
            <input type="email" class="form-control" placeholder="Digite seu e-mail" required name="email">

        </div>
        <div class="mb-3">
            <label for="formLabel" class="form-label">Senha</label>
            <input type="password" class="form-control" placeholder="Digite sua senha" required name="senha">
        </div>
        <button type="submit" class="btn btn-primary" name="PostCredenciais" value="conectar">Conectar-se</button>
    </form>
    <?php if (isset($_GET['error'])) {
        $errormsg = $_GET['error'] == 'invalid_credenciais' ? 'Usuario e/ou senha invalidos!' :
            'Faça o login para continuar' ?>
        <div class="alert alert-danger" role="alert"> <?php echo  $errormsg; ?></div>
    <?php } ?>
</div>


<footer><span class="Login-footer">©teste 2021</span></footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>