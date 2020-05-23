<?php
function bulan(){
$bulan =date('m');
  switch ($bulan) {
    case '01':
      $bulan = "Januari";
      break;
    case '01':
      $bulan = "Januari";
      break;    
    case '03':
      $bulan = "Maret";
      break;
    case '04':
      $bulan = "April";
      break;
    case '05':
      $bulan = "Mei";
      break;    
    case '06':
      $bulan = "Juni";
      break;
    case '07':
      $bulan = "Juli";
      break;
    case '08':
      $bulan = "Agustus";
      break;    
    case '09':
      $bulan = "September";
    case '10':
      $bulan = "Oktober";
      break;
    case '11':
      $bulan = "November";
      break;    
    case '12':
      $bulan = "Desember";
      break;
      break;    default:
      # code...
      break;
  }
  return "".$bulan. "";
}
function hari_ini(){
$hari = date('D');
switch ($hari) {
  case 'Sun':
    $hari_ini = "Minggu";
    break;
  case 'Mon':

    $hari_ini = "Senin";
    break;
    case 'Tue':
    $hari_ini = "Selasa";
    break;
  case 'Wed':
    $hari_ini = "Rabu";
    break;
     case 'Thu':
    $hari_ini = "Kamis";
    break;
  case 'Fri':
    $hari_ini = "Jumat";
    break; 
  case 'Sat':
    $hari_ini = "Sabtu";
    break;
  default:
    $hari_ini = "Tidak Diketahui";
    break;
}
return "".$hari_ini.",";
}
echo hari_ini();
echo date('d ');
echo bulan();
echo date(' Y');
date_default_timezone_set("Asia/Jakarta");
?>