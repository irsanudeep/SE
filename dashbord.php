<?php

session_start();
include_once("config.php");

$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
?>
<!DOCTYPE html>
<html>
<head>
<title>Freelancer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="../cssp/style1.css" rel="stylesheet" type="text/css">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
    	<li><a href="index.html">Freelancer</a></li>
      
      <li  ><a   href="newprojects.php">New </a>
        
      </li>
      <li  ><a   href="currentprojects.php">Current </a>
        
      </li>
      <li  ><a   href="completedprojects.php">Completed </a>
        <
      </li>
    </ul>
    
    <?php
    	if(empty($_SESSION['eeusername']))
		{
    		echo"<ul class='nav navbar-nav navbar-right'>
      		<li><a href='signupee.html'><span class='glyphicon glyphicon-user'></span> Sign Up</a></li>
      		<li><a href='loginee.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>
    		</ul>";
			?></div>
			</nav>
			<h2 align="center">Login to view your projects</h2><?php
    	}
    	else
    	{
    		$a = $_SESSION['eeusername'];
			$b = $_SESSION['pass'];
			echo $a,$b;
    		$sql="SELECT * FROM employeedetails WHERE eeusername='$a' AND password='$b'";
    		$result = $mysqli->query($sql);
    		$row = $result->fetch_assoc();
    		$n=$row['fname'];
    		echo"<ul class='nav navbar-nav navbar-right'>
      		<li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#'>Hello,".$n."<span class='caret'></span></a>
        	<ul class='dropdown-menu'>
          	<li><a href='userprofile.php'>Change Password</a></li>
         	 <li><a href='eelogout.php'>Log out</a></li>
        	</ul>
      		</li>
   			 </ul>";
			 ?></div>
			</nav><?php
			
    	}
    ?>
    
</body>
</html>
