<?php  

class database{

	var $username ="";
	var $email ="";
	var $errors = array();
	var $db;
	var $con = "localhost";
	var $user = "root";
	var $pass = "";
	var $database_name = "bpwl";


	function __constructor(){
		$db = mysqli_connect($this->con,$this->user,$this->pass,$this->database_name);
		mysqli_select_db($db,$this->database_name);
	}

	function input($username, $password){
		mysqli_query(mysqli_connect($this->con,$this->user,$this->pass,$this->database_name), "insert into user values('','$username','$password')");
	}

	function cek($username,$password){
		$cek = mysqli_num_rows(mysqli_query(mysqli_connect($this->con,$this->user,$this->pass,$this->database_name),"select * from user where username = '$username' and password = '$password'"));
		if ($cek>0) {
			return true;
		}else{
			return false;
		}
	}
	function __constructorlamar(){
		$db = mysqli_connect($this->con,$this->nama,$this->umur,$this->jeniskelamin,$this->Tempatlahir,$this->tanggallahir,$this->email,$this->status,$this->agama,$this->anakke,$this->tamatan,$this->database_name);
		mysqli_select_db($db,$this->database_name);
	}
	function inputlamar($nama, $umur, $jeniskelamin, $Tempatlahir, $tanggallahir, $email, $status, $agama, $anakke, $tamatan){
		mysqli_query(mysqli_connect($this->con,$this->nama,$this->umur,$this->jeniskelamin,$this->Tempatlahir,$this->tanggallahir,$this->email,$this->status,$this->agama,$this->anakke,$this->tamatan,$this->database_name), "insert into lamar values('','$nama','$umur','$jeniskelamin','$Tempatlahir','$tanggallahir','$email','$status','$agama','$anakke','$tamatan')");
	}
}
?>