<script>
 function ObjetoPessoa(){
	var pessoa = {
		nome: "<?php echo $_POST['nomes'];?>",
		profissao: "<?php echo $_POST['profissaos'];?>",
		idade: "<?php echo $_POST['idades'];?>",
		descricao:"<?php echo $_POST['descricao'];?>",
		trocadearea: function(){
			if(pessoa.profissao == "ADM" || pessoa.profissao == "Admistrador" || pessoa.profissao == "Auxiliar Admistrativo" || pessoa.profissao == "adm"){
				pessoa.profissao = "CADE O MEU CAFÉ";
			}else if(pessoa.profissao == "TI" || pessoa.profissao == "Programador" || pessoa.profissao == "Desenvolverdor Web" || pessoa.profissao == "programador web" || pessoa.profissao == "Programador Web"){
				pessoa.profissao = "Você é um SEMI-DEUS";
			}else if(pessoa.profissao == "não tenho emprego"){
				pessoa.profissao = "Você esta fudido na vida";
			}else{
				pessoa.profissao;
			}
		},
		mostrar: function (){
			document.getElementById("texto").innerHTML = pessoa.nome + "<br>" + pessoa.profissao + "<br>" + pessoa.idade + "<br>" + pessoa.descricao;
		}
	};
	pessoa.trocadearea();
	pessoa.mostrar();
}	
</script>