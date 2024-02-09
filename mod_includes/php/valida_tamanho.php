<?php
include('connect.php');
$tam = $_POST['tam'];
$tamanhoMaximo = 5124000;
if($tam > $tamanhoMaximo) 
{
	echo "true";
} 
?>