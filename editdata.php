<?php 
//langkah ke-7 untuk membuat fitur edit datanya

$nim        = $_GET['nim'];
$connect  	= new mysqli("localhost","root","","webdas");
$sql  		= mysqli_query($connect, "select * from mahasiswa where nim='$nim'");
$row        = mysqli_fetch_array($sql);

function ($value,$input){
    $result =  $value==$input?'checked':'';
   return $result;
}
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="simpanedit.php" method="post">
	<table >
			<tr>
				<td>Nama : </td>
				<td>
					

					<input type="text" value="<?php echo $row['nama']; ?>" name="nama" pattern="[A-Za-z ]{1,25}" title=" Nama harus maks 35 karakter" required>
				</td>	
			</tr>
			<tr>
				<td>Nim : </td>
				<td><input type="text" value="<?php echo $row['nim']; ?>"  name="nim"  pattern="[0-9]{10}" title="Nim harus angka dan 10 karakter"  required ></td>	
			</tr>
	
			<tr>
				<td>Jenis Kelamin : </td>
				<td><input type="radio" name="jk" value="Pria">Pria</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="radio" name="jk" value="Wanita">Wanita</td>
			</tr>
			<tr>
				<td>Program Studi : </td>
				<td><select name="prodi">
					<option value="MI">MI</option>
					<option value="TK">TK</option>
					<option value="AKUNTANSI">AKUNTANSI</option>
					<option value="MBTI">MBTI</option>
					<option value="DPR">DPR</option>
					<option value="ADBIS">ADBIS</option>
					<option value="IKOM">IKOM</option>
					<option value="SI">SI</option>

					</select></td>
			</tr>
			
			<tr>
				<td>Fakultas : </td>
				<td><select name="fakultas">
					<option value="FIT">FIT</option>
					<option value="FIK">FIK</option>
					<option value="FEB">FEB</option>
					<option value="FKB">FKB</option>
					</select></td>
			</tr>
			<tr>
				<td>
					Asal : 
				</td>
				<td><input type="text" value="<?php echo $row['asal']; ?>" name="asal" ></td>
			</tr>
			<tr>
				<TD >Moto Hidup: </TD>
				<td > <textarea name = "moto"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><br><input type="submit" name="submit" value="simpan"></td>					
			</tr>		



		
	</table>
</form>
</body>
</html>