function calculaMembrosGestao(mentor)
{
	var m;
	for(m=1; m < 10; m++)
	{
		jQuery("#ges_qtd_membro"+(m+1)).val(mentor*Math.pow(7,m));
	}
}
//----------------------------------------MASCARAS-----------------------------------------------//

function mascaraData(inputData, e)
{
	var data = inputData.value;
	if(data.length == 10)
	{
		return false;
	}
	else
	{
		if(document.all) // Internet Explorer
		var tecla = event.keyCode;
		else //Outros Browsers
		var tecla = e.which;
		
		if(tecla >= 48 && tecla < 58)
		{ // numeros de 0 a 9 e "/"
			var data = inputData.value;
			if (data.length == 2 || data.length == 5){
			data += '/';
			inputData.value = data;
		}
		}
		else if(tecla == 8 || tecla == 0) // Backspace, Delete e setas direcionais(para mover o cursor, apenas para FF)
		return true;
		else
		return false;
	}
}

function mascaraCEP(campoCEP)
{
	var cep = campoCEP.value;
    if (cep.length == 5)
    {
    	cep = cep + '-';
        campoCEP.value = cep;
	    return true;     
		alert('aa');         
    }
}

function mascaraRG(campoRG)
{
	var reg = campoRG.value;
    if (reg.length == 2)
    {
    	reg = reg + '.';
        campoRG.value = reg;
	    return true;              
    }
    if (reg.length == 6)
    {
        reg = reg + '.';
        campoRG.value = reg;
        return true;
    }
	 if (reg.length == 10)
    {
        reg = reg + '-';
        campoRG.value = reg;
        return true;
    }
}

function mascaraCPF(campoCPF)
{
	var cpf = campoCPF.value;
    if (cpf.length == 3)
    {
    	cpf = cpf + '.';
        campoCPF.value = cpf;
	    return true;              
    }
    if (cpf.length == 7)
    {
        cpf = cpf + '.';
        campoCPF.value = cpf;
        return true;
    }
	 if (cpf.length == 11)
    {
        cpf = cpf + '-';
        campoCPF.value = cpf;
        return true;
    }
}
function mascaraCNPJ(campoCNPJ)
{
	var cnpj = campoCNPJ.value;
    if (cnpj.length == 2)
    {
    	cnpj = cnpj + '.';
        campoCNPJ.value = cnpj;
	    return true;              
    }
    if (cnpj.length == 6)
    {
        cnpj = cnpj + '.';
        campoCNPJ.value = cnpj;
        return true;
    }
	if (cnpj.length == 10)
    {
        cnpj = cnpj + '/';
        campoCNPJ.value = cnpj;
        return true;
    }
	 if (cnpj.length == 15)
    {
        cnpj = cnpj + '-';
        campoCNPJ.value = cnpj;
        return true;
    }
}

function mascaraTEL(campoTEL)
{
	var tel = campoTEL.value;
    if (tel.length == 1)
    {
    	tel = '(' + tel;
        campoTEL.value = tel;
	    return true;              
    }
    if (tel.length == 3)
    {
        tel = tel + ')';
       campoTEL.value = tel;
        return true;
    }
	if (tel.length == 11)
    {
        tel = tel.substr(0,8) + '-' + tel.substr(8,11);
        campoTEL.value = tel;
        return true;
    }
	if (tel.length == 13)
    {
	
			tel = tel.substr(0,8) + tel.substr(9,1) + '-' + tel.substr(10,12);
			campoTEL.value = tel;
			return true;
	}
}

