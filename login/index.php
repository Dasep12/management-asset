<?php
include '../koneksi/koneksi.php';

?>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="css/style-login.css">
<script defer src="fontawesome-free-5.0.2/svg-with-js/js/fontawesome-all.min.js"></script>
<link rel="stylesheet" type="text/css" href="fontawesome-free-5.0.2/web-fonts-with-css/css/fontawesome.css">
</head>
<body>
<div class="login">
	<h2>Web Support-DC</h2>
		<form  action="login.php" method="POST" >
		<div class="user">	
			<a class="fa fa-user" ></a>
		</div>
		<input type="text" required="" placeholder="Username" name="nama" required="ISI Bagian INI" class="form-control">

		<div class="pass">
			<a class="fa fa-key"></a>
		</div>
		<input type="password" required="" class="form-control" name="pass" required="ISI Bagian INI" placeholder="Password">
		<br><br>
		<input type="submit" name="masuk" value="Login" class="btn btn-primary">
		<input type="reset" value="Reset" class="btn btn-danger">
		
		</form>	
</div>



<div class="footer">
	<label>Copyright@Indomarco Prismatama</label>
</div>
</body>
</html>