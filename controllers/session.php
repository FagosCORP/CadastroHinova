<?php
//Midleware de verificacao de onde Busca se possui uma sessao iniciada, caso contrario
// Sempre sera redirecionado para realizar o Login  com uma mensagem passado no cabecalho
//GET com a seguinte informacao precisa fazer login para continuar demonstrada no HTML.
session_start();
if (!isset($_SESSION['login'])) {

    header("location:../../index.php?error='expired'");
    exit;
}
