
<?php include_once('conexao.php');
?>
<?php


//Buscando os dados recebido depois de o Botao submit ser enviado,e fazendo uma validacao basica
//contra campos vazios,e colocando a idade como uma data calculada pelo back-end
//Utilizando o Midleware de conexao com o DB-LOCAL e condicionais contra alguns erros 
//(Erros: falta de login ocasiona redirecionamento,e campo vazios nao sao enviados ao BD)
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
if (!empty($dados['camposPost'])) {
    $_SESSION['emptyInput'] = false;
    $dados = array_map('trim', $dados);

    if (in_array("", $dados)) {
        $_SESSION['emptyInput'] = true;
        header('location:../view/formulario/cadastros.php?emptyfields=error');
    }
    if (!$_SESSION['emptyInput']) {
        function DiferencaData($Nasc)
        {
            $agora = new DateTime();
            $dataNasc = date_create($Nasc);
            $intervalo = $dataNasc->diff($agora);
            $intervalo = $intervalo->y;
            return $intervalo;
        }

        $intervalo = DiferencaData($dados["dataNasc"]);

        $querySetCampos =   "INSERT INTO campos (nome,idade,dataNasc,cep,logradouro ) VALUES ('" . $dados["Nome"] . "','" . $intervalo . "','" . $dados["dataNasc"] . "',
        '" . $dados["cep"] . "','" . $dados["logradouro"] . "') ";

        $setContato = $conexao->prepare($querySetCampos);
        $setContato->execute();

        header('location:../view/formulario/listagem.php');
    }
}



?>