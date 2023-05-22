<?php

$server = "containers-us-west-56.railway.app";
$user = "root";
$password = "e1nj5D50lj6wpRDRpNwF";
$nama_database = "railway";
$port = '7020';

$db = mysqli_connect($server, $user, $password, $nama_database, $port);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>
