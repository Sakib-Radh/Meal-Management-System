<!doctype html>
<html>
<head>
<style>
/*head*/
h1{
	color:black ;
	font-style: italic;
	font-size: 100%;
	text-align: center;

}


h2.head, h3.head{
	color:black ;
	font-size: 200%;
	text-align: center;
}


/*NAVIGATION BAR*/
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    
    //background-color: #f1f1f1;
}

li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}



li a:hover:not(.active) {
    background-color: #555;
    color: white;
}


/*THIS IS FOR LOG IN/ REGISTRATION*/

 a.log in:link, a.log in:visited {
    background-color: white;
    color: black;
    border: 2px solid green;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}

a.log in:hover, a.log in:active {
    background-color: green;
    color: white;
}

body{
	
	
    background-image: url("light-live-background-css.jpg");

}
p{
     border: 2px solid red;
    border-radius: 5px;
}




</style>


<?php

session_start();	
				
$db = mysqli_connect('localhost', 'root', '', 'project') or die("Unable to connect");	


$roll = $_SESSION['Roll'];


?>






</head>
<body>
<h1>HEAVEN'S LIGHT IS OUR GUIDE</h1>
<h2 class = "head">RAJSHAHI UNIVERSITY OF ENGINEERING AND TECHNOLOGY</h2>
<h3 class = "head">রাজশাহী প্রকৌশল ও প্রযুক্তি বিশ্ববিদ্যালয়</h3>

<p>	
<ul>
  <li><a class="active" href="">HOME</a></li>
  <li><a href="menumenu.php">TODAY'S MENU</a></li>
  <li><a href="">CONTACT US</a></li>
  <li><a href="bill.php">BILL</a></li>
  <li><a href = "logout.php">LOG OUT</a></li>
  
   
  </u1>
  
</p>

 









</body>

</html>
