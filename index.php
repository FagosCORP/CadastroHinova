<?php session_start()?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <section>
        <form method="POST" action="action/actions.php">
            <div class="containerForm">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" required maxlength="20" placeholder="nome">
            </div>
            <div class="containerForm">
                <label for="dataNasc">Data de nascimento </label>
                <input type="date" name="dataNasc" id="dataNasc" required>
            </div>
            <div class="containerForm">
                <label for="idade"> Idade </label>
                <input type="number" name="idade" id="idade">
            </div>
            <div class="containerForm">
                <label for="cep">Cep </label>
                <input type="text" name="cep" id="cep" required maxlength="8" placeholder="33115530">
            </div>
            <div class="containerForm">
                <label for="logradouro"> Logradouro </label>
                <input type="text" name="logradouro" id="logradouro" placeholder="Av.Tupinambas">
            </div>
            <?php if(isset($_GET['field'])):?>
            <div>Por favor, verifique os campos preenchidos.</div>
            <?php endif;?>    
            <div class="containerButton"><button type="submit">Confirmar</button></div>
        </form>
    </section>
</body>

</html>