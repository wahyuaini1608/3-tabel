<?php
include("koneksi.php");

$id = $_GET['id_siswa'];

$sql= "DELETE FROM tb_jurusan where id_jurusan='$id'";
$query = mysqli_query($koneksi,$sql);

$sql= "DELETE FROM tb_spp where id_spp='$id'";
$query = mysqli_query($koneksi,$sql);

$sql= "DELETE FROM tb_siswa where id_siswa='$id'";
$query = mysqli_query($koneksi,$sql);

if($query){
    header("Location:join-tabel.php?status=sukses");
}else{
    die("akses dilarang");
}
?>