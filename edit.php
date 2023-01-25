<?php
include("koneksi.php");
if(!isset($_GET['id_siswa'])){
    header("Location:join-tabel.php?");
}
$id=$_GET['id_siswa'];
$sql="SELECT * FROM tb_siswa INNER JOIN tb_jurusan ON tb_siswa.id_jurusan = tb_jurusan.id_jurusan
      INNER JOIN tb_spp ON tb_siswa.id_spp = tb_spp.id_spp WHERE tb_siswa.id_siswa='$id'";
$query = mysqli_query($koneksi,$sql);
$row = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die ("Data tidak ditemukan");
}
?>

<html>
    <head>
</head>
<body>
    <h1>Form Edit</h1>
    <a href="join-tabel.php"><input type="button" value="Kembali"></a>
    <form action="proses-edit.php" method="POST">
                <input type="hidden" name="id_siswa" value="<?php echo $row['id_siswa']?>" />
                <p>
        <label for="nama"> Nama : </label>
        <input type="text" name="nama" value="<?php echo $row['nama']?>" />
    </p>
    <p>
        <label for="kelas"> Kelas : </label>
        <input type="text" name="kelas" value="<?php echo $row['kelas']?>" />
    </p>
    <p>
        <label for="nama_jurusan"> Jurusan : </label>
        <input type="text" name="nama_jurusan" value="<?php echo $row['nama_jurusan']?>" />
    </p>
    <p>
        <label for="tahun"> Tahun : </label>
        <input type="date" name="tahun" value="<?php echo $row['tahun']?>"/>
    </p>
    <p>
        <label for="nominal"> Nominal : </label>
        <input type="number" name="nominal" value="<?php echo $row['nominal']?>"/>
    </p>
<p>
<input type="submit" value="Edit" name="edit" /> 
</p>
</form>
</body>
</html>