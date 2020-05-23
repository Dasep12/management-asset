<?php
include '../koneksi/koneksi.php';

$nama =@$_POST['nama'];
$pass =md5(@$_POST['pass']);
$group = @$_POST['group_user'];
$data = "SELECT * FROM user WHERE nama='$nama' AND group_user='admin' AND pass='$pass'";
$data1 = "SELECT * FROM user WHERE nama='$nama' AND group_user='support' AND pass='$pass'";
$login1 = $koneksi ->query($data1);

$login = $koneksi ->query($data);
if($login->num_rows>0){
	session_start();
	$_SESSION['group_user'] = $group;
	$_SESSION['nama']= $nama;
	$user = $_SESSION['nama']= $nama;
	$group = $_SESSION['group_user'] = $group;

echo "<script type='text/javascript'>
	alert('Selamat Datang $user:$group')
	document.location.href='Beranda.php';
</script>";
}elseif ($login1->num_rows>0) {
	session_start();
	$_SESSION['group_user'] = $group;
	$_SESSION['nama']= $nama;
	$user = $_SESSION['nama']= $nama;
	$group = $_SESSION['group_user'] = $group;

echo "<script type='text/javascript'>
	alert('Selamat Datang $user:$group')
	document.location.href='register-user.php';
</script>";
}
else{
	echo "<script type='text/javascript'>
	alert('Upss Ada Yang Salah Password/Nama')
	document.location.href='index.php';
</script>";
}
?>
