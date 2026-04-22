<!DOCTYPE html>
<html>
<head>
<title>Fasiliticare</title>
</head>

<body>

<h2>ADUAN FASILITAS KOS PUTRA GRIYA PROSPERA</h2>
<p>Sampaikan Aduan Anda Kepada Kami</p>

<a href="tentang.php">Tentang Kami</a> |
<a href="faq.php">FAQ</a>

<hr>

<form action="proses_laporan.php" method="POST" enctype="multipart/form-data">

<label>Judul Laporan</label><br>
<input type="text" name="judul" required><br><br>

<label>Isi Laporan</label><br>
<textarea name="isi" required></textarea><br><br>

<label>Tanggal Kejadian</label><br>
<input type="date" name="tanggal" required><br><br>

<label>Upload Lampiran</label><br>
<input type="file" name="lampiran"><br><br>

<button type="submit">Lapor</button>

</form>

</body>
</html>