<?php
include("koneksi.php");
//fungsi untuk gabung file
if (isset($_POST['simpan'])){
	$query_tambah_data="insert into barang(merek,harga) values
	('".$_POST['merek']."',
	'".$_POST['harga']."')";
	$proses_data=mysql_query($query_tambah_data);
if($proses_data){
	echo 'Tambah data berhasil'; 
}else{
	echo mysql_error();
}

}
?>


<form method="POST" action=""><!---form untuk kirim data ke DB-->
<table border="1"><!--name harus sama dengan database-->
	<tr>
		<td>Nama Barang</td>
		<td><input name="merek" type="text"></td>
	</tr>
	<tr>
		<td>Harga</td>
		<td><input name="harga" type="number"></td>
	</tr>
	<tr>
		<td><input name="simpan" type="submit"></td>
	</tr>
	</table>
	</form>