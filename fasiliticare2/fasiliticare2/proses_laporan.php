<?php

include "koneksi.php";

$judul = $_POST['judul'];
$isi = $_POST['isi'];
$tanggal = $_POST['tanggal'];

$namaFile = "";

// cek apakah ada file diupload
if(isset($_FILES['lampiran']) && $_FILES['lampiran']['name'] != ""){
    
    $namaFile = $_FILES['lampiran']['name'];
    $tmpFile = $_FILES['lampiran']['tmp_name'];

    $folder = "upload/";

    move_uploaded_file($tmpFile, $folder.$namaFile);
}

$query = "INSERT INTO laporan (judul, isi, tanggal, lampiran)
VALUES ('$judul','$isi','$tanggal','$namaFile')";

if(mysqli_query($conn,$query)){
    echo "<script>
            alert('Laporan berhasil dikirim');
            window.location='index.php';
          </script>";
}else{
    echo "Gagal mengirim laporan";
}

?>