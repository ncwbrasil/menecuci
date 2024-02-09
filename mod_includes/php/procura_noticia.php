<?php
function truncate( $string, $length, $truncateAfter = TRUE, $truncateString = '...' ) {
    if( strlen( $string ) <= $length ) {
        return $string;
    }
    $position = ( $truncateAfter == TRUE ? strrpos( substr( $string, 0, $length ), ' ' ) :
                                            strpos( substr( $string, $length ), ' ' ) + $length );
    return substr( $string, 0, $position ) . $truncateString;
}

include('connect.php');

$fil_dia = $_POST['dia'];
if($fil_dia == 1)
{
	$dia = 7;
	$dia_query = " (agnd_data_fim  BETWEEN date(now()) AND datediff(agnd_data_fim, date(now())) <=:dia1 and datediff(agnd_data_fim, date(now())) >=0 AND datediff(agnd_data_inicio, date(now())) <=:dia2) ";
}
elseif($fil_dia == 2)
{
	$dia = 15;
	$dia_query = " (agnd_data_fim  BETWEEN date(now()) AND datediff(agnd_data_fim, date(now())) <=:dia1 and datediff(agnd_data_fim, date(now())) >=0 AND datediff(agnd_data_inicio, date(now())) <=:dia2)";
}
elseif($fil_dia == 3)
{
	$dia = 30;
	$dia_query = " (agnd_data_fim  BETWEEN date(now()) AND datediff(agnd_data_fim, date(now())) <=:dia1 and datediff(agnd_data_fim, date(now())) >=0 AND datediff(agnd_data_inicio, date(now())) <=:dia2)";
}
elseif($fil_dia == 4)
{
	$dia = 45;
	$dia_query = " (agnd_data_fim  BETWEEN date(now()) AND datediff(agnd_data_fim, date(now())) <=:dia1 and datediff(agnd_data_fim, date(now())) >=0 AND datediff(agnd_data_inicio, date(now())) <=:dia2)";
}
else
{
	$dia_query = " 1 = 1 ";
}

$sql = "SELECT * FROM cadastro_agenda 
		WHERE ".$dia_query."
		ORDER BY agnd_data_fim ASC
		";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':dia1', 	$dia);
$stmt->bindParam(':dia2', 	$dia);
              
$stmt->execute();
$rows = $stmt->rowCount();

if($rows>0)
{
	while($result = $stmt->fetch())
	{
		echo "
		<a href='agenda/".$result['agnd_url']."'>
		<div class='bloco'>
			<div class='imagem_noticia'>
				<img src='imagem.php?arquivo=".str_replace("../","",$result['agnd_imagem'])."&largura=160&altura=100&cliente=mini'>
			</div>
			<div class='descricao'>
				<p class='titulo2'>".$result['agnd_titulo']."</p>
				<p class='descricao'>".truncate(strip_tags(preg_replace("/<img[^>]+\>/i", " ",str_replace("<br />"," ",str_replace("</p>"," ",str_replace("<p>"," ",$result['agnd_descricao']))))),65)."</p>
				<br><p class='data'>De ".implode("/",array_reverse(explode("-",$result['agnd_data_inicio'])))."  Até o dia ".implode("/",array_reverse(explode("-",$result['agnd_data_fim'])))."</p>

			</div>
		</div>
		</a>
		";
	}
}
else
{
	echo "Não foi possível carregar as notícias.";
}
?>