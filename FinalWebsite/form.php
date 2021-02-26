<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<style>
		form{
			padding-top: 120px;
			text-align: center;
			font-size: 30px;
		}
		input{
			width: 250px;
			height: 40px;
			font-size: 30px;
		}
	</style>
</head>
<body>

<form method="post">
	Username: <input type="text" name="username"><br><br>
	Password: <input type="password" name="password"><br><br>
	<button name="submit" value="submit" type="submit">Submit</button>
</form>

<?php
$username=filter_input(INPUT_POST, 'username');
$password=filter_input(INPUT_POST, 'password');

if($username == 'admin' && $password == '123'){
	$_SESSION['username'] = 'admin';
	header('location: index.html');
}
else{
	echo '';
}

?>
</body>
</html>