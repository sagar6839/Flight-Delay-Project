<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
.form{ width:60%; margin:0 auto;}
Fieldset{background-color:d3e8e7; color:Black;}
input{border-color:0b0b0b; border:2px solid; margin:20px;}
legend{font-size:25px;color:6d1b1b;}
button{margin:10px;}
.center{padding:8px;}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 2px solid #dddddd;
  text-align: left;
  padding: 8px;
}

</style>
</head>
<body class="form">
<Fieldset style="height:260px">
<legend align="center">Your Booking</legend>
<div class="center">
<form action = "" method="post">
<input type="text" name="id" placeholder="FlightNo.">
<div>
<button type="submit" class="btn btn-primary" value="search" name="search">search</button>
</div>
<!--<input type="submit" name="search" value="search"><br><br>-->
</div>
</form>
</Fieldset><br><br>
<table>
  <tr bgcolor="3b78c9";>
	<th>FlightNo</th>
    <th>From1</th>
    <th>To1</th>
	<th>Time</th>
  </tr>
</table>
</body>
</html>

<?php
//include("connection.php");	
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'flightdetail');
 if(isset($_POST['search']))
 {
	$FlightNo = $_POST['FlightNo'];
	
	$query = "SELECT * FROM 'checkout' where FlightNo='$FlightNo'";
	$query_run = mysqli_query($connection,$query);
	
	while($row = mysqli_query($query_run))
	{
		?>
		<tr>
			<td> <?php echo $row['From1']; ?> </td>
			<td> <?php echo $row['To1']; ?> </td>
			<td> <?php echo $row['Time']; ?> </td>
		
		<?php
	}
	 
}  
?>