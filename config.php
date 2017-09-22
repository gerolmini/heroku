<?php
$bd = parse_url(getenv('DATABASE_URL'));

$host = $bd['host'];
// path: para el nombre de la bbdd, ltrim: elimina caracteres por la izquierda.
$dbname = ltrim($bd['path'], '/');
$port = $bd['port'];
$user = $bd['user'];
$pass = $bd['pass'];

global $host, $dbname, $port, $user, $pass;

 ?>
