<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$nama=$_POST['nama'];
$no_hp=$_POST['no_hp'];
$alamat=$_POST['alamat'];
$jurusan=$_POST['jurusan'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$email=$_POST['email'];

include "../koneksi.php";

$simpan=$koneksi->query("insert into siswa(nama,no_hp,alamat,jurusan,jenis_kelamin,email) 
                        values ('$nama', '$no_hp', '$alamat', '$jurusan', '$jenis_kelamin', '$email')");

if($simpan==true){

    header("location:data-siswa.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>