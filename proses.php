<?php
include("koneksi.php");
if (isset($_POST['submit'])){
 $nama = $_POST['nama'];
 $kelas = $_POST['kelas'];
 $jurusan = $_POST['jurusan'];
 $spp = $_POST['spp'];
 
 $sql = "INSERT INTO tb_jurusan (nama_jurusan)VALUES('$nama_jurusan')";
 $query = mysqli_query ($db,$sql);

 $sql = "SELECT max(id_jurusan)AS jurusan FROM tb_jurusan LIMIT 1";
 $query = mysqli_query($db,$sql);

 $sql = "INSERT INTO tb_spp (tahun,nominal)VALUES('$tahun','$nominal)";
 $query = mysqli_query($db,$sql);

 $sql = "SELECT max(id_jurusan)AS jurusan FROM tb_jurusan LIMIT 1";
 $query = mysqli_query($db,$sql);

 $data = mysqli_fetch_array($query);
 $jurusan = $data['jurusan'];

$sql = "SELECT max(id_spp)AS spp FROM tb_spp LIMIT 1";
$query = mysqli_query($db,$sql);

$data = mysqli_fetch_array($query);
$spp = $data['spp'];

$sql = "INSERT INTO tb_siswa(nama,kelas,id_jurusan,id_spp)VALUES('$nama','$kelas','$jurusan','$spp')";
$query = mysqli_query($db,$sql);

if($query){
    header('location:tampil.php.?status=sukses');
}else{
    header('location:tampil.php.?status=gagal');
}
}
?>