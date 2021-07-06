<html>
<head>
<style>
Fieldset{background-color:272828; color:white;width:60%; align:center; margin:0 auto;}
input{border-radius:3px; border-color:gray; font-size:18px;}
legend{font-size:30px;color:f93232;}
label{font-size:20px; color:gray;}
.button{background-color: de070f; border-radius:8px; font-size:16px; margin: 20px 20px; color:white; cursor:pointer; align:center; width:8%;}
.button1{background-color: 27d924; border-radius:8px; font-size:16px; margin: 2px 10px; color:white; cursor:pointer; width:10%;}
</style>
</head>
<body>
<Fieldset>
<legend align="center">Login Form</legend>
<div class="login-box">
<form method="post">
<label>username:</label> <input type="text" name="username"><br><br>
<label>passsword:</label> <input type="text" name="password"><br><br>
<button class="button" value="submit" name="submit">login</button><br><br>
</div>
<div class="register-box">
<form method="post" action="registration.php">
<a href="http://localhost/FlightDetails/registration.php"><button class="button1">Register</button></a><br><br>
</form>
</div>
<!--<div>
<button type="button" class="btn btn-success">search</button>
</div>-->
<!--<input type="button" name="register" value="Register" a href="http://localhost//htdocs//FlightDetails//registration.php"><br><br>-->
</form>
</Fieldset>
</body>
</html>	
<?php
include("connection.php");
if(isset($_POST['submit']))
{

    session_start(); 
    $username=$_POST['username'];
	$password=$_POST['password'];	
	$_SESSION['username'] =$username;
	
	//header('location:welcome.php');
	
	//echo("username:". $_POST['username']."<br><br>");
	//echo("password:". $_POST['password']."<br><br>");
	$sql = "insert into loginform(username,password) values('".$_POST["username"]."','".$_POST["password"]."')";


if($mysqli->query($sql)== true)
{
	echo"New record created";
	
}
else
{
	echo"fail to create new record".$mysqli->error;
}

//$sql = "update loginform set = '".$_POST['username']."' WHERE userid=8";

//if ($mysqli->query($sql) === TRUE) 
//{
 //   echo "Record updated successfully";
//} else 
//{
  //  echo "Error updating record: " . $mysqli->error;
//}
}
?>