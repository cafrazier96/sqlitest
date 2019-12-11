<!--
    Name: Camille Frazier
    Pawprint: cafz89
    Date: 12/8/2017
-->

<?php
// Created by Professor Wergeles for CS2830 at the University of Missouri
	$username = empty($_COOKIE['username']) ? '' : $_COOKIE['username'];

	if (!$username) {
		header("Location: login.php");
		exit;
	}
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>cafz89 Final Project</title>
        <link href="https://fonts.googleapis.com/css?family=Leckerli+One|Rochester" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <script>
            
        </script>

    </head>
    <body>
        <div class="headerdesign">
            <ul>
                <li><a href = "cafz89FinalProject.php">Home</a></li>
                <li><a href = "aboutPage.php">About</a></li>
                <li><a href = "photoPage.php">Photos</a></li>
                <li><a href = "joinPage.php">Join</a></li>
                <li><a href = "logout.php"><strong>Logout</strong></a></li>
            </ul>
        </div>
        
        <br>
        <br>
        
        <div class="wrapper">
            <h1 class="headerdesign">Thanks for submitting!</h1>

            <br>
            <br>
            <a href="joinPage.php" class="textdesign">Go back to form page</a>
        </div>
    </body>
</html>