<?php 

$file_name = $_FILES['file']['name'];
$tmp_name = $_FILES['file']['tmp_name'];

$file_up_name = time().$file_name;
// sleep(30);
$retorno = move_uploaded_file($tmp_name,"./files/$file_up_name");
var_dump($retorno);
if(!$retorno){
echo "Not uploaded because of error #".$_FILES["file"]["error"];	
}
