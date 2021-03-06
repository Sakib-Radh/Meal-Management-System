<?php
	session_start();
$db = mysqli_connect('localhost', 'root', '', 'project') or die("Unable to connect");
	
		?>
	
	<!DOCTYPE html>
	<html>
	<head>
	<style>
	
	#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
	</style>
	</head>
		
		<body>
		
			<table id = "customers">
			
				<tr>
      <th></th>
	    <th>Roll</th>
	    <th>Name</th>
		<th>Bill</th>
	
	  </tr>
	  
	  <?php
	  
	  
	  
	  
	  
	  
		$sql = "SELECT meal.ID, meal.Date, registration.Name FROM meal INNER JOIN registration ON meal.ID =  registration.Roll WHERE meal.ON = 'ON'";
	
	$result = mysqli_query($db, $sql);
	
		
     $i=1; 
	 $c_date = date("Y-m-d");
	  while ($row=mysqli_fetch_array($result)) {
	  	 echo "<tr>";
       echo "<td>".$i.". </td>";
	     echo "<td>" . $row['ID'] . "</td>";
		 echo "<td>". $row['Name'] . "</td>";
		 $latestDate =  $row['Date'];
		 $ld = new DateTime($latestDate);
		$cd = new DateTime($c_date);
		
		$interval =  $ld->diff($cd);
		$int = (int)$interval->d;
		$bill = ($int-1)*50;
		echo "<td>" . $bill . "</td>";
	     echo "</tr>";
       $i++;
	     }
		
		 
	  ?>
	  
			
			
			
			
			</table>
		
		</body>
	</html>