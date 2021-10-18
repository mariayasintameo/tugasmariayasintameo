<html>
<title>PERPUSTAKAAN</title>
<body background="../bg4.jpg">

  <h1><center>TAMBAH DATA</center></h1></br>
  
  <form method = "POST" action ="tambah.php">
  <table align = "Center" cellpadding = "5" cellspacing = "0">
    <tr>
        <td>NIM</td>
        <td><input type = "text" name = "nim"></td>
    </tr>

    <tr>
       <td>Nama Mahasiswa</td>
       <td><input type = "text" name = "nama"></td>
    </tr>  

    <tr>
       <td>Semester</td>
       <td><input type = "text" name = "semester"></td>
    </tr>  

    <tr>
       <td>Fakultas</td>
       <td><input type = "text" name = "fakultas"></td>
    </tr>  

    <tr>
       <td>Jurusan</td>
       <td><input type = "text" name = "jurusan"></td>
    </tr>  

    <tr>
        <td></td>
        <td align = "right" colspan = "3"><input type = "submit" name = "" value = "simpan">
    </tr>
    </table>
       <center><a href = "index.php">Lihar Data Mahasiswa</a><center>
</form>
</body>
</html>