// validação do cep
window.onload = function (){inicializarEventos();}
function inicializarEventos(){var x = document.getElementById("cep");x.addEventListener("change",pesquisaCep);}

function isCepInvalido(cep){
    var regex_cepvalido = RegExp("(^[0-9]{8}$)|(^[0-9]{5}-[0-9]{3}$)");

    return(regex_cepvalido.test(cep) == false);
}

function setVisible(name,visible) {
    var valido = document.getElementById(name);

    if(visible)
        valido.style.visibility = 'visible';
    else
        valido.style.visibility = 'hidden';


}

function meu_callback(conteudo){
    if("erro" in conteudo){
        setVisible("cep_invalido",true);
    }else{
        document.getElementById("rua").value = conteudo.logradouro;
        document.getElementById("cidade").value = conteudo.localidade;
        document.getElementById("estado").value = conteudo.uf;
    }
}

function pesquisaCep(){
    var cep = document.getElementById("cep").value; 
    if(isCepInvalido(cep)){
        setVisible("cep_invalido",true);
        return false;
    }else{
        setVisible("cep_invalido",false);
        //Cria elemento script
        var script = document.createElement("script");
        //Cria um calback
        script.src = "https://viacep.com.br/ws/" + cep +
                    "/json/?callback=meu_callback";
        //Insere no DOM do HTML
        document.body.appendChild(script);
return true;
    }
}

//validação do nome
function validarNome(){
    var nome = document.getElementById("nome").value;
    var regexLetra = RegExp("^[a-z A-Z]{5,40}$");

    if(regexLetra.test(nome) == false){
        setVisible("nome_invalido",true);
        return false;

    }else{
        setVisible("nome_invalido",false);
        return true;
    }
}

//validação do email

function validarEmail(){
    var email = document.getElementById("email").value;
    var regexLetra = RegExp("^[a-z0-9.]+@[a-z0-9]+\.[a-z]+$");

    if(regexLetra.test(email) == false){
        setVisible("email_invalido",true);
        return false;

    }else{
        setVisible("email_invalido",false);
        return true;
    }
}


// validar cpf
function validarCpf(){
    var cpf = document.getElementById("cpf").value;
    var regex = RegExp("(^[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}$)|(^[0-9]{11}$)")
    if(regex.test(cpf)==false){
        setVisible("cpf_invalido", true);
        return false;
    }else{
        setVisible("cpf_invalido",false);
        return true;
    }
}

//validar DN
function validarDn(){
    var Dn= document.getElementById("Dn").value;
    var regex = RegExp("^[0-9]{2}/[0-9]{2}/[0-9]{4}$");
    if(regex.test(Dn)==false){
        setVisible("Dn_invalido",true);
        return false;
    }else{
        setVisible("Dn_invalido",false);
        return true;
    }
}

//validar numero
function validarNumero(){
    var numero = document.getElementById("nmr").value;
    var regex = RegExp("^[0-9]{1,5}$");
    if(regex.test(numero)==false){
        setVisible("nmr_invalido",true);
        return false;
    }else{
        setVisible("nmr_invalido",false);
        return true;
    }
}


//validar complemento
function validarComplemento(){
    var compl = document.getElementById("complemento").value;
    var regex = RegExp("^[a-z 1-9]{0,15}$");
if(regex.test(compl)==false){
        setVisible("complemento_invalido",true);
        return false;
    }else{
        setVisible("complemento_invalido",false);
        return true;
    }
}

//validar cidade
function validarCidade(){
    var cidade = document.getElementById("cidade").value;
    var regex = RegExp("^[a-z A-Z]{3,40}$");
    if(regex.test(cidade)==false){
        setVisible("cidade_invalido",true);
        return false;
    }else{
        setVisible("cidade_invalido",false);
        return true;
    }
}

//validar UF
function validarEstado(){
    var estado = document.getElementById("estado").value;
    var regex = RegExp("^[A-Z]{2}$");
    if(regex.test(estado)==false){
        setVisible("estado_invalido",true);
        return false;
    }else{
        setVisible("estado_invalido",false);
        return true;
    }
}

//validar senha
function validarSenha(){
    
    var regex = RegExp("^[A-Z a-z 0-9]{6,8}$");
    var NovaSenha = document.getElementById("senha").value;
    var CNovaSenha = document.getElementById("confirmar_senha").value;

   if(NovaSenha == CNovaSenha){
         setVisible("Csenhainvalida_invalido",false);
    if (regex.test(NovaSenha)==false) {
        setVisible("senha_invalido",true);
        return false;
       }else{
        setVisible("senha_invalido",false);
       }
   }else{

     setVisible("Csenhainvalida_invalido",true);
 }
  return true;
}