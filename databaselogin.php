<?php 
include 'database.php';
session_start();

$username = $_POST['username'];
$password = md5($_POST['password']);

$login = mysql_query("select * from  where username='$username' and password='$password'");
$cek = mysql_num_rows($login);

if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:admin/index.php");
}else{
	header("location:index.php");	
}

?>