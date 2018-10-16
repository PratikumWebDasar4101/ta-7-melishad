<?php 

// Langkah ke 5 untuk menampilkan fitur delete yang tadi terdapat di aksi lihatdata
require_once("db.php");


$nim=$_GET['nim'];
$sql ="DELETE from mahasiswa where nim =$nim ";
if (mysqli_query($connect, $sql)){

	echo "Data berhasil dihapus";
}else{
	echo "Error:".$sql."<br>". mysqli_error($db);
}
	


 ?>
 <br>
 <a href="form.php">Silahkan isi data</a>