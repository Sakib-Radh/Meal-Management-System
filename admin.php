<?php
    session_start();
	$db = mysqli_connect('localhost', 'root', '', 'project') or die("Unable to connect");

    if (isset($_POST['admin']) && isset($_POST['Password'])) {
            $admin = mysqli_real_escape_string($db, $_POST['admin']);
            $pass = mysqli_real_escape_string($db, $_POST['Password']);

            $sql="SELECT * FROM admin WHERE `ID` = '$admin' AND `Password`='$pass'";

             $result = mysqli_query($db, $sql);
             $rows_num = mysqli_num_rows($result);
             	if ($rows_num == 0) 
             	{
             	echo "<center> <strong>You are not admin<strong></center>";
                echo "<br>";

             	}
             	else if ($rows_num == 1)
             	{
               
					header('Location:on.php');
              
             	}
    }



?>





<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/registration.css">
</head>

<body>
</p>

<h1>Logging Form</h1>
</div>
	<div>

	<form action = "admin.php" method = "POST">
		
	Admin ID:<br>
	<input type = "text" id = 'admin' name = "admin"><br>
	
	Password:<br>
	<input type = "password" id = 'Password' name = "Password"><br><br>

	
	
	<input type = "Submit" id = "Submit" value = "Log In"><br><br>
	
	
	
	</form>
	</div>
	</p>

</body>



</html>
