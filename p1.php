<!DOCTYPE html>
<html>
<head>
	<title>my website</title>
</head>
<body>
	<h1>welcome to my webside</h1>
	<form method="post">
		Name   :<input type="text" name="name">
		Username    :<input type="text" name="username">
		Password    :<input type="Password" name="pass">  
					<input type="submit" name="submit">
	</form>

	<?php
		$con = mysqli_connect('localhost','root','','users');
		if (isset($_POST['submit']))
		{
			$Name=$_POST['name'];
			$Username=$_POST['username'];
			$Password=$_POST['pass'];

			$query = "INSERT INTO mydata(Name, Username, Password) Values ('$Name','$Username','$Password')";
			$execute=mysqli_query($con,$query);
		}

	?>
</body>
</html>