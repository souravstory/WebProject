<h1>Categories</h1>

<?php

require_once('../db_connect.php');
$connect = mysqli_connect( HOST, USER, PASS, DB )
	or die("Can not connect");

$result = mysqli_query( $connect, "select cat_id,cat_name from cat")
	or die("Cannot execute querry");

$count = 0;


echo "<table >";

while($rows = mysqli_fetch_array($result)){
	extract($rows);

	echo "<tr>";

	echo "<td align = 'center'><a href = 'sub_cat.php?cat_id=$cat_id'> $cat_name </a> </td> ";
	echo "</r>";

}

echo "</table>";


?>
