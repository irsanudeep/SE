<html>
	<head>
		<title>Sign Up</title>
	</head>

	<body>
		<?php

			$host="localhost";
			$user="root";
			$pwd="mysql";
			$db="se";	
			
			// connect to the server
			$conn = new mysqli($host, $user, $pwd, $db);
			//mysql_select_db($db);
			
			if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);} 
			
			$firstname = $_POST['fname'];
			$lastname = $_POST['lname'];
			$mobile = $_POST['mnum'];
			$email = $_POST['email'];
			$erusername = $_POST['erusername'];
			$password = $_POST['password'];
			
			$sql1 = "INSERT INTO employerdetails VALUES ('$firstname', '$lastname', '$mobile', '$email', '$erusername','$password')";
			//$result = $conn->query($sql);
			if (mysqli_query($conn, $sql1)) {
               echo "Sign Up Successfull!!!"."<br><br>";
			   header("Location: login.php");
            } else {
               echo "Please try again.";
            }
			
			/*if (mysqli_num_rows($result) > 0) {
			// output data of each row
				while($row = mysqli_fetch_assoc($result)) {
					echo "Login Successfull!!!";
					echo '<p>You will be Redirected in 3 Seconds.<br>If not redirected in 3 Seconds <a href="index.html">Click Here</a></p>';
				}
			} else {
				echo "Failed to login!";
				echo '<p><a href="Login.html">Click Here</a> to retry</p>';
			}*/
			
		?>
		
		<!--<script language="javascript" type="text/javascript">
			 window.setTimeout('window.open("index.html","newsite")',4500);
		</script>-->
	</body>

</html>