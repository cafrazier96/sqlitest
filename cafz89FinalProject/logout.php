<!--
    Name: Camille Frazier
    Pawprint: cafz89
    Date: 12/8/2017
-->

<?php
// Created by Professor Wergeles for CS2830 at the University of Missouri


    // Set the cookie to expire
	setcookie('username', '', 1);
    // And redirect the user to the login
	header("Location: login.php");
	exit;
?>
