<?php
//Redirecionamento para exclusao da sessao de login do Usuario por meio de uma referencia 
//com um link no HTML chamado logout que executa a exclusao da sessao;
session_start();
session_destroy();
header("location:../../index.php");
exit;
