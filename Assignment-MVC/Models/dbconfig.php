<?php 
    $db_server = "localhost";
	$db_uname = "root";
	$db_pass = "";
	$db_name = "";
	
	function execute($query){
		global $db_server, $db_uname, $db_pass, $db_name;
		$conn = mysqli_connect($db_server, $db_uname, $db_pass, $db_name);
		if($conn){
			if(mysqli_query($conn,$query)){
				return true;
			}
			return mysqli_error($conn);
		}
	}
	
	
?>