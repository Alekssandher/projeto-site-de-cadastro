<?php 
include_once("test.php");
$msg = false;
?>

<?php
    if(isset($_FILES['imc_arquivo'])){
        $arquivo = $_FILES['imc_arquivo']['name'];
        $pasta = "upload/";
        $novo_nome = (uniqid($arquivo['name'])).".".$extensao;
        $extensao = strtolower(pathinfo($novo_nome['name'], PATHINFO_EXTENSION));
        
  $imagem = move_uploaded_file($arquivo['tmp_name'], $pasta.$novo_nome . "." . $extensao);
    }

$funcao = filter_input(INPUT_POST, 'funcao', FILTER_SANITIZE_STRING) ;
$tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING) ;
$marca = filter_input(INPUT_POST, 'marca', FILTER_SANITIZE_STRING) ;
$processador = filter_input(INPUT_POST, 'processador', FILTER_SANITIZE_STRING) ;
$memoria = filter_input(INPUT_POST, 'memoria', FILTER_SANITIZE_STRING) ;
$armazenamento = filter_input(INPUT_POST, 'armazenamento', FILTER_SANITIZE_STRING) ;
$sistema = filter_input(INPUT_POST, 'sistema', FILTER_SANITIZE_STRING) ;
$preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_STRING) ;
$site = filter_input(INPUT_POST, 'site', FILTER_SANITIZE_STRING) ;
$caracteristicas = filter_input(INPUT_POST, 'caracteristicas', FILTER_SANITIZE_STRING) ;
$arquivo = filter_input(INPUT_POST, 'imc_arquivo', FILTER_SANITIZE_STRING) ;
$string_sql = "INSERT INTO tb_notebook (ds_funcao,nm_tipo,nm_marca,ds_processador,ds_memoria,ds_armazenamento,ds_sistema,vl_preco,nm_site, ds_caracteristicas, imc_arquivo, dt_data) VALUES ('$funcao','$tipo','$marca','$processador','$memoria','$armazenamento','$sistema','$preco','$site', '$caracteristicas', '$arquivo', NOW())";
if($mysqli->query($string_sql)){
echo $msg = "Produto cadastrado com sucesso!";}
else{
echo $msg = "Falha ao enviar.";}
mysqli_close($mysqli);

 ?>