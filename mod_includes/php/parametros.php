<?php
$login = isset($_GET['login']) ? $_GET['login'] : '';
$n = isset($_GET['n']) ? $_GET['n'] : '';
$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : '';
$pag = isset($_GET['pag']) ? $_GET['pag'] : '';
$action = isset($_GET['action']) ? $_GET['action'] : '';
$autenticacao = "&login=$login&n=".str_replace(' ','%20',$n);
?>
