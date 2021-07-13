<?php
    include '../Models/dbconfig.php';
    $name="";
    $err_name="";
    $uname="";
    $err_uname="";
	$email="";
    $err_email="";
    $pass="";
    $err_pass="";
	$err_db="";
	$hasError = false;

    if(isset($_POST["signUp"])){
		if(empty($_POST["name"])){
		    $err_name = "Name Requird";
			$hasError = true;
	    }
		else{
		    $name = $_POST["name"];
	    }
		if(empty($_POST["uname"])){
		    $err_uname = "Username Requird";
			$hasError = true;
	    }
		else{
		    $uname = $_POST["uname"];
	    }
		if(empty($_POST["email"])){
		    $err_email = "Email Requird";
			$hasError = true;
	    }
		else{
		    $email = $_POST["email"];
	    }
		if(empty($_POST["pass"])){
		    $err_pass = "Password Requird";
			$hasError = true;
	    }
		else{
		    $pass = $_POST["pass"];
	    }
		if(!$hasError){
			$rs = insertUser($name,$uname,$email,$pass);
			if($rs === true){
				header("Location: Login.php");
			}
			$err_db = $rs;
		}
	}
	
	else if(isset($_POST["login"])){
		
		
	}
	

?>