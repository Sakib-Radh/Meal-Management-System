<?PHP

$db = mysqli_connect('localhost', 'root', '', 'project') or die("Unable to connect");

if(isset($_POST['Submit']))
{
	
	session_start();
	
	$roll = mysqli_real_escape_string($db, $_POST['Roll']);
	$pass = mysqli_real_escape_string($db, $_POST['Password']);
	$pass2 = mysqli_real_escape_string($db, $_POST['Password2']);
	
	if(!empty($roll) && !empty($pass) && !empty($pass2)){
	
	if($pass == $pass2)
	{
		$sql = "UPDATE `registration` SET `Password`= '$pass' Where `Roll` = '$roll'";
		mysqli_query($db, $sql);
	
		
		echo "Your password has been updated";
		$_SESSION['Roll'] = $roll;

	}
	
	else
	{
		echo "Password didn't match";
		
	}
	
	}
	else 
	{
		echo "Fill all the blanks"; 
	}
	
		
}


?>
	
	
	<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/registration.css">
</head>

<body>
<p>
<div class = "header">

<h1>CHANGE YOUR PASSWORD</h1>
</div>
	
<div>
	<form action = "forgotpass.php" method = "POST">
	Your Roll:<br>
	<input type = "text" name = "Roll"><br><br>
		
	Your New Password:<br>
	<input type = "password" name = "Password"><br><br>

	Confirm Password:<br><br>
	<input type = "password" name = "Password2"><br><br><br>
	
	<input type = "Submit" name = "Submit" value = "Submit">
	
	</form>
	</div>
	</p>

</body>


</html>