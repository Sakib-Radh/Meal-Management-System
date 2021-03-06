<?php

	
ini_set('session.cache_limiter','public');
session_cache_limiter(false);	

session_start();	
				
$db = mysqli_connect('localhost', 'root', '', 'project') or die("Unable to connect");				
			
	$roll = $_SESSION['Roll'];
	$date = date("Y-m-d");
	
if(isset($_POST['meal']))
{		
				$roll = mysqli_real_escape_string($db, $_SESSION['Roll']);
				$name = mysqli_real_escape_string($db, $_SESSION['Name']);
	$meal = $_POST['meal'];

		if($meal == "ON")
		{
			echo "<strong>Your meal will be ON from tomorrow</strong>";
			
			$sql  = "UPDATE `meal` SET `ON`='ON',`Date`='" . $date. "' WHERE ID = $roll";
			mysqli_query($db, $sql);
			
			header('Location:homehome.php');
		}
	else 
	{
		$sql = "UPDATE `meal` SET `ON`= 'OFF'  WHERE `ID` = '$roll'";
		
		mysqli_query($db, $sql);
		
		echo "You have succesfully closed your meal";
		
			
	}
	
	
}
?>



<!DOCTYPE html>
<html>
<head></head>

<body>

<h1>Submit whether meal is to on or off</h1>


<form action="Meal.php" method = "POST">

	ON/OFF:<br>
	<input type = "radio" name = "meal" value = "ON">ON<br>
	<input type = "radio" name = "meal" value = "OFF">OFF<br><br>
  
  <input type = "submit" value = "Submit">

  
</form> 



</form>
</body>
</html>