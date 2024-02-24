<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['id_guru'];
$nama=$_POST['nama'];
$no_hp=$_POST['no_hp'];
$mapel=$_POST['mapel'];
$alamat=$_POST['alamat'];
$email=$_POST['email'];

$ubah=$koneksi->query("update guru set nama='$nama', no_hp='$no_hp', mapel='$mapel', alamat='$alamat', email='$email'  where id_guru='$id'");

if($ubah==true){

    header("location:data-guru.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>