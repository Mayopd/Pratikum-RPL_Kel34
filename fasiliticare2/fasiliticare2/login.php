<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>

<body>

<h2>Login Pengguna</h2>
<form action="proses_login.php" method="POST">

<label>Nama</label><br>
<input type="text" name="nama" required><br><br>

<label>Password</label><br>
<input type="password" name="password" required><br><br>

<button type="submit">Login</button>

</form>

<p>Belum punya akun?</p>
<a href="register.php">Register</a>