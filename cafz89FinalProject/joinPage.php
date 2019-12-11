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
            <h1 class="headerdesign">Join the Site!</h1>

            <form action="submit.php" method="post">
                <label class="textdesign">Name:</label>
                <input type="text" name="name">
                <br>
                <label class="textdesign">Email:</label>
                <input type="email" name="email">
                <br>
                <label class="textdesign">Do you like Sailor Moon?</label>
                <br>
                <input type="radio" name="radio" class="textdesign">Yes
                <br>
                <input type="radio" name="radio" class="textdesign">No
                <br>
                <input type="submit" value="Submit"class="textdesign">
            </form>
        </div>
    </body>
</html>