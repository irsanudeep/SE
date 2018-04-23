<?php 
	ob_start();
	session_start();
	require_once 'dbconnect.php';

	if (!isset($_SESSION['erusername'])) {
    header("Location: login.php");
    exit;
}
	$name = "";
	$domain    = "";
	$duration    = "";
	$budget    = "";
	$details    = "";
	$erusername=$_SESSION['erusername'];
	$status = 1;
	$eeusername ="";
	$review ="";
	$rating =0;
	$errors = array(); 
	$_SESSION['success'] = "";
	//$db = mysqli_connect('localhost', 'root', '', 'se');
	if (isset($_POST['post'])) {
		$name = trim($_POST['name']);
		$domain = trim( $_POST['domain']);
		$duration = trim( $_POST['duration']);
		$budget = trim( $_POST['budget']);
		$details = trim( $_POST['details']);
		$status=1;
		$rating=0;
		// form validation: ensure that the form is correctly filled
		if (empty($name)) { array_push($errors, "Username is required"); }
		if (empty($domain)) { array_push($errors, "domain is required"); }
		if (empty($duration)) { array_push($errors, "duration is required"); }
		if (empty($budget)) { array_push($errors, "budget is required"); }
		if (empty($details)) { array_push($errors, "description is required"); }
		
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			
			
			
			
			$stmts = $conn->prepare("INSERT INTO  projects(projectname,domain,duration,budget,details,erusername,status,eeusername,review,rating) 
					  VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmts->bind_param("ssssssssss", $name,$domain,$duration,$budget,$details,$erusername,$status,$eeusername,$review,$rating);
        $res = $stmts->execute();//get result
        $stmts->close();
		?>
		<script language="javascript">
			alert("Posted Successfully");
			top.location.href="erdashboard.php";
		</script>
		<?php
		}
		

	}
?>
