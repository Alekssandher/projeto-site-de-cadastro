<?php

include("test.php");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario.2</title>
	<link rel="stylesheet" type="text/css" href="Formulario.2.css">
</head>
<?php


    //Abaixo atribuímos os valores provenientes do formulário pelo método POST
    $funcao = $_POST['funcao']; 
    $tipo = $_POST['tipo'];
    $marca = $_POST['marca'];
    $processador = $_POST['processador'];
    $memoria = $_POST['memoria'];
    $armazenamento = $_POST['armazenamento'];
    $sistema = $_POST['sistema'];
    $preco = $_POST['preco'];
    $site = $_POST['site'];
    $caracteristicas = $_POST['caracteristicas'];

    $string_sql = "INSERT INTO tb_notebook (ds_funcao,nm_tipo,nm_marca,ds_processador,ds_memoria,ds_armazenamento,ds_sistema,vl_preco,nm_site) VALUES ('$funcao','$tipo','$marca','$processador','$memoria','$armazenamento','$sistema','$preco','$site', '$caracteristicas')"; //String com consulta SQL da inserção

   $resultado = mysqli_query($mysqli,$string_sql); //Realiza a consulta

	mysqli_close($mysqli);
  //fecha conexão com banco de dados  
	
?> 
<a href="Formulario.2.html">Voltar para formulário de cadastro</a>
<body>
	
	<div class="container">
		<div class="form">
			<div class="contact-info">

			<samp class="circulo one um"></samp>
			<samp class="circulo two dois"></samp>
				


			<form method="POST" action="test.php" id="scrollbar2">
				<h3 class="title one">Computador</h3>

				<div class="input-container one">
					<input type="text" name="funcao" class="input">
					<label for="">Função</label>
					<spon>Função</spon>
				</div>

				<div class="input-container one">
					<input type="text" name="tipo" class="input">
					<label for="">Tipo</label>
					<spon>Tipo</spon>
				</div>

				<div class="input-container one">
					<input type="text" name="marca" class="input">
					<label for="">Marca</label>
					<spon>Marca</spon>
				</div>

				<div class="input-container one">
					<input type="Processador" name="processador" class="input">
					<label for="">Processador</label>
					<spon>Processador</spon>
				</div>

				<div class="input-container one">
					<input type="Memoria" name="memoria" class="input">
					<label for="">Memoria</label>
					<spon>Memoria</spon>
				</div>

				<div class="input-container one">
					<input type="Armazenamento" name="armazenamento" class="input">
					<label for="">Armazenamento</label>
					<spon>Armazenamento</spon>
				</div>

				<div class="input-container one">
					<input type="text" name="sistema" class="input">
					<label for="">Sistema</label>
					<spon>Sistema</spon>
				</div>

				<div class="input-container one">
					<input type="text" name="preco" class="input">
					<label for="">Preço</label>
					<spon>Preço</spon>
				</div>
				
				<div class="input-container textarea one">
					<textarea name="caracteristicas" class="input"></textarea>
					<label for="">Características</label>
					<spon>Características</spon>
				</div>
				<input type="submit" value="Send" class="btn">
			</form>
</div>		


			<div class="contact-form">
			<span class="circle one"></span>
			<span class="circle two"></span>

			<form method="POST" action="test.php" id="scrollbar">
				<h3 class="title">Notebooks</h3>
				<div class="input-container one">
					<input type="text" name="funcao" class="input">
					<label for="">Função</label>
					<spon>Função</spon>
				</div>

				<div class="input-container one">
					<input type="text" name="tipo" class="input">
					<label for="">Tipo</label>
					<spon>Tipo</spon>
				</div>

				<div class="input-container">
					<input type="text" name="marca" class="input">
					<label for="">Marca</label>
					<span>Marca</span>
				</div>

				<div class="input-container">
					<input type="text" name="processador" class="input">
					<label for="">Processador</label>
					<span>Processador</span>
				</div>

				<div class="input-container">
					<input type="text" name="memoria" class="input">
					<label for="">Memoria</label>
					<span>Memoria</span>
				</div>

				<div class="input-container">
					<input type="Text" name="armazenamento" class="input">
					<label for="">Armazenamento</label>
					<span>Armazenamento</span>
				</div>

				<div class="input-container one">
					<input type="text" name="sistema" class="input">
					<label for="">Sistema</label>
					<spon>Sistema</spon>
				</div>

				<div class="input-container one">
					<input type="text" name="preco" class="input">
					<label for="">Preço</label>
					<spon>Preço</spon>
				</div>

				<div class="input-container one">
					<input type="text" name="site" class="input">
					<label for="">Site</label>
					<spon>Site</spon>
				</div>

				<div class="input-container textarea">
					<textarea name="caracteristicas" class="input"></textarea>
					<label for="">Características</label>
					<span>Características</span>
				</div>
				<input type="submit" value="Send" class="btn">
			</form>
</div>
</div>
</div>
</body>
</html>