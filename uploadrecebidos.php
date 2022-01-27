<?php 
$_FILES;
//depois movendo os arquivos uploadados mas antes cgheck se no input e o form tem o dados certos
move_uploaded_file($_FILES['caixa_ficheiro']['tmp_name'],"C:/tmp/".$_FILES['caixa_ficheiro']['name']) ;
//estamos movendo de onde ele recebe 'tmp_name' para a pasta de escolha na segunda parte
//tratamento dos ficheiros
//chaves dos objeto files e sempre bom conferir
$dir= "C:/tmp/";
$mimetype=['image/png'];
foreach($_FILES as $file){
   if(!in_array($file['type'],$mimetype))continue;

};
//$file['tmp_name'] serve para achar a localizacao que o post enviou a pasta;
//mover o ficheiro para o destino final
//percorrendo item por item sendo alterado pelo temp;
//$dir vai ser para onde a pasta vai e depois para onde ela vai ser concatenada juntamente
//$dir.$file['name']
//type=o tipo do arquivo,name=nome do arquivo,tmp_name=onde a pasta se encontra,size,erro;
//se todo array que vc passar o file type nao tiver o arquivo referente so passa ele
?>