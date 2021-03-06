<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/registration.css">
</head>

<body>

<?php
    session_start();
    $db = mysqli_connect('localhost', 'root', '', 'project') or die("Unable to connect");

    if (isset($_POST['Roll']) && isset($_POST['Password'])) {
            $roll = mysqli_real_escape_string($db, $_POST['Roll']);
            $pass = mysqli_real_escape_string($db, $_POST['Password']);
    		$password_hash = md5($pass);

            $sql="SELECT * FROM registration WHERE `Roll` = '$roll' AND `Password`='$pass'";

             $result = mysqli_query($db, $sql);
             $rows_num = mysqli_num_rows($result);
             	if ($rows_num == 0) 
             	{
             	echo "<center> <strong>Enter Valid Student Id and Password.<strong></center>";
                echo "<br>";
             	}
             	else if ($rows_num == 1)
             	{
                    $_SESSION['Roll'] = $roll;
					$_SESSION['Name'] = $name;
                 $_SESSION['loggedin']=true;
                header('Location:homehome.php');
				
			
             	}
    }
    ?>
	



<p>
<div class = "header">

<h1>Logging Form</h1>
</div>
	<div>

	<form action = "logging.php" method = "POST">
		
	Roll:<br>
	<input type = "text" id = 'Roll' name = "Roll"><br>
	
	Password:<br>
	<input type = "password" id = 'Password' name = "Password"><br><br>

	
	
	<input type = "Submit" id = "Submit" value = "Log In"><br><br>
	
	<h2><a href = "forgotpass.php">  Forgot password? </a></h2>
	
	
	
	</form>
</div>
</p>
</body>


</html>






