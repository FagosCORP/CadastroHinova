 <?php  //Abaixo os Midlewares sao utilizados para fazer a verificacao da sessao
    //Gerar a conexao com o banco de dados
    //Verificar a integridade dos campos solicitados na hora do submit do formulario.
    ?>
 <?php include('../../controllers/session.php');
    ?>
 <?php include_once('../../controllers/conexao.php');
    ?>
 <?php include('../../controllers/agenda.php');
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
     <a class="navbar-brand" href="Listagem.php">
         <img src="/src/agenda.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
         <span class="Login-text">Agenda</span>
     </a>
 </header>
 <div class="cadForm">
     <h1> <span class="badge bg-primary">Cadastrar:</span></h1>
     <form method="POST" action="../../controllers/agenda.php">
         <div class="mb-5">
             <label for="formLabel" class="form-label">Nome: </label>
             <input type="text" class="form-control" placeholder="nome" required name="Nome">

         </div>
         <div class="mb-5">
             <label for="formLabel" class="form-label">Data de nascimento:</label>
             <input type="date" id="data" class="form-control" name="dataNasc">

         </div>
         <div class="mb-5">
             <label for="formLabel" class="form-label">Idade :</label>
             <input type="text" class="form-control" placeholder=" idade : MAX : 99" maxlength="2" id="idade" required name="idade">

         </div>

         <div class="mb-5">
             <label for="formLabel" class="form-label">CEP :</label>
             <input type="text" id="cep" maxlength="9" class="form-control" placeholder="ex:33115510" name="cep" required>

         </div>
         <div class="mb-5">
             <label for="formLabel" class="form-label">LOGRADOURO :</label>
             <input type="text" class="form-control" placeholder="Rua" id="logradouro" name="logradouro">

         </div>
         <button type="submit" class="btn btn-success" name="camposPost" value="cadUser">Salvar</button>
         <?php if (isset($_GET['emptyfields'])) { ?>
             <div class="alert alert-danger" role="alert"> <?php echo 'Por favor ,confira os campos!' ?></div>
         <?php } ?>
     </form>
 </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
 <script src="../../controllers/js/fillEntries.js"></script>
 </body>

 </html>