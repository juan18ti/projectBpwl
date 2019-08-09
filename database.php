<?php 
// isi nama host, username mysql, dan password mysql anda
$koneksi = mysqli_connect("localhost","root","","bpwl");

if($koneksi){
	echo "koneksi host berhasil.<br/>";
}else{
	echo "koneksi gagal.<br/>";
}
// isikan dengan nama database yang akan di hubungkan
$db = mysqli_select_db($koneksi,"bpwl");

if($db){
	echo "koneksi database berhasil.";
}else{
	echo "koneksi database gagal.";
}
?>