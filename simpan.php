<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Simpan Data</title>
	<style type="text/css">
		body{
			background-image: url(cover.jpg);
			background-size: cover;
			text-align: center;
		}
		h3 {
			color:white;
		}
	</style>
</head>
<body>
	<?php 

	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$alm = $_POST['alamat']; 
	$kota = $_POST['kota'];
	$pesan = $_POST['pesan'];

	$query = mysqli_query($db, "INSERT INTO tamu values('', '$nama','$email','$alm','$kota','$pesan')") or die (mysqli_error($koneksi,$query));

	if ($query) {
		echo "<font color=white size=5>Buku Tamu Berhasil Disimpan</font>";


	}

	 ?>

	<br>
	<a href="tampilkan.php"><h3>Lihatkan Buku Tamu</h3></a>	 
</body>
</html>



















<!-- 
	$sql = "INSERT INTO tamu (nama_tamu, email_tamu, alamat_tamu, kota_tamu, pesan) values ('',$nama, $email, $alm, $kota, $pesan)"; -->