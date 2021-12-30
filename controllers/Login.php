
    <?php
    //Sessao iniciada para persistir dados ,com um exemplo de credencias de acesso simples
    //Validando com if comparando a igualdade recebida nos inputs com as credencias de acesso
    //Colocando no Get do cabecalho variaveis de orientacao de erro para alertar os usuarios
    session_start();
    if (isset($_POST['email']) && isset($_POST['senha'])) {
        if (isset($_POST['PostCredenciais'])) {
            $email = 'ExemploHinova@gmail.com';
            $senha = '123456';
            $emailForm = $_POST['email'];
            $senhaForm = $_POST['senha'];
            if ($emailForm == $email && $senhaForm == $senha) {
                $_SESSION['login'] = true;
                $_SESSION['nome'] = 'Hinova';
                header('location:../view/formulario/cadastros.php');
            } else {
                header('location:../index.php?error=invalid_credenciais');
            }
        }
    } else {
        header('location:../index.php?error=invalid_permission');
    }
    ?>
