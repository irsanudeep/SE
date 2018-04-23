<?php
include_once("config.php");
include_once("dashboardee.php");
$current_url = ($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
?>
<!DOCTYPE html>
<html>
<head>

<!-- Projects List Start -->
<?php
$a=$userRow['eeusername'];
$sql="SELECT * FROM employeeinterests WHERE eeusername='$a' ";
    		$result = $mysqli->query($sql);
    		$row = $result->fetch_assoc();
    		$n1=$row['interest1'];
			$n2=$row['interest2'];
			$n3=$row['interest3'];
			$n4=$row['interest4'];
			$n5=$row['interest5'];
			$status=3;
			$user=$_SESSION['eeusername'];
			$sql="select * from projects where status='$status' and eeusername='$user' and (domain='$n1' or domain='$n2' or domain='$n3' or domain='$n4' or domain='$n5') ";
			$results = $mysqli->query($sql);
if($results){ 
$total_earnings=0;
$projects = '<ul class="products">';
//fetch results set as object and output HTML
while($obj = $results->fetch_object())
{
$total_earnings=$total_earnings+$obj->budget;
$projects .= <<<EOT
	<li class="product">
	
	<div class="product-content"><h3>{$obj->domain}</h3>
	<div class="product-info">
	
	<div>
	<b>Title:</b> {$obj->projectname}
	</div>
	<div>
	<b>Details:</b> {$obj->details}
	</div>
	<div>
	<b>Duration:</b> {$obj->duration}
	</div>
	<b>Budget</b> {$currency}{$obj->budget} 

	
	
	</div></div>
	
	</li>
EOT;
}
$projects .= '</ul>';
echo $projects;
}
?>    
<h3>Total Earnings = <?php echo $total_earnings ?> </h3>
</body>
</html>