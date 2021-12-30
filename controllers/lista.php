<?php include_once('conexao.php');
//Cria uma conexao com banco de dados pelo midleware
/*depois de ter efetuado a conexao cria uma tabela com
os respectivos dados buscados, sendo incluida no html resulta
mostrando todos respectivos dados na tabela
*/
$queryGetCampos = "SELECT nome,idade,dataNasc,cep,logradouro FROM campos";
$getContato = $conexao->prepare($queryGetCampos);
$getContato->execute();
if (($getContato) && ($getContato->rowCount() != 0)) {
    while ($rowContato = $getContato->fetch(PDO::FETCH_ASSOC)) { ?>
        <?php extract($rowContato); ?>
        <tbody>
            <tr>
                <td><?php echo $nome ?></td>
                <td><?php echo $idade ?></td>
                <td><?php echo $dataNasc ?></td>
                <td><?php echo $cep ?></td>
                <td><?php echo $logradouro ?></td>
            </tr>
        </tbody>
<?php
    }
} else {
}
?>