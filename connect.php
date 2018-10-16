<?php 
//langkah ke 3 setelah membuat koneksi database

require_once("db.php");


$nama = $_POST['nama'];
$nim	= $_POST['nim'];
$jk = $_POST['jk'];
$prodi = $_POST['prodi'];
$fakultas = $_POST['fakultas'];
$asal = $_POST['asal'];
$moto = $_POST['moto'];
$sql = "INSERT INTO mahasiswa(nama, nim, jk, prodi,fakultas,asal,moto)
		VALUES( '$nama', '$nim', '$jk', '$prodi', '$fakultas', '$asal', '$moto')";

// PERINTAH INSERT INTO BUAT MEMASUKKAN DATA BARU KEDALAM DATABASE

	if(mysqli_query($connect, $sql)){
	header("Location:lihatdata.php");
		// SETELAH DATA BERHASIL DIMASUKKAN KE DATABASE BISA LOGIN DENGAN NIM YANG TADI DIINPUTKAN
	} else{
		echo "Error: ".$sql. "<br>".mysqli_error($connect);
	}

mysqli_close($connect);


 ?>