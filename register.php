<?PHP

$db = mysqli_connect('localhost', 'root', '', 'project') or die("Unable to connect");

if(isset($_POST['Submit']))
{
	
	session_start();
	
	$roll = mysqli_real_escape_string($db, $_POST['Roll']);
	$name = mysqli_real_escape_string($db, $_POST['Name']);
	$email = mysqli_real_escape_string($db, $_POST['Email']);
	$pass = mysqli_real_escape_string($db, $_POST['Password']);
	$pass2 = mysqli_real_escape_string($db, $_POST['Password2']);
	
	if(!empty($roll) && !empty($name) && !empty($email) && !empty($pass) && !empty($pass2)){
	
	if($pass == $pass2)
	{
		$password_hash = md5($pass);
		$sql = "INSERT INTO `registration`(`Roll`, `Name`, `Email`, `Password`) VALUES ('$roll', '$name', '$email', '$pass')";
		mysqli_query($db, $sql);
	
		
		//echo "<center><strong>YOU ARE SUCCESSFULLY REGISTERED</strong></strong>";
		header('Location:logginglogging.php');
		$_SESSION['Roll'] = $roll;
		
		$sql = "INSERT INTO `meal` (`ID`) VALUES ('$roll')";
		mysqli_query($db, $sql);
	}
	
	else
	{
		echo "<center><strong>Password didn't match</strong></strong>";
		
	}
	
	}
	else 
	{
		
		echo "<center><strong>Fill all the blanks</strong></strong>"; 
	
	}
	
		
}


?>



<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/registration.css">
</head>

<body>
<P>
<div class = "header">

<h1>REGISTRATION  FORM</h1>
</div>
	
<div>
	<form action = "register.php" method = "POST">
	Roll:<br>
	<input type = "text" name = "Roll"><br>
	
	Name:<br>
	<input type = "text" name = "Name"><br>
	
	Email:<br>
	<input type = "text" name = "Email"><br>

	Password:<br>
	<input type = "password" name = "Password"><br>

	Confirm Password:<br>
	<input type = "password" name = "Password2"><br><br><br>
	
	<input type = "Submit" name = "Submit" value = "Submit">
	
	</form>
</div>
</P>
</body>


</html>