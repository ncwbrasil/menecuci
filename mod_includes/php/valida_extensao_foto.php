<?php
include('connect.php');
$ext = $_POST['ext'];
$extensoes = array(".jpg",".JPG",".png",".PNG");
	
if(!in_array(strrchr($ext, "."), $extensoes)) 
{
	echo "true";
} 
?>