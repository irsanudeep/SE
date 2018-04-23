<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>POST PROJECT</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<?php include('errors.php'); ?>
			<form class="contact100-form validate-form" method="post" action="post.php">
				<span class="contact100-form-title">
					POST PROJECT
				</span>
				
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Project Name</span>
					<input class="input100" type="text" name="name" placeholder="Enter your Project Name">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Domain is required">
					<span class="label-input100">Domain</span>
					<div>
					<select name="domain" class="selection-2">
										<option>&nbsp;</option>
										<option value="Science"> Science </option>
										<option value="Mathematics"> Mathematics </option>
										<option value="Languages"> Languages </option>
										<option value="Space"> Space </option>
										<option value="Music"> Music </option>
										<option value="Computers"> Computers </option>
										<option value="Web"> Web </option>
										<option value="Dance"> Dance </option>
										<option value="Handwriting"> Handwriting </option>
										<option value="Coding"> Coding </option>
										<option value="Singing"> Singing </option>
										<option value="Skating"> Skating </option>
										<option value="Swimming"> Swimming </option>
										<option value="Cricket"> Cricket </option>
										<option value="Badminton"> Badminton </option>
										<option value="Acting"> Acting </option>
										<option value="Painting"> Painting </option>
										<option value="MSOffice"> MSOffice </option>
										<option value="Guitar"> Guitar </option>
										<option value="Violin"> Violin </option>
										<option value="Piano"> Piano </option>
									</select>
					<span class="focus-input100"></span>
					</div>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Duration is required">
					<span class="label-input100">Duration</span>
					<input class="input100" type="text" name="duration" placeholder="Enter your Duration">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Budget is required">
					<span class="label-input100">Budget</span>
					<input class="input100" type="text" name="budget" placeholder="Enter your Budget">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100">Details</span>
					<textarea class="input100" name="details" placeholder="Your message here..."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" name="post">
							<span>
								Post
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
