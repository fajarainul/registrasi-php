<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "project_registrasi";
	
	$connect = mysqli_connect($host, $username, $password, $database);
	
	if(!$connect){
		die("Connection failed: " . mysqli_connect_error());
	}