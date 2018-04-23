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
			$status=2;
			$user=$_SESSION['eeusername'];
			$sql="select * from projects where status='$status' and eeusername='$user' and (domain='$n1' or domain='$n2' or domain='$n3' or domain='$n4' or domain='$n5') ";
			$results = $mysqli->query($sql);
if($results){ 
$projects = '<ul class="products">';
//fetch results set as object and output HTML
while($obj = $results->fetch_object())
{
$projects .= <<<EOT
	<li class="product">
	<form method="post" action="projectsdecline.php">
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
	<input type="hidden" name="projectname" value="{$obj->projectname}" />
	<input type="hidden" name="domain" value="{$obj->domain}" />
	<input type="hidden" name="eeusername" value="{$_SESSION['erusername']}" />
	<input type="hidden" name="return_url" value="{$current_url}" />
	<div align="center"><button type="submit" class="add_to_cart">Decline</button></div>
	</div></div>
	</form>
	</li>
EOT;
}
$projects .= '</ul>';
echo $projects;
}
?>    
</body>
</html>