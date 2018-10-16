<?php 
//langkah ke 6 menampilkan fitur detail yang tadi terdapat di aksi lihatdata

$connect = new mysqli("localhost", "root", "", "webdas");
$nim = $_GET['nim'];
 $sql = "SELECT * FROM mahasiswa WHERE nim='$nim'";
 $result = mysqli_query($connect, $sql);
 $row = mysqli_num_rows($result);

 if($row > 0){
 	
 	while ( $row = mysqli_fetch_assoc($result)) {

	$nim= $row['nim'];
 		echo "<tr>";
 		echo "<center><H1> DETAIL DATA MAHASISWA </H1></center> <br>";


		echo " Nama : " .$row['nama'];
 		echo "<br>";
 		echo " Nim : " .$row['nim'];
 		echo "<br>";
 		echo "Jenis Kelamin : ".$row['jk']."</td>";
 		echo "<br>";
 		echo "Prodi : ".$row['prodi'];
 		echo "<br>";
 		echo "Fakultas : ".$row['fakultas'];
 		echo "<br>";
 		echo "Asal :".$row['asal'];
 		echo "<br>";
 		echo "Moto :".$row['moto'];
 		echo "<br>";
 	//	echo "<a href=edit.php?nim=$nim'>Edit Data</a>";
 		// echo "<td>"."<a href='delete.php?nim=$nim'>Delete</a> "."<a href='detail.php?detail=$detail'>Detail</a>";
 		// echo "</tr>";
 	}
 } else {
 	echo "0 results";
 }
 ?>
 <br>
 <br>
 <a href=editdata.php?nim=<?php echo $nim?>>Edit Data</a> ||
 <a href="form.php">Isi Data baru</a>