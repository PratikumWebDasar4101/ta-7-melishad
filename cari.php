
<?php 
$connect = new mysqli("localhost", "root", "", "webdas");
$nim = $_POST['nim'];
$sql = "SELECT * from mahasiswa where nim like '%$nim'";			
$result = mysqli_query($connect, $sql);	
$row = mysqli_num_rows($result);
 



 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>data mahasiswa</title>
 </head>
 <body>
 	<table>
 		<thead>
	<th>Nama</th>
	<th>Nim</th>
	<th>Aksi</th>
	</thead>

	<?php 
	if($row > 0){
 	
 	while ( $row = mysqli_fetch_assoc($result)) {

	$nim= $row['nim'];
 		echo "<tr>";
 		echo "<td>".$row['nama']."</td>";
 		echo "<td>".$row['nim']."</td>";
 	

 		echo "<td>"."<a href='delete.php?nim=$nim'>Delete</a> ";
 		echo "</tr>";
 	}
 } else {
 	echo "0 results";
 }

	 ?>
 </table>
 </body>
 </html>
 <a href="form.php">Isikan Data</a>