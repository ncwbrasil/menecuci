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

$fil_categoria = $_POST['fil_categoria'];
if($fil_categoria != '00')
{
	$categoria_query = 'agnd_categoria = :categoria';
}
else
{
	$categoria_query= " 1 = 1 ";
}

$sql = "SELECT * FROM cadastro_agenda 
 		LEFT JOIN aux_categorias ON aux_categorias.cat_id = cadastro_agenda.agnd_categoria
		WHERE ".$categoria_query." AND agnd_data_fim >= date(now())
		ORDER BY agnd_data_fim ASC
		";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':categoria', 	$fil_categoria);
              
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

