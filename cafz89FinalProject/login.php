<!--
    Name: Camille Frazier
    Pawprint: cafz89
    Date: 12/8/2017
-->

<?php
// Created by Professor Wergeles for CS2830 at the University of Missouri

	$username = empty($_COOKIE['username']) ? '' : $_COOKIE['username'];
	if ($username) {
		header("Location: homePage.php");
		exit;
	}
	
	
	$action = empty($_POST['action']) ? '' : $_POST['action'];
	
	if ($action == 'do_login') {
		handle_login();
	} else {
		login_form();
	}
	
	function handle_login() {
		$username = empty($_POST['username']) ? '' : $_POST['username'];
		$password = empty($_POST['password']) ? '' : $_POST['password'];
	   
		if ($username == "test" && $password == "pass") {
			setcookie('username', $username);
			header("Location: homePage.php");
			exit;
		} else {
			$error = 'Error: Incorrect username or password';
			require "loginForm.php";
		}		
	}
	
	function login_form() {
		$username = "";
		$error = "";
		require "loginForm.php";
	}
	
	
?>