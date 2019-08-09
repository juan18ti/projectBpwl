<?php  

include('koneksi.php');
$namaDB = new database();

$aksi = $_GET['aksi'];
	if ($aksi == "tambah") {	
		$namaDB->input($_POST['username'], $_POST['password']);
		header("location:index.html");
	}
	elseif ($aksi == "cek") {
		if (isset($_POST['login'])){
			if($namaDB->cek($_POST['username'],$_POST['password'])){

				header("location:jobfinder");
			}
			else{
				header("location:masuk.html?masuk=gagal");


			}
		
		
		}


	}	
		

?>