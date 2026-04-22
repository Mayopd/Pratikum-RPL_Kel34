<?php

include "koneksi.php";

$judul = $_POST['judul'];
$isi = $_POST['isi'];
$tanggal = $_POST['tanggal'];

$namaFile = $_FILES['lampiran']['name'];
$tmpFile = $_FILES['lampiran']['tmp_name'];

$folder = "upload/";
move_uploaded_file($tmpFile, $folder.$namaFile);

$query = "INSERT INTO laporan (judul, isi, tanggal, lampiran)
VALUES ('$judul','$isi','$tanggal','$namaFile')";

if(mysqli_query($conn,$query)){
    echo "Laporan berhasil dikirim <br>";
    echo "<a href='index.php'>Kembali</a>";
}else{
    echo "Gagal mengirim laporan";
}

?>