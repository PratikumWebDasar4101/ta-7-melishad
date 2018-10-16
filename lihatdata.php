<?php 
// Langkah ke 4 untuk mengecek data yang telah diinputkan
require_once("db.php");
?>


<html>
<table border="2">
<head >


	<form action="cari.php" method="post">
	<label>Cari :</label>
	<input type="text" name="nim">
	<input type="submit" name="cari" value="cari">
	<br>
	<br>
	</form>

	<th>Nama</th>
	<th>Nim</th>
	<th>Aksi</th>


</head>
<body>


<?php

	// SAATNYA MENAMPILKAN DATA YANG TELAH DIINPUTKAN KE DATABASE 

//$username = $_SESSION['username'];
$connect = new mysqli("localhost", "root", "", "webdas");
 $sql = "SELECT * FROM mahasiswa ";
 $result = mysqli_query($connect, $sql);
 $row = mysqli_num_rows($result);

 if(mysqli_num_rows($result) > 0){
 	
 	while ( $row = mysqli_fetch_assoc($result)) {

	$nim= $row['nim'];
 		echo "<tr>";
 	// $detail=$row['detail'];
 	// 	echo "<tr>";
 		echo "<td>".$row['nama']."</td>";
 		echo "<td>".$row['nim']."</td>";
 	

 		echo "<td>"."<a href='delete.php?nim=$nim'>Delete</a> | <a href='detail.php?nim=$nim'>Detail</a>"."</td>";
 		echo "</tr>";
 	}
 } else {
 	echo "0 results";
 }


?>

</body>
</table>
</html>
<br>
<a href = form.php>  Kembali ke halaman awal </a>
<br>