<html>
	<head>
		<title>Login</title>
	</head>

	<body>
		<?php

			$host="localhost";
			$user="root";
			$pwd="";
			$db="se";	
			
			// connect to the server
			$conn = new mysqli($host, $user, $pwd, $db);
			//mysql_select_db($db);
			
			if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);} 
			
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			$sql = "SELECT * FROM EmployeeDetails where Username='$username' and Password='$password'";
			$result = $conn->query($sql);

			if (mysqli_num_rows($result) > 0) {
			// output data of each row
				while($row = mysqli_fetch_assoc($result)) {
					echo "Login Successfull!!!";
					echo '<p>You will be Redirected in 3 Seconds.<br>If not redirected in 3 Seconds <a href="#">Click Here</a></p>';
				}
			} else {
				echo "Failed to login!";
				echo '<p><a href="Login.html">Click Here</a> to retry</p>';
			}
			
		?>
		
		<!--<script language="javascript" type="text/javascript">
			 window.setTimeout('window.open("index.html","newsite")',4500);
		</script>-->
	</body>

</html>