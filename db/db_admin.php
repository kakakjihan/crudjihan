<?php
$proses=$_GET['proses'];
include "../koneksi.php";

if($proses=='insert'){
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $alamat=$_POST['alamat'];
    $level=$_POST['level'];

    mysqli_query($koneksi,"INSERT INTO admin SET nama='$nama',username='$username'.password=$password,alamat='$alamat',level='$level'");
}

header("location:../index.php?halaman=admin");
