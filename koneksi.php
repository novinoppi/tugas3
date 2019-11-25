<?php
$user="root";
$server="localhost" ;
$password="" ;
$database="semester3" ;

$rumah=mysql_connect($server,$user,$password);
if($rumah){
	echo 'rumah berhasil terhubung';
}else{
	echo 'cek lagi!!';
}
$db=mysql_select_db($database);
if($db){
	echo 'db berhasil terhubung';
}else{
	echo 'cek lagi!!';
}

?>
