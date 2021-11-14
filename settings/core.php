<?php
//for header redirection
ob_start();

//start session
session_start(); 

//get the name of the current page
$current_file = $_SERVER['SCRIPT_NAME']; 

//funtion to check for login
function check_login(){
	//check if login session exit
	if (!isset($_SESSION['customer_id'])) 
	{
		//redirect to login page
    	header('Location: ../login/login.php');
	}
}

//function to check for permission 
function check_permission(){
	//get session role
	if (isset($_SESSION['user_role'])) {
		//assign session to an array
		return $_SESSION['user_role'];
	}
}

function check_email($message){
	if(isset($_SESSION['email'])){
		echo "
		<script>
		alert('$message'); 
		console.log('email error')
		</script>";
		unset($_SESSION['email']);
	}else{
		unset($_SESSION['email']);
	}
}

