<?php  

include('koneksi.php');
$namaDB = new database();

$aksi = $_GET['aksi'];
	if ($aksi == "tambah") {	
		$namaDB->input($_POST['nama'], $_POST['umur'], $_POST['jeniskelamin'], $_POST['Tempatlahir'], $_POST['tanggallahir'], $_POST['email'], $_POST['status'], $_POST['agama'], $_POST['anakke'], $_POST['tamatan']);
		header("location:index.html");
	}
	else ($aksi == "cek") {
		if (isset($_POST['login'])){
			if($namaDB->cek($_POST['username'],$_POST['password'])){

				header("location:jobfinder");
			}
			else{
				header("location:index.html?masuk=gagal");


			}
		
		
		}


	}	
		

?>