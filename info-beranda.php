<?php 
//row handheld
    $hh = mysqli_query($koneksi,"SELECT * FROM handheld WHERE status='aktif' or status='cadangan'");
    $h = mysqli_num_rows($hh);
//nilai aktiva
    $n = "SELECT biaya_p, SUM(nilai_p) FROM handheld";
    $qry = mysqli_query($koneksi,$n);
    $row = mysqli_fetch_array($qry);
    
//row printer
    $prt = mysqli_query($koneksi,"SELECT * FROM printer WHERE status='aktif' or status='cadangan'");
    $printer = mysqli_num_rows($prt);
//nilai aktiva
    $p = "SELECT biaya_p, SUM(nilai_aktiva) FROM printer";
    $query = mysqli_query($koneksi,$p);
    $query_prt = mysqli_fetch_array($query);
    