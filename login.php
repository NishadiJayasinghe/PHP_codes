<?php 
	if(isset($_POST['submit'])){
		//the user has pressed submit button
		$username = $_POST['username'];
	$password = $_POST['password'];

	if ($username == 'nishadi' && $password == 'neat') {
		echo "Login Successsful";
	}else{
		echo "invalid Password or Username";
	}
	}
	
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
</head>
<body>
	 <form action="login.php" method="post">
		Username:<input type="text" name="username" id=""><br>
		Password:<input type="password" name="password" id=""><br>
		<input type="submit" value="Log In"name="submit">
	</form>
</body>
</html>