<?php
include "database.php";
  
$username = $_POST['username'];
$password = $_POST['password'];
  
$user  = mysqli_query($koneksi,"SELECT * FROM daftar WHERE Username='$username' AND Password='$password'");
$match = mysqli_num_rows($user);
  
if ($match==1){

    echo "<h1>Login Berhasil</h1>";
     header('Location:index.html');

}
else {
    echo "<h1>Login Gagal</h1>";    
}
?> 