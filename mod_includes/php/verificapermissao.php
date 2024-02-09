<?php 
$sql = "SELECT * FROM admin_setores_permissoes
		INNER JOIN ( admin_submodulos 
			INNER JOIN admin_modulos 
			ON admin_modulos.mod_id = admin_submodulos.sub_modulo )
		ON admin_submodulos.sub_id = admin_setores_permissoes.sep_submodulo
		INNER JOIN ( admin_setores 
			INNER JOIN admin_usuarios 
			ON admin_usuarios.usu_setor = admin_setores.set_id )
		ON admin_setores.set_id = admin_setores_permissoes.sep_setor
		WHERE sep_setor = :setor AND sub_link = :sub_link AND usu_nome = :nome AND usu_login = :login AND usu_status = :status ";
$stmt = $PDO->prepare( $sql );
$stmt->bindParam( ':setor', 	$_SESSION['setor'] );
$stmt->bindParam( ':sub_link', 	$pagina_link );
$stmt->bindParam( ':nome', 		$n );
$stmt->bindParam( ':login', 	$login );
$stmt->bindValue( ':status', 	1 );
$stmt->execute();
$rows = $stmt->rowCount();
if($rows > 0)
{
	
}
else
{
	unset($_SESSION['cape_sistema']);
	unset($_SESSION['setor']);
	unset($_SESSION['setor_nome']);
	$_SESSION['usuario_id'] = "null";
	session_write_close();
	echo "&nbsp;
		 <SCRIPT language='JavaScript'>
		 	abreMask(
			'<img src=../imagens/x.png> Você não tem permissão para acessar esta área.<br>Por favor faça Login.<br><br>'+
			'<input value=\' Ok \' type=\'button\' onclick=javascript:window.location.href=\'login.php\';>' );
		</SCRIPT>
		 ";
		 
}

if ((!isset($_SESSION['cape_sistema']))  OR ($_SESSION['cape_sistema'] != $login.md5($n)))
{	
	unset($_SESSION['cape_sistema']);
	unset($_SESSION['setor']);
	unset($_SESSION['setor_nome']);
	$_SESSION['usuario_id'] = "null";
	session_write_close();
	echo "&nbsp;
		<SCRIPT language='JavaScript'>
			abreMask(
			'<img src=../imagens/x.png> Você não tem permissão para acessar esta área.<br>Por favor faça Login.<br><br>'+
			'<input value=\' Ok \' type=\'button\' onclick=javascript:window.location.href=\'login.php\';>' );
		</SCRIPT>
		 ";
	exit;
}
?>
