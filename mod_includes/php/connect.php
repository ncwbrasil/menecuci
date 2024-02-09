<?php
require_once("parametros.php");
error_reporting(1);
date_default_timezone_set('America/Sao_Paulo');


define( 'MYSQL_HOST', 'garciaimplementos.com.br' );
define( 'MYSQL_PORT', '3306' );
define( 'MYSQL_USER', 'garcia_usuario' );
define( 'MYSQL_PASSWORD', 'garcia2017' );
define( 'MYSQL_DB_NAME', 'garcia_site' );

try
{
    $PDO = new PDO( 'mysql:host=' . MYSQL_HOST . ';port=' . MYSQL_PORT . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD );
}
catch ( PDOException $e )
{
    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
}
$PDO->exec("SET CHARACTER SET utf8");
$PDO->setAttribute( PDO::ATTR_EMULATE_PREPARES, false );?>
