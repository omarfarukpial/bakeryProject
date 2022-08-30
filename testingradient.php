<?php
	include('connect.php');
	$ingradient_name = $_POST['ingradient_name'];

	foreach($ingradient_name as $value){
		echo $value . "<br>";
	}
	
?>