<?php
header('Content-type: text/json');
require_once("../php/ctracker.php");
include('../php/connect.php');
date_default_timezone_set('America/Sao_Paulo');
function geraTimestamp($data) {
		$partes = explode('-', $data);
		return mktime(0, 0, 0, $partes[1], $partes[2], $partes[0]);
		}

$sql = "SELECT * FROM cadastro_agenda";
$stmt = $PDO->prepare($sql);
$stmt->execute();

$stmt_ultimo = $PDO->prepare($sql);
$stmt_ultimo->execute();
$ultimo_registro = $stmt_ultimo->fetchAll(PDO::FETCH_COLUMN);
$ultimo_registro = end($ultimo_registro);



echo '[';

while($result = $stmt->fetch())
{	


		
		// Usa a função criada e pega o timestamp das duas datas:
		$time_inicial = geraTimestamp($result['agnd_data_inicio']);
		$time_final = geraTimestamp($result['agnd_data_fim']);
		// Calcula a diferença de segundos entre as duas datas:
		$diferenca = $time_final - $time_inicial; // 19522800 segundos
		// Calcula a diferença de dias
		$dias = (int)floor( $diferenca / (60 * 60 * 24)); // 225 dias
		// Exibe uma mensagem de resultado:
		//echo "A diferença entre as datas ".$data_inicial." e ".$data_final." é de <strong>".$dias."</strong> dias";
		
		for($x = 0; $x <= $dias; $x++)
		{
			
			$data = date('Y-m-d', strtotime("+".$x." days",strtotime($result['agnd_data_inicio']))); 
			//echo $data."<br>";
			unset($dados['agi_data']);
			$dados['agi_data'] = $data;
			//print_r($dados);
				if($ultimo_registro !== $result['agnd_id'])
				{	
				
					echo '	{ "date": "'.$data.' 10:00:00", "type": "demo", "gerenciar": "'.$result['agnd_id'].'", "imagem": "'.$result['agnd_imagem'].'", "titulo": "'.$result['agnd_titulo'].'", "url": "cadastro_agenda.php?pagina=cadastro_agenda_editar&agnd_id='.$result['agnd_id'].'&login='.$login.'&n='.$n.'", "description": "'.$result['agnd_descricao'].'"},';			
				}
				else
				{	
				$z="";
				if($x != $dias) { $z = ",";}
					echo '	{ "date": "'.$data.' 10:00:00", "type": "demo", "gerenciar": "'.$result['agnd_id'].'", "imagem": "'.$result['agnd_imagem'].'", "titulo": "'.$result['agnd_titulo'].'", "url": "cadastro_agenda.php?pagina=cadastro_agenda_editar&agnd_id='.$result['agnd_id'].'&login='.$login.'&n='.$n.'", "description": "'.$result['agnd_descricao'].'"}'.$z.'';			
				}
		}
}
	
echo ']';
//echo '	{ "date": "'; echo $initTime+3600000; echo '", "type": "demo", "title": "Project '; echo $i; echo ' demo", "description": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.", "url": "http://www.event2.com/" }';

//echo '[';
//	echo '	{ "date": "2015-11-03 16:30:10", "hour": "09:00 as 12:00", "espaco": "", "publico": "Pequenos de 3 a 6 anos", "comquem": "Brincadores", "valor": "R$100,00", "type": "meeting", "title": "Dança Adulto", "description": "Lorem Ipsum dolor set" },';
//	echo '	{ "date": "2015-11-03 17:30:10", "hour": "09:00 as 10:00", "espaco": "Sala Pequena", "publico": "Pequeninos de 8 a 30 meses", "comquem": "Brincadores", "valor": "R$150,00", "type": "demo", "title": "Sensorial Baby", "description": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." }';
//echo ']';
?>
