<?php
require_once("mod_includes/php/ctracker.php");
$pagina = $_GET['pagina'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Advocacia Menecucci</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<script type="text/javascript" src="mod_includes/js/jquery-1.8.3.min.js"> </script> 
<script type="text/javascript" src="mod_includes/js/funcoes.js"></script>

<link rel="stylesheet" type="text/css" href="css/common.css" />
<link rel="stylesheet" type="text/css" href="css/style2.css" />
<script type="text/javascript" src="mod_includes/js/modernizr.custom.79639.js"></script> 

<script src="mod_includes/js/wow.min.js"></script>
<script>
	 new WOW().init();
</script>
<link rel="stylesheet" type="text/css" href="css/animate.css">
<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-67117516-41"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments)};
  gtag('js', new Date());

  gtag('config', 'UA-67117516-41');
</script>
</head>

<body>
<?php include ('mod_topo/topo.php');
include('mod_includes/php/funcoes-jquery.php')
?>
<div class="banner">
    <?php include ('banner.php')?>
</div>

<div id='janela' class='janela' style='display:none;'> </div>

<div class="apresentacao">
	<div class="wrapper">
		<div id="apresentacao">
			<p>De acordo com a Constituição Federal, o Advogado é indispensável à administração da Justiça. Atuando nas mais diversas áreas do Direito, as Advogadas Vanessa Menecucci Pinto, devidamente inscrita nos quadros da OAB/SP sob o nº 395.184 e Viviane Menecucci Pinto, inscrita nos quadros da OAB/SP sob o nº 424.860 tem como princípio uma advocacia combativa e um atendimento individualizado, sob medida para cada caso, fundado no profissionalismo e personalização na escolha da melhor estratégia de defesa.
        </div>
	</div>
</div>

<div class="wrapper">
    <div class="citacao wow fadeIn">
        <br>
        <p class="titulo"> “Eu gosto do<br>
        impossível porque
        lá a concorrência
        é menor.”</p>
        Walt Disney
    </div>
</div>
<div class="equipe">	
</div>
<div id="equipe">
    <div class="wrapper">
		<div class='col1'>
			<p class="destaque vinho">equipe<br>
            menecucci</p>
		</div>
        <div class="col2">
			<p class="subtitulo">Vanessa Menecucci</p>
            <p>Graduada em Direito pela Universidade Braz Cubas, atuou com assistência judiciária na OAB 17ª Subseção de Mogi das Cruzes, estagiou no escritório Mauro Campos de Siqueira – Sociedade de Advogados – e advogou nas áreas cível e trabalhista no Grupo Dimensão, especializado em condomínios, participando de audiências e defesas.
        </div>
        <div class="col2">
			<p class="subtitulo">VIVIANE MENECUCCI </p>
			<p>Graduada em Direito pela Universidade Braz Cubas e pós-graduanda em Direito Penal, Processual Penal, Criminologia e Tribunal do Júri (término - julho de 2021), estagiou durante quatro anos no Fórum de Mogi das Cruzes, nas áreas Cível e Criminal e também estagiou no Grupo Dimensão, especializado em condomínios.
		</div>
    </div>
</div>

<div class="wrapper">
	<div class="contato-home">
    	<div id="contato-home">
        	<div class="bloco">
                <center><p class="destaque">contato</p></center>
				<p>11 <b>4792.7462</b><br>
				 11 <b>99963.4262 / 11 99603.5958</b> <br>
                contato@advocaciamenecucci.com.br<br>
                Rua Ewald Muhleise, 125 | Sala 1 <br>
                César de Souza | Mogi das Cruzes | SP<br>
                CEP: 08820-300</p>
            </div>
        </div>
        <div class="clique wow fadeIn">
        	<a href="#contato" onclick="javascript: altera_display('contato');"><p>ou preencha o formulário aqui</p></a> 
       	</div>
    	<script>
			function altera_display(id) {
				
			if(document.getElementById(id).style.display=="none") {
				var $this = $(this).parent().find('.servicos');
				$(".servicos").not($this).hide();
			   document.getElementById(id).style.display ="block";
			}
			else
				document.getElementById(id).style.display ="none";
			}
		
        </script>

	</div>
</div>
<div class="mapa">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.7391969953223!2d-46.14834623796443!3d-23.50590156575423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cdd9e96b3182a3%3A0xb331c672db30aeb!2sRua+Ewald+Muhleise%2C+125+-+1+-+Cezar+de+Souza%2C+Mogi+das+Cruzes+-+SP%2C+08820-300!5e0!3m2!1spt-BR!2sbr!4v1505918005274" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<div class="wrapper" id="contato" style="display:none;">
    <p class="titulo vinho">Contato</p>
         <form name='form_contato' id='form_contato' enctype='multipart/form-data' method='post' action='index.php?pagina=envia_contato'>
            <input type="text" name='nome' id='nome' placeholder='Nome'><br> 
            <input type="text" name='email' id='email' placeholder='E-mail'><br>
            <input type="text" name='telefone' id='telefone'  onkeypress='return mascaraTEL(this);' maxlength='15' placeholder='Telefone'><br>
            <input type="text" name='assunto' id='assunto' placeholder='Assunto'><br>
            <textarea name='mensagem' id='mensagem' placeholder='Mensagem'></textarea>
            <div id='erro'></div>	
            <input type='button' name='bt_contato' id='bt_contato' value=' Enviar '>
         </form>
         <br><br>
    </div>
</div>
        
<?php include ('mod_rodape/rodape.php')?>
</body>
</html>
<?php
if($pagina == 'envia_contato')
{
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$conheceu = $_POST['conheceu'];
	$assunto = $_POST['assunto'];
	$mensagem = nl2br($_POST['mensagem']);
	
	
	$agora = time();
	$data = getdate($agora);
	$dia_semana = $data[wday];
	$dia_mes = $data[mday];
	$mes = $data[mon];
	$ano = $data[year];
	switch ($dia_semana)
	{
		case 0:
			$dia_semana = "Domingo";
		break;
		case 1:
			$dia_semana = "Segunda-feira";
		break;
		case 2:
			$dia_semana = "Terça-feira";
		break;
		case 3:
			$dia_semana = "Quarta-feira";
		break;
		case 4:
			$dia_semana = "Quinta-feira";
		break;
		case 5:
			$dia_semana = "Sexta-feira";
		break;
		case 6:
			$dia_semana = "Sábado";
		break;
	}
	switch ($mes)
	{
		case 1:
			$mes = "Janeiro";
		break;
		case 2:
			$mes = "Fevereiro";
		break;
		case 3:
			$mes = "Março";
		break;
		case 4:
			$mes = "Abril";
		break;
		case 5:
			$mes = "Maio";
		break;
		case 6:
			$mes = "Junho";
		break;
		case 7:
			$mes = "Julho";
		break;
		case 8:
			$mes = "Agosto";
		break;
		case 9:
			$mes = "Setembro";
		break;
		case 10:
			$mes = "Outubro";
		break;
		case 11:
			$mes = "Novembro";
		break;
		case 12:
			$mes = "Dezembro";
		break;
	}
	$datap = $dia_semana.', '.$dia_mes.' de '.$mes.' de '.$ano;


	// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
	require("mod_includes/php/phpmailer/class.phpmailer.php");
	 
	// Inicia a classe PHPMailer
	$mail = new PHPMailer();
	// Define os dados do servidor e tipo de conexão
	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	$mail->IsSMTP();
	$mail->Host = "mail.advocaciamenecucci.com.br"; // Endereço do servidor SMTP (caso queira utilizar a autenticação, utilize o host smtp.seudomínio.com.br)
	$mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
	$mail->Username = 'autenticacao@advocaciamenecucci.com.br'; // Usuário do servidor SMTP
	$mail->Password = 'menecucci2017'; // Senha do servidor SMTP
	
	 
	// Define o remetente
	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	$mail->From = "$email"; // Seu e-mail
	$mail->Sender = " autenticacao@advocaciamenecucci.com.br"; // Seu e-mail
	$mail->FromName = "$nome"; // Seu nome
	
	 
	// Define os destinatário(s)
	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	$mail->AddAddress('contato@advocaciamenecucci.com.br');
		
	// Define os dados técnicos da Mensagem
	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
	
	$mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)
	 
	// Define a mensagem (Texto e Assunto)
	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	$mail->Subject  = " Formulário de Contato - Advocacia Menecucci"; // Assunto da mensagem
	
	$mail->Body = "
<head>
	<style type='text/css'>
		.margem 		{ padding-top:20px; padding-bottom:20px; padding-left:20px;padding-right:20px;}
		a:link 			{}
		a:visited 		{}
		a:hover 		{ text-decoration: underline; color:#20466D; }
		a:active 		{ text-decoration: none; }
		.texto			{ font-family:'Calibri'; color:#666; font-size:14px; text-align:justify; font-weight:normal;}
		hr				{ border:none; border-top:1px solid #20466D;}
		.rodape			{ font-family:Calibri; color:#727272; font-size:12px; text-align:justify; font-weight:normal; }
				
	</style>
</head>
<body>
	<table style='font-family:Calibri;' align='center' border='0' bordercolor='#20466D' width='100%' cellspacing='0' cellpadding='0'>
	<tr>
		<td align='left'>
			<table class='texto'>
				<tr>
					<td align='right'>
						<b>Nome:</b>
					</td>
					<td align='left'>
						$nome
					</td>
				</tr>

				<tr>
					<td align='right'>
						<b>Email:</b>
					</td>
					<td align='left'>
						$email
					</td>
				</tr>
				<tr>
					<td align='right'>
						<b>Telefone:</b>
					</td>
					<td align='left'>
						$telefone
					</td>
				</tr>
				<tr>
					<td align='right'>
						<b>Onde nos Conheceu:</b>
					</td>
					<td align='left'>
						$conheceu
					</td>
				</tr>
				<tr>
					<td align='right'>
						<b>Assunto:</b>
					</td>
					<td align='left'>
						$assunto
					</td>
				</tr>
				<tr>
					<td align='right'>
						<b>Mensagem:</b>
					</td>
					<td align='left' valign='top'>
						$mensagem
					</td>
				</tr>
			</table>
			<hr>
			<span class='rodape'>
				<font size='1' color='#20466D'><b>Mensagem enviada:</b></font> ".$datap."<br>
				Este é um email gerado automaticamente pelo sistema.<br><br>
				As informações contidas nesta mensagem e nos arquivos anexados são para uso restrito, sendo seu sigilo protegido por lei, não havendo ainda garantia legal quanto à integridade de seu conteúdo. Caso não seja o destinatário, por favor desconsidere essa mensagem. O uso indevido dessas informações será tratado conforme as normas da empresa e a legislação em vigor.
			</font>
		</td>
	</tr>
	</table>
</body>
";
/*$mail->AltBody = 'Este é o corpo da mensagem de teste, em Texto Plano! \r\n 
<IMG src="http://seudomínio.com.br/imagem.jpg" alt=":)"  class="wp-smiley"> ';*/
 
// Define os anexos (opcional)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
//$mail->AddAttachment("/home/login/documento.pdf", "novo_nome.pdf");  // Insere um anexo
 
// Envia o e-mail
$enviado = $mail->Send();
 
// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();

// Exibe uma mensagem de resultado
	if ($enviado)
	{
		echo "
			<SCRIPT language='JavaScript'>
				abreMask(
				'<font color=#B70D18><b>$nome</b></font>, sua mensagem foi enviada com sucesso, em breve responderemos.<br><br>'+
				'<center><input value=\' Ok \' type=\'button\' class=\'but_mask\' onclick=javascript:window.location.href=\'index.php\';></center>' );
			</SCRIPT>
		";
	}
	else
	{
		echo "
			<SCRIPT language='JavaScript'>
				abreMask(
				'Erro ao enviar mensagem. <br>$mail->ErrorInfo.<br><br>'+
				'<input value=\' Ok \' type=\'button\' class=\'but_mask\' onclick=window.history.back();>' );
			</SCRIPT>
		";
	}
}
?>
	
