<html>
<title>Perpustakaan</title>
<body background="../bg4.jpg">
 <center>
    <h1>Data Mahasiswa>

        <table border = "1" cellpadding = "5" cellspacing = "0">
    <nav>
    <a href = "tambah.php">Tambah Data</a>
    </nav>
    <br>
       <tr>
           <th>NIM</th> 
           <th>Nama Mahasiswa</th> 
           <th>Semester</th> 
           <th>Fakultas</th> 
           <th>Jurusan</th> 
           <th>opsi</th>
        </tr> 

<?php include("koneksi.php");
if($conn){
$hasil = mysqli_query($conn, "SELECT * FROM mahasiswa") ;
while ($row = mysqli_fetch_array($hasil)) 
{
    echo "<tr><td align=center>$row[nim]</td>
          <td align=center>$row[nama]</td>
          <td align=center>$row[semester]</td>
          <td align=center>$row[fakultas]</td>
          <td align=center>$row[jurusan]</td>
          <td align=center><a href=form_ubah.php?nim=$row[nim]>Ubah</a>
               <a href=hapus.php?nim=$row[nim]>Hapus</a>
          </tr> ";
    
    $row=mysqli_query($conn,"select * from mahasiswa where nim='$row [nim]'");
}
}
?>
</table>
</html>            
