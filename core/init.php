<?php
	$db = mysqli_connect('127.0.0.1','root','root','');
	if(mysqli_connect_errno()){
		echo 'database connection failed with following errors ' .mysqli_connect_error();
		die(); 
	} 
