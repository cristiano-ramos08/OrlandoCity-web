
<?php

$host = "127.0.0.1";
$usuario = "root";
$senha = "";
$bd ="hcode_shop";

$mysqli = new mysqli($host, $usuario, $senha, $bd);

if($mysqli->connect_errno)
echo "falha na conxão: (".$mysqli->connect_errno.") ".$mysqli->connect_error;

?>

