<?php
// langkah ke 8 untuk mengupdate data yang telah diedit ke database 
$nama		= $_POST['nama'];
$nim		= $_POST['nim'];
$jk			= $_POST['jk'];
$prodi		= $_POST['prodi'];
$fakultas	= $_POST['fakultas'];
$asal		= $_POST['asal'];
$moto		= $_POST['moto'];
$connect	= new mysqli("localhost","root","","webdas");
$sql	= "UPDATE mahasiswa SET nama = '$nama', nim = '$nim', jk = '$jk', prodi = '$prodi', fakultas = '$fakultas', asal = '$asal', moto = '$moto' WHERE nim = '$nim'";
mysqli_query($connect, $sql);
header("location:prosesedit.php");


?>