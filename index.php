<?php

include("test.php");


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Top Ranks</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="normalize.css">
	<link rel="stylesheet" type="text/css" href="Top Ranks.css">
 <link rel="stylesheet" href="assets/css/footer-white.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
</head>
<body>

<nobr>

	<nav>

	<label class="logo"><a href="index.php">Top Ranks</a></label>

	<ul>

		<li><a href="#">PCs</a></li>
		<li><a href="#">Notebooks</a></li>
		<li><a href="Plataforma.html">Sobre nós</a></li>
		<li><a href="cadastro.php">Colaboladores</a></li>
		
	</ul>



	<form action="" class="pesquisa">
		<input name="busca" id="texto" list="historico" placeholder="Uso casual, trabalho, jogos" type="text">
		<button type="submit" style="width:100px;"class="btn">Pesquisar</button>


<datalist id="historico">
	<option value ="Notebooks"></option>
	<option value ="PCs"></option>
	<option value ="Gabinete"></option>

</datalist>

</nav>
</form>
</nobr>

<nobr>
<nav class ="filtros">
     <ul>
     	<li>Tipo
     		<select type="checkbox" id= "filtros" size="1">
			<option>Trabalhar</option>
			<option>Empresas</option>
			<option>Estudar</option>
			<option>Todas opções</option>
 		</select></li>
        <li>Marca
            <select type="checkbox" id= "filtros" size="1">
			<option>Dell
			<option>Lenovo</option>
			<option>Samsung</option>
			<option>Asus</option>
 		</select></li>
			<li> Lazer
			<select type="checkbox" id= "filtros" size="1">
			<option>Jogos</option>
			<option>Filmes, séries</option>
			<option>Redes sociais</option>
			<option>Todas opções</option>
 		</select></li>

        <li>Processador
        <select type="checkbox" id= "filtros" size="1">
			<option>i3</option>
			<option>i5</option>
			<option>i7</option>
			<option>Amd</option>
 		</select></li>
        <li>Memória
        <select type="checkbox" id= "filtros" size="1">
			<option>2gb</option>
			<option>4gb</option>
			<option>8gb</option>
			<option>16gb</option>
 		</select></li>
        <li>Armazenamento
        <select type="checkbox" id= "filtros" size="1">
			<option>SSD SATA</option>
			<option>HDD SATA</option>
			<option>NVme.2</option>
			<option>SSD MMC</option>
 		</select></li>
         <li>Sistema
         <select type="checkbox" id= "filtros" size="1">
			<option>Windows 10 Home</option>
			<option>Windows 10 PRO</option>
			<option>Windows 11</option>
			<option>Linux</option>
 		</select></li>
    </ul>
</nav>
</nobr>



	<table class="tabela1" width="800px" border ="1" cellspacing="5px" cellpadding="20px"
align="left">
		<?php
		if(!isset($_GET['busca'])) {
		} else {
		$pesquisa = $mysqli->real_escape_string($_GET['busca']) ;
		$sql_code = "SELECT * from tb_notebook where ds_funcao LIKE '%$pesquisa%' OR nm_tipo LIKE '%pesquisa%' OR nm_marca LIKE '%$pesquisa%' OR ds_processador LIKE '%$pesquisa%' OR ds_memoria LIKE '%$pesquisa%' OR ds_armazenamento LIKE '%$pesquisa%' OR ds_sistema LIKE '%$pesquisa%' OR vl_preco LIKE '%$pesquisa%' OR nm_site LIKE '$%pesquisa%' OR ds_caracteristicas LIKE '%$pesquisa%' OR imc_arquivo LIKE '$%pesquisa%'";
$sql_query = $mysqli->query($sql_code) or die("ERRO ao consultar! ". $mysqli->error);
	
	if($sql_query->num_rows == 0){
		?>
		<tr>
			<td colspan="8">Nenhum resultado encontrado...</td>
		</tr>
	<?php
	} else {
		while($dados = $sql_query->fetch_assoc()) {
			
			$pasta = "upload/";
			$img = $pasta .$dados['imc_arquivo'];?>
			<tbody align="left">


		<tr>
			<td rowspan="9"><?php echo "<img src='$img' alt= '$dados[imc_arquivo]'/>;" ?>
</td>
			<tr>
			<td>Função: <?php echo $dados['ds_funcao']; ?></td></tr>
			<tr><td>Tipo: <?php echo $dados['nm_tipo']; ?></td></tr>
			<tr>
			<td>Marca: <?php echo $dados['nm_marca']; ?></td>
			<tr><td>Processador: <?php echo $dados['ds_processador']; ?></td></tr>
			<tr><td>Memória: <?php echo $dados['ds_memoria']; ?></td></tr>
			<tr><td>Armazenamento: <?php echo $dados['ds_armazenamento']; ?></td></tr>
			<tr><td>Sistema: <?php echo $dados['ds_sistema']; ?></td>	</tr>
			<tr><td>Site: <?php echo $dados['nm_site']; ?></td></tr>
			<tr><td>Preço: <?php echo $dados['vl_preco']; ?></td>

		</tr></tr>
			
		<tr>
		<td colspan="8">Características: <?php echo $dados['ds_caracteristicas']; ?></td>
		</tr>



	</tbody>
			<?php
		}
	}
	?>

	<?php
	}?>
	
	</table>

<div class="content">
    </div>
    <footer id="myFooter">
        <div class="container">
            <ul>
                <li><a href="Plataforma.html">Sobre nós</a></li>
                <li><a href="https://programadorviking.com.br/">Contato</a></li>
                <li><a href="Cadastro.php">Cadastre sua empresa</a></li>
            </ul>
            <p class="footer-copyright">© 2022 Copyright - Top Rank Pcs e Notebooks</p>
        </div>
        <div class="footer-social">
            <a href="https://www.facebook.com/102106909212161/posts/102682499154602/?substory_index=0&sfnsn=wiwspmo" class="social-icons"><i class="fa fa-facebook"></i></a>
            <a href="https://instagram.com/topr4nk?igshid=YmMyMTA2M2Y=" class="social-icons"><i class="fa fa-instagram"></i></a>
        </div>
    </footer>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>