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

// Check login menu
function login_menu($loginpath, $logoutpath, $signuppath){
	if(isset($_SESSION['customer_id'])){
		return "
			<li class='nav-item'>
			<a class='nav-link' href='$logoutpath'>Logout</a>
			</li>         
			";
		}else{
			return "
			<li class='nav-item'>
			<a class='nav-link active' href='$loginpath'>Login</a>
			</li> 
			
			<li class='nav-item'>
			<a class='nav-link active' href='$signuppath'>Sign Up</a>
			</li>  
			";
		}
}

function admin_page($admin_path){
	if (check_permission() == 3){
		return "
			<li class='nav-item'>
			<a class='nav-link' href='${admin_path}'>Admin</a>
			</li>         
			";
	}
	return; 
}

function writer_page($writer_path){
	if (check_permission() == 2 || check_permission() == 3 ){
		return  "
		<li class='nav-item'>
		<a class='nav-link' href='${writer_path}'>Writer's Corner</a>
		</li>         
		";
	}
}