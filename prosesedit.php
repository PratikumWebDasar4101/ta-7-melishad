<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>



<h2>Data Berhasil di Edit</h2>
<table border=2>
    <thead>

        <th>Nama</th>
        <th>NIM</th>
        <th>Jenis Kelamin</th>
        <th>Program Studi</th>
        <th>Fakultas</th>
        <th>Asal</th>
        <th>Moto Hidup</th>
        <th>Aksi</th>
    </thead>
<tbody>
<?php 
    //$nama   = $_GET['nama '];
    $connect   = new mysqli("localhost","root","","webdas");
    $sql    = "SELECT * FROM mahasiswa";
    $result = mysqli_query($connect, $sql);
if (mysqli_num_rows($result)>0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $nim = $row['nim'];
        echo "<tr>";
        echo "<td>" . $row['nama']."</td>";
        echo "<td>" . $row['nim']."</td>";
        echo "<td>" . $row['jk']."</td>";
        echo "<td>" . $row['prodi']."</td>";
        echo "<td>" . $row['fakultas']."</td>";
        echo "<td>" . $row['asal']."</td>";
        echo "<td>" . $row['moto']."</td>";
        echo "<td>"."<a href='editdata.php?nim=$nim'>Edit</a> <a href='delete.php?nim=$nim'>Delete</a>"."</td>";
        echo "</tr>";
    }
}else {
    echo "0 results";
}
?>
    </tbody>
</body>
</table>
</html>
<br>
<a href="form.php">Kembali ke Halaman Awal</a>