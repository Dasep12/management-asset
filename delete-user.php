<?php
include 'koneksi/koneksi.php';
$id = $_GET['id'];
$hapus = mysqli_query($koneksi,"DELETE FROM user WHERE id=$id");
header("location:list-user.php");
?>