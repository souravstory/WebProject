<?php

	// Defining Constants
	define( 'HOST', 'localhost' );
	define( 'DB', 'ecom' );
	define( 'USER', 'root' );
	define( 'PASS', '' );

	$connect = mysql_connect(HOST,USER,PASS,DD) or die("can't connect");
	$query = mysql_query($connect, "SELECT * FROM students WHERE cgpa>3.5") or die("can't execute query");

	echo "<table>";
	echo "<tr><th>Name</th><th>Age</th><th>CGPA</th></tr>";
	while ($rows = mysql_fetch_array($query)) {
		# code...
		extract($rows);
		echo "<tr><td>$name</td></tr>";
		echo "<tr><td>$age</td></tr>";
		echo "<tr><td>$cgpa</td></tr>";

	}
	
?>