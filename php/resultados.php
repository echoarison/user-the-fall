<?php
	require "PessoaJS.php";
?>
<?php
	$arqft = $_FILES['arquione']['name'];
	$destino = "../img/". $_FILES['arquione']['name'];

	//movendo o arquivo
	move_uploaded_file($_FILES['arquione']['tmp_name'], $destino);
?>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../Css/resultado.css">
	<script>
		function Resultados(){
			ObjetoPessoa();
			document.getElementById('imagem').src="<?php echo $destino; ?>";
		}
	</script>
</head>
<body onload="Resultados()">
	<section class="resultfnl">
		<article>
			<img src="../img/user.png" id="imagem" alt="Erro" class="ing" height="200" width="200">
			<p id="texto" class="text">
				<label>
					Nome:<span id="Nome"></span>
				</label>
				
				<label>
					Profissão:<span id="Profissao"></span>
				</label>
				
				<label>
					Idade:<span id="Idade"></span>
				</label>
				
				<label>
					Descrição:<span id="Descricao"></span>
				</label>	
			</p>
			<button onclick="backPages();" type="button">Voltar</button>
		</article>
	</section>
	<!-- script voltarpgs -->
	<script type="text/javascript" src="../Js/voltaPaginas.js"></script>
</body>
</html>	