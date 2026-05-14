<?php

include "koneksi.php";

$nama = $_POST['nama'];
$password = $_POST['password'];

$query = "INSERT INTO pengguna (nama,password) 
          VALUES ('$nama','$password')";

$result = mysqli_query($conn,$query);

if($result){

echo "
<!DOCTYPE html>
<html>
<head>
<title>Registrasi Berhasil</title>
<style>
.popup{
    width:300px;
    padding:20px;
    background:white;
    border-radius:8px;
    text-align:center;
    box-shadow:0px 0px 10px rgba(0,0,0,0.3);
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    font-family:Arial;
}
button{
    padding:10px 20px;
    background:#4CAF50;
    color:white;
    border:none;
    border-radius:5px;
    cursor:pointer;
}
button:hover{
    background:#45a049;
}
body{
    background:rgba(0,0,0,0.3);
}
</style>
</head>

<body>

<div class='popup'>
<h3>Registrasi Berhasil!</h3>
<p>Akun anda telah dibuat.</p>

<a href='login.php'>
<button>Kembali ke Login</button>
</a>

</div>

</body>
</html>
";

}else{

    echo "Registrasi gagal : ".mysqli_error($conn);

}

?>