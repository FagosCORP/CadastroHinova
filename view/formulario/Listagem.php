<?php  //PRIMEIRO MIDLEWARE- Abaixo os Midlewares sao utilizados para fazer a verificacao da sessao
//SEGUNDO-MIDLEWARE - Gerar a conexao com o banco de dados

?>
<?php include('../../controllers/session.php');
?>
<?php include_once('../../controllers/conexao.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hinova</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styles/style.css">

</head>
<header>
    <a class="navbar-brand" href="../../controllers/logout.php">
        <img src="/src/login.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
        <span class="Login-text">logout(<?php echo $_SESSION['nome'] ?>)</span>
    </a>
    <a class="navbar-brand" href="cadastros.php">
        <img src="/src/sinal-de-mais.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
        <span class="Login-text">Adcionar</span>
    </a>
</header>
<table class="table table-success table-striped">
    <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">idade</th>
            <th scope="col">Data de Nascimento</th>
            <th scope="col">CEP</th>
            <th scope="col">logradouro</th>
        </tr>
    </thead>
    <?php include('../../controllers/lista.php') ?>
</table>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="../../controllers/js/fillEntries.js"></script>
</body>

</html>