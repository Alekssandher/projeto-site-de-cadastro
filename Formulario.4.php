<?php
include('verifica_login.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario.4</title>
	<link rel="stylesheet" type="text/css" href="Formulario.4.css">
</head>
<body>
		<h2><a href="logout.php">Encerrar Acesso</a></h2>
	<div class="container">
		<div class="form">
			<div class="contact-info">

			<samp class="circulo one um"></samp>
			<samp class="circulo two dois"></samp>
				


			<form method="POST" action="registro.php" id="scrollbar2">
				 <div class="title one"><h1>Computador</h1></div>

				<div class="input-container">
					<input type="text" name="funcao" class="input">
					<label for="">Função</label>
					<span>Função</span>
				</div>

				<div class="input-container one">
					<input type="text" name="tipo" class="input">
					<label for="">Tipo</label>
					<span>Tipo</span>
				</div>

				<div class="input-container one">
					<input type="text" name="marca" class="input">
					<label for="">Marca</label>
					<span>Marca</span>
				</div>

				<div class="input-container one">
					<input type="Processador" name="processador" class="input">
					<label for="">Processador</label>
					<span>Processador</span>
				</div>

				<div class="input-container one">
					<input type="Memoria" name="memoria" class="input">
					<label for="">Memoria</label>
					<span>Memoria</span>
				</div>

				<div class="input-container one">
					<input type="Armazenamento" name="armazenamento" class="input">
					<label for="">Armazenamento</label>
					<span>Armazenamento</span>
				</div>

				<div class="input-container one">
					<input type="text" name="sistema" class="input">
					<label for="">Sistema</label>
					<span>Sistema</span>
				</div>

				<div class="input-container one">
					<input type="text" name="preco" class="input">
					<label for="">Preço</label>
					<span>Preço</span>
				</div>
				

				<div class="input-container one">
					<input type="text" name="site" class="input">
					<label for="">Site</label>
					<span>Site</span>
				</div>
				<div class="input-container one">
					<input type="file" required name="imc_arquivo" class="input">
					<label for="">Imagem</label>
					<span>Imagem</span>
				</div>

				<div class="input-container textarea one">
					<textarea name="caracteristicas" class="input"></textarea>
					<label for="">Características</label>
					<span>Catacterísticas</span>
				</div>
				<input type="submit" value="Enviar" class="btn">
			</form>
</div>	



<div class="contact-form">
			<span class="circle one"></span>
			<span class="circle two"></span>

			<form method="POST" action="registro.php" id="scrollbar">
				<h3 class="title two">Notebooks</h3>
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
					<spon>Marca</spon>
				</div>

				<div class="input-container">
					<input type="text" name="processador" class="input">
					<label for="">Processador</label>
					<spon>Processador</spon>
				</div>

				<div class="input-container">
					<input type="text" name="memoria" class="input">
					<label for="">Memoria</label>
					<spon>Memoria</spon>
				</div>

				<div class="input-container">
					<input type="Text" name="armazenamento" class="input">
					<label for="">Armazenamento</label>
					<spon>Armazenamento</spon>
				</div>

				<div class="input-container">
					<input type="text" name="sistema" class="input">
					<label for="">Sistema</label>
					<spon>Sistema</spon>
				</div>

				<div class="input-container">
					<input type="text" name="preco" class="input">
					<label for="">Preço</label>
					<spon>Preço</spon>
				</div>

				<div class="input-container">
					<input type="text" name="site" class="input">
					<label for="">Site</label>
					<spon>Site</spon>
				</div>
				<div class="input-container">
					<input type="file" required name="imc_arquivo" class="input">
					<label for="">Imagem</label>
					<spon>Imagem</spon>
				</div>
				<div class="input-container textarea">
					<textarea name="caracteristicas" class="input"></textarea>
					<label for="">Características</label>
					<spon>Características</spon>
				</div>
				<input type="submit" value="Enviar" class="btn">
			</form>
</div>

</div>
</div>
<script>
		const inputs = document.querySelectorAll(".input")

		function focusFunc() {
			let parent = this.parentNode;
			parent.classList.add("focus")
		}

		function blurFunc() {
			let parent = this.parentNode;
			if (this.value ==""){
			parent.classList.remove("focus")
		}
		}


		inputs.forEach((input) => {
			input.addEventListener("focus", focusFunc);
			input.addEventListener("blur", blurFunc);
		});
	</script>

</body>
</html>