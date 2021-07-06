<html>
<head>
<title>Login and Registration form</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="login-page">
<div class="form">
	<form method="post" class="register-form">
	<input type="text" placeholder="UserName">
	<input type="password" placeholder="Password">
	<input type="email" placeholder="Useremail">
		<button type="button" value="submit" name="register">Register</button>
		<p class="message">Already Registered ?<a href="#">Login</a></p>
	</form>
	
	<form method="post" class="login-form">
	<input type="text" name="UserName" placeholder="UserName">
	<input type="password" name="Password" placeholder="Password">
		<button class="button" value="submit" name="submit">Login</button>
		<p class="message">Not Register ?<a href="#">Register</a></p>
	</form>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js">
</script>

<script>
	$('.message a').click(function()
	{
		$('form').animate({height:"toggle",opacity:"toggle"},"slow");
	});
</script>
</body>
</html>
<?php
include("connection.php");	
if(isset($_POST['submit']))
{

    session_start(); 
    $UserName=$_POST['UserName'];
	$Password=$_POST['Password'];
	
	$_SESSION['UserName'] =$UserName;
	
	//header('location:welcome.php');
	
	//echo("username:". $_POST['username']."<br><br>");
	//echo("password:". $_POST['password']."<br><br>");
	$sql = "insert into loginform(UserName,Password) values('".$_POST["UserName"]."','".$_POST["Password"]."')";

if($mysqli->query($sql)== true)
{
	echo"New record created";
	
}
else{
	echo"failed to create record".$mysqli->error;
}
}

?>



