<?php

session_start();
include "koneksi.php";

$nama = $_POST['nama'];
$password = $_POST['password'];

$query = mysqli_query($conn,"SELECT * FROM pengguna 
                             WHERE nama='$nama' AND password='$password'");

$data = mysqli_fetch_assoc($query);

if($data){

    $_SESSION['nama'] = $data['nama'];

    header("Location: index.php");

}else{

    echo "Login gagal";
    echo "<br><a href='login.php'>Coba lagi</a>";

}

?>