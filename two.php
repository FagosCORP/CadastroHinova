<?php 
$dados=[["ryan",1,"Ryan@gmail.com"],["ryan",1,"Ryan@gmail.com"] ,["ryan",1,"Ryan@gmail.com"]  ]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</head>
<body>
<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>idade</th>
            <th>Pais</th>
        </tr>
    </thead>
    <tbody><?php foreach($dados as $itens): ?>
         <tr> 
              <td> <?php echo $itens[0]; ?> <td> 
                <td> <?php echo $itens[1]; ?> <td>
                <td>  <?php echo  $itens[2]; ?><td>
         </tr>
         <?php endforeach; ?>
    </tbody>
</table>

<a href="two.php?nome=oi">AQUI OH</a>
<form method="POST" action="two.php" enctype='multipart/form-data'>

<input type='file' name='caixaFicheiro'  >
<input type="text" name="data" id="datinhadosGuriPapai">
<button type="submit" >Enviar</button>
</form>

<script src="controllers\js\flatpickr.js"></script>
</body>
</html>
<?php  
$vezes=10;
$max=100;
$min=0;
//if($argc==2){
                      //  $vezes=$argv[1];}
  //          else if($argc>2){
 //                                $max=$argv[2];
  //                          $min=$argv[3];
  ///                          }

//$fileCreated=fopen(Time().'.txt','w');
//for($i=0;$i<$vezes;$i++){
////    fwrite($fileCreated,rand($min,$max) .PHP_EOL );

//}
//fclose($fileCreated);
//?>
<?php 
$nomes=['Ryan',"ARTHUR", ];
$nomes1[]='Ryan';
$nomes2=array('oi','dois','tres' );
$ssss=[
'nome'=>"ryan",
'idade'=>"22",
'senha'=>'12345',
];
function funcNome($sForeachado){
    return $sForeachado =='22';
}
extract($ssss);
echo $nome."\n";
$filtrado=array_filter($ssss,'funcNome');
print_r( $filtrado) ;
if(!isset($_COOKIE['visitou'])){
    setrawcookie('visitou',true,time()+3600);
    echo "Bem vindo novo user";

}
else{
    echo "voce ja esta logado!";
}
?>
<?php 
//PASSAR O QUERY STRING
$nome= "Joao";
//$nomedasegundapag= $_GET['nome'];

?>
<a href="pagina2.php?nome=<?php echo $nome;?>"></a>
<!-- EU TO REDIRECIONANDO COM UMA VARIAVEL -->
<!-- E LA EU OLHO PRA QUE ELA VALE -->

