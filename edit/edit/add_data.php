<?php
include_once 'dbMySql.php';
$con = new DB_con();
$table = "users";
if(isset($_POST['btn-update']))
{	
	$fname = $_POST['first_name'];
	$lname = $_POST['last_name'];
	$city = $_POST['city_name'];
	echo $fname." ".$lname." ".$city;
	$insert = $con->add($table,$fname,$lname,$city);
	if($insert)
	{
			?>
			<script>
			alert('Record insert...');
	        window.location='index.php'
	        </script>
			<?php
	}
}
?>