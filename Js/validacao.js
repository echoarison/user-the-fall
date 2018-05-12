function validacao(){
	var nome, profissao, idade, descricao;

	nome = document.getElementById("Nome");
	profissao = document.getElementById("Profissao");
	idade = document.getElementById("Idade");
	descricao = document.getElementById("limite");

	if(nome.value == ""){
		alert("Digite o seu nome para prosseguir!!!");
		nome.focus();
		return false;
	}else if(profissao.value == ""){
		alert("Digite uma profissão!!!");
		profissao.focus();
		return false;
	}else if(idade.value == ""){
		alert("Digite uma idade!!!");
		idade.focus();
		return false;
	}else if(descricao.value == ""){
		alert("Digita uma descrição!!!");
		descricao.focus();
		return false;
	}

	if(isNaN(idade.value)){
		alert("Você é burro já viu idade com letras, mas queremos numeros e não letras!!!");
		idade.focus();
		return false;
	}else if(idade.value.length >= 3){
		alert("Você não possui esse tipo de idade, iventa outra meu amigo!!!");
		idade.focus();
		return false;
	}
}

function limite(){
	var descricao;
	descricao = document.getElementById("limite");
	
	alert("Seu limite é de 400 caracteres!!!");

	if(descricao.value.length >= 400){
		alert('Você chegou ao seu limites de escrita!!!');
		descricao.focus();
	}
}