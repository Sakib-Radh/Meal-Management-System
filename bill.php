<!DOCTYPE>
<html>
<head>
<style>
body{
	
	
    background-image: url("light-live-background-css.jpg");

}
</style>
</head>
<body>
<?php
	session_start();	
				
$db = mysqli_connect('localhost', 'root', '', 'project') or die("Unable to connect");	


$roll = $_SESSION['Roll'];

			
		$sql = "SELECT `Date` FROM `meal` WHERE `ID`=$roll";
		
		$result = mysqli_query($db, $sql);

			  $i=1; 
			  $latestDate = "";
	  while ($row=mysqli_fetch_array($result)) {
	  	 echo "<tr>";
       
	    
		echo  "<td><center><strong>STARTING DATE = ". $row['Date'] . "</center></strong></td><br><br>";
		$latestDate = $row['Date'];
	     echo "</tr>";
       $i++;
	  

	     }
	
	 $c_date = date("Y-m-d");

		
		$ld = new DateTime($latestDate);
		$cd = new DateTime($c_date);
		
		$interval =  $ld->diff($cd);
		
		


	echo "<br><br><center><strong>YOUR BILL IS</center></strong>";
		$int = (int)$interval->d;
		$bill = ($int)*50;
		echo "<br><center><strong>". $bill . " TAKA ONLY</center></strong>";
		
		





?>
</body>
</html>