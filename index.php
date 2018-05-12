<html>
<head>
	<title>Programa</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Css/estiloForm.css">
	<script>
		function exibeaqui(){
			var arquivo = new FileReader();
			
			arquivo.onloadend = function(){
				document.getElementById('imag').src = arquivo.result;
			}
			
			if(document.getElementById('Arqui').files[0]){
				arquivo.readAsDataURL(document.getElementById('Arqui').files[0]);
				document.getElementById('imag').style.display = '';
			}else{
				document.getElementById('imag').style.display = 'none';
			}
		}
	</script>
</head>
<body onload="Resetar();">
	<!--Formulario-->
	<section class="ContFormulario">
		<img src="user.png" name="imag" id="imag" onerror="this.style.display = 'none' ">
		<form name="busc" id="Formulario" method="post" enctype= "multipart/form-data" class="formulariodousuario" action="./php/resultados.php" onsubmit="return validacao();">
			<input type="text" name="nomes" id="Nome" placeholder="Nome Completo: ">
			<br><br>
			<input type="text" name="profissaos" id="Profissao" placeholder="Profissão: ">
			<br><br>
			<input type="file" name="arquione" id="Arqui" onchange="exibeaqui()">
			<br><br>
			<input type="text" name="idades" id="Idade" placeholder="Idade: ">
			<br><br>
			<textarea name="descricao" id="limite" rows="5" cols="70" style="resize: none;"></textarea>
			<br><br>
			<button>Enviar</button>
		</form>
	</section>

	<!-- script de validação -->
	<script type="text/javascript" src="Js/reset.js"></script>
	<script type="text/javascript" src="Js/validacao.js"></script>	
</body>
</html>