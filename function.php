<?php
$kon = mysqli_connect("localhost", "root", "", "golekgawe");

function registrasi($data) {
	global $kon;
	
	$username = strtolower(stripslashes($data["username"]));
	$nama = $data["nama"];
	$email = $data["email"];
	$password = mysqli_real_escape_string($kon, $data["password"]);

	// cek username sudah ada atau belum
	$result = mysqli_query($kon, "SELECT username FROM akun WHERE username = '$username'");
	if (mysqli_fetch_assoc($result)) {
		echo "<script> alert('username sudah terdaftar! Silahkan gunakan username yang lain.') </script>";
		return false;
	}

	// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	// tambah user baru ke database
	mysqli_query($kon, "INSERT INTO akun VALUES('','$username','$nama','$email','$password')");
	return mysqli_affected_rows($kon);
}
?>