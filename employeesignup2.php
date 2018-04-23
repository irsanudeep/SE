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
			
			$eeusername = $_POST['eeusername'];
			$interest1 = $_POST['interest1'];
			$interest2 = $_POST['interest2'];
			$interest3 = $_POST['interest3'];
			$interest4 = $_POST['interest4'];
			$interest5 = $_POST['interest5'];
			$aboutme = $_POST['aboutme'];
			
			$sql1 = "INSERT INTO employeeinterests VALUES ('$eeusername', '$interest1', '$interest2', '$interest3', '$interest4','$interest5','$aboutme')";
			//$result = $conn->query($sql);
			if (mysqli_query($conn, $sql1)) {
               echo "Sign Up Successfull!!!"."<br><br>";
			   header("Location: loginee.php");
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