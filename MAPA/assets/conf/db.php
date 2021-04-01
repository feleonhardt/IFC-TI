<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Create database --------------------------------------------------------
	$sql = "CREATE DATABASE location";

	if (mysqli_query($conn, $sql)) {
	    echo "Database created successfully<br>";
	} else {
	    echo "Error creating database: " . mysqli_error($conn) . "<br>";
	}

	$dbname = 'location';
	mysqli_select_db ( $conn , $dbname);

	if (!$conn) {
	    die("select db connection failed: " . mysqli_connect_error());
	}

	//create location table -------------------------------------------------------
	$sql = "CREATE TABLE `dados_novo` (
	  `latitude` VARCHAR(50) NOT NULL,
	  `longitude` VARCHAR(50) NOT NULL,
	  `hora` DATETIME NOT NULL,
	  `ID` INT NOT NULL AUTO_INCREMENT,
		`placa` varchar(20) not null,
	  PRIMARY KEY (`ID`, `placa`))";

	if(mysqli_query($conn, $sql)){
	    echo "Table location created successfully<br>";
	} else {
	    echo "Error creating location table: " . mysqli_error($conn). "<br>";
	}

	mysqli_close($conn);
?>