function SomenteNumero(e)
{
	var tecla=(window.event)?event.keyCode:e.which;
	if((tecla > 47 && tecla < 58))
		return true;
		else
		{
			if (tecla != 8)
				return false;
			else
			return true;
		}
}
function SomenteNumeroRG(e)
{
	var tecla=(window.event)?event.keyCode:e.which;
	if((tecla > 47 && tecla < 58 || tecla == 88 || tecla == 120))
		return true;
		else
		{
			if (tecla != 8)
				return false;
			else
			return true;
		}
}
function SomenteNumeroCEL(e)
{
	var tecla=(window.event)?event.keyCode:e.which;
	if((tecla > 47 && tecla < 58 ))
		return true;
		else
		{
			if (tecla != 8)
				return false;
			else
			return true;
		}
}
function MascaraMoeda(objTextBox, SeparadorMilesimo, SeparadorDecimal, e){

    var sep = 0;
    var key = '';
    var i = j = 0;
    var len = len2 = 0;
    var strCheck = '0123456789';
    var aux = aux2 = '';
    var whichCode = (window.Event) ? e.which : e.keyCode;
    if (whichCode == 13) return true;
    key = String.fromCharCode(whichCode); // Valor para o código da Chave
    if (strCheck.indexOf(key) == -1) return false; // Chave inválida
    len = objTextBox.value.length;
    for(i = 0; i < len; i++)
        if ((objTextBox.value.charAt(i) != '0') && (objTextBox.value.charAt(i) != SeparadorDecimal)) break;
    aux = '';
    for(; i < len; i++)
        if (strCheck.indexOf(objTextBox.value.charAt(i))!=-1) aux += objTextBox.value.charAt(i);
    aux += key;
    len = aux.length;
    if (len == 0) objTextBox.value = '';
    if (len == 1) objTextBox.value = '0'+ SeparadorDecimal + '0' + aux;
    if (len == 2) objTextBox.value = '0'+ SeparadorDecimal + aux;
    if (len > 2) {
        aux2 = '';
        for (j = 0, i = len - 3; i >= 0; i--) {
            if (j == 3) {
                aux2 += SeparadorMilesimo;
                j = 0;
            }
            aux2 += aux.charAt(i);
            j++;
        }
        objTextBox.value = '';
        len2 = aux2.length;
        for (i = len2 - 1; i >= 0; i--)
        objTextBox.value += aux2.charAt(i);
        objTextBox.value += SeparadorDecimal + aux.substr(len - 2, len);
    }
    return false;
}
//----------------------------------------FIM MASCARAS-----------------------------------------------//



//--------------------------------------FUNCOÇES GERAIS----------------------------------------------//

function limpar(campo) 
{
	campo.value = '';
}

function voltar() 
{
	window.history.back();
}
function pesquisaTipoP (valor)
{
	if(valor == 'pf')
	{
		document.getElementById('pf').style.visibility = 'visible';
		document.getElementById('pj').style.visibility = 'hidden';
	}
	else if(valor == 'pj')
	{
		document.getElementById('pf').style.visibility = 'hidden';
		document.getElementById('pj').style.visibility = 'visible';
	}
}
//------------------------------------FIM FUNCOÇES GERAIS--------------------------------------------//




//INICIO AUTO-COMPLETE BUSCAR FORMULARIO PESSOA FISICA/JURIDICA
function pesquisaTipoPessoa(valor)
{
	//FUNÇÃO QUE MONTA A URL E CHAMA A FUNÇÃO AJAX
	url="busca_cadastro.php?valor="+valor;	
	ajax(url);
}
function ajax(url)
{
	//alert(nick);
	//alert(dest);
	//alert(msg);
	req = null;
	// Procura por um objeto nativo (Mozilla/Safari)
	if (window.XMLHttpRequest) 
	{
		req = new XMLHttpRequest();
		req.onreadystatechange = processReqChange;
		req.open("GET",url,true);req.send(null);
		// Procura por uma versão ActiveX (IE)
	} 
	else if (window.ActiveXObject) 
	{
		req = new ActiveXObject("Microsoft.XMLHTTP");
		if (req) 
		{ 
			req.onreadystatechange = processReqChange;
			req.open("GET",url,true);
			req.send();
 		}
	}
}
function processReqChange()
{ 	// apenas quando o estado for "completado"
	if (req.readyState == 4) 
	{   // apenas se o servidor retornar "OK"
		if (req.status ==200) 
		{	// procura pela div id="pagina" e insere o conteudo retornado nela, como texto HTML 
			document.getElementById('pf_ou_pj').innerHTML = req.responseText;
		}
		else 
		{
			alert("Houve um problema ao obter os dados:n" + req.statusText);
		}
	}
}
// FIM AUTO-COMPLETE BUSCAR PARECER



function abrir(URL) {

  var width = 920;
  var height = 500;

  var left = 99;
  var top = 99;

  window.open(URL,'janela', 'width='+width+', height='+height+', top='+top+', left='+left+', scrollbars=yes, status=no, toolbar=no, location=no, directories=no, menubar=no, resizable=no, fullscreen=no');

}

function aumentarZoom() 
{
	if (window.parent.document.body.style.zoom != undefined && window.parent.document.body.style.zoom != 0)
	{
		window.parent.document.body.style.zoom *= 1.05
	}
	else
	{
		window.parent.document.body.style.zoom = 1.05
	}
}

function zerarZoom()
{
	window.parent.document.body.style.zoom = 1
}

function diminuirZoom()
{
	if (window.parent.document.body.style.zoom != undefined && window.parent.document.body.style.zoom != 0)
	{
		window.parent.document.body.style.zoom /= 1.05
	}
	else
	{
		window.parent.document.body.style.zoom = 1 / 1.05
	}
}
