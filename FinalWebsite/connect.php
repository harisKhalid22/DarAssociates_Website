<?php
$username=filter_input(INPUT_POST, 'username');
$password=filter_input(INPUT_POST, 'password');

if(isset($_POST['submit'])){
if (!empty($username))
{
	if (!empty($password)) 
	{	
		if($username == 'admin' && $password == '123'){
			header('index.html');
		}
		else{
			echo 'username or password is wrong';
		}
	}
	else
	{
		echo "Password should not be empty";
		die();
	}
}
else{
	echo "Username should not be empty";
	die();
}
?>