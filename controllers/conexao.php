<?php
//Midleware de conexao com  variaveis de manipulacao para alteracao de conexao e nao ter que
//repetir codigo;
$host = "localhost";
$user = "root";
$password = "";
$dbname = "cadastros";
$port = "3306";
//Conexao com DB no localhost.
$conexao = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $password);
