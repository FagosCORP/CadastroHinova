<?php


class postSalvo{
public array $Postado; 
public function __construct($post){
$this->Postado=$post;
}
function gravar(){
$dadosTemp=self::lista();
if(file_exists('dados.json')){
    $fp=fopen('dados.json','w+');
    $conteudo='{' .'"Cadastros":';
    foreach ($this as $dadosUnicos) {  
             $conteudo.='{'.'"Nome":'.'"'.$dadosUnicos['nome'].'"'.','
             .'"DataNasc":'.'"' .$dadosUnicos['dataNasc'].'"'.',' 
             .'"Idade":' .'"'.$dadosUnicos['idade'].'"'.','
             .'"Cep":'.'"'.$dadosUnicos['cep'].'"'.',' 
             .'"logradouro":'.'"'.$dadosUnicos['logradouro'].'"'
             .'}'.'}' ;     
 }
    fwrite($fp,$conteudo);
}
//referenciar a a classe dentro dela e melhor usar o self
}
static function  lista(){    
$merge = [];
if(file_exists('dados.json')){
    $dadosJson = file_get_contents('dados.json');
    $registroTabela = json_decode($dadosJson,TRUE);
    $merge=$registroTabela;
    file_put_contents('dados.json', json_encode($merge));
}else{
    file_put_contents('dados.json', json_encode($merge));
}
return $merge;
}
}
if(!in_array("",$_POST)){
    $r= new postSalvo($_POST);
    $r->gravar();
}
else{
    header("location:../index.php?field=empty");
}