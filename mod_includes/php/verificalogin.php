<div id='janela' class='janela' style='display:none;'> </div>
<div id='janelaAcao' class='janelaAcao' style='display:none;'> </div>
<?php 
$sql = "SELECT * FROM admin_usuarios
		LEFT JOIN admin_log_login h1 ON h1.log_usuario = admin_usuarios.usu_id 
		WHERE h1.log_id = (SELECT MAX(h2.log_id) FROM admin_log_login h2 where h2.log_usuario = h1.log_usuario) AND
			  usu_nome = :nome AND usu_login = :login AND usu_status = :status ";
$stmt = $PDO->prepare( $sql );
$stmt->bindParam( ':nome', 		$n );
$stmt->bindParam( ':login', 	$login );
$stmt->bindValue( ':status', 	1 );
$stmt->execute();
$rows = $stmt->rowCount();
if($rows > 0)
{
	if($_SESSION['cape_sistema'] != $stmt->fetch(PDO::FETCH_OBJ)->log_hash)
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
