<?php
include 'koneksi/koneksi.php';

?>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="login/css/bootstrap-login.css">
<link rel="stylesheet" type="text/css" href="login/css/style-login.css">
</head>
<body>
<div class="sub-header">
	<h4>LOGIN FORM</h4>
</div>
	<div class="sub-body">
		<?php echo md5(123) ?>
		<center><img src="login/img/images.jpg" ></center><br>
	<form action="login.php" method="POST">
		<input type="hidden" name="tgl" value=<?= date('Y-m-d')?>>
		<input type="hidden" name="jam" value=<?= date('H:i:s')?>>
		<label>Username</label><input  name="nama" placeholder="Enter Username" required=""  type="text" class="form-control-1">
		<label>Password</label><input name="pass" placeholder="Enter Password" type="password" class="form-control-1">
		<input type="submit" name="masuk" class="btn btn-info" value="Login">
		<input type="checkbox"><span> Ingat Saya</span>
	</form>
	</div>

</body>
</html>