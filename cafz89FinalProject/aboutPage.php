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
            <h1 class="textdesign">About Sailor Moon</h1>
            
            <img class="image1" src="images/manga.jpg" alt="manga">
            <br>
            <br>
            <img class="image1" src="images/Tsukino.Usagi..jpg" alt="Usagi Tsukino">

            <br>
            <br>
            <p class="textdesign">Sailor Moon is a manga made in 1992 by Naoko Takeuchi. It was adapted into anime in 1995. </p>
            <br>
            <p class="textdesign">The story follows Usagi Tsukino, a 14 year old student who is lazy and sensitive. She is gifted with the power to become a magical girl by Luna, a talking cat. She meets new friends and allies as they join her on her mission to save the Earth from certain destruction.</p>
        </div>
    </body>
</html>