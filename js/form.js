
var cadastro = document.forms.login;
var btn = document.getElementById("enviar");
	cadastro.onsubmit = function(){

	var nome = cadastro.nome.value;
	var sobreNome = cadastro.sobreNome.value;
	var senha = cadastro.senha.value;
	var senhaConfirmacao = cadastro.confirmacaoSenha.value;
	if(senha == senhaConfirmacao){	
		if(senha.length < 8){
		alertify.alert("senha muito curta, no minimo 8 caracteres", function(){
    		alertify.error('tente novamente');
 		});
			return false;
		}else{
			alertify.alert("Cadastro concluido com sucesso!!!", function(){
    			alertify.success('concluido');
 			});
 			return false;
		}
	}else{
			alertify.alert("Senhas diferentes", function(){
    			alertify.success('tente novamente');
 			});
	return false;
	}
};