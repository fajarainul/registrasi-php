<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "project_registrasi_backoffice";


	$database2 = "project_registrasi_portal";

	
	$connect = mysqli_connect($host, $username, $password, $database);
	
	if(!$connect){
		die("Connection failed: " . mysqli_connect_error());
	}



	$connect2 = mysqli_connect($host, $username, $password, $database2);
	
	if(!$connect2){
		die("Connection failed: " . mysqli_connect_error());
	}