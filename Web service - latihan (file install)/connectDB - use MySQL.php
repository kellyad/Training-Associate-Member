<?php
/*koneksi di lab
$host = "localhost";
$user = "";
$pass = "";
*/

$host = "localhost";
$user = "root";
$pass = "";

$conn = mysql_connect($host, $user, $pass);
mysql_select_db("slcherria_shop");
/*
if($conn){ echo "koneksi sukses"; }
else{ echo "gagal"; }*/
?>