<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$id=$_GET['id'];

include "../koneksi.php";

$hapus=$koneksi->query("delete from guru where id_guru='$id'");

if($hapus==true){

    header("location:data-guru.php?pesan=hapusBerhasil");

} else{
    echo "Error";
}


?>