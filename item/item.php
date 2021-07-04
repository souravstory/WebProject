<h1>Item List</h1>

<?php

$sub_sub_cat_id = $_GET["sub_sub_cat_id"];

require_once('../db_connect.php');
$connect = mysqli_connect( HOST, USER, PASS, DB )
	or die("Can not connect");

$result = mysqli_query( $connect, "select * from item_list where sub_sub_cat_id = '$sub_sub_cat_id'")
	or die("Cannot execute querry");

echo "<table >";

while($rows = mysqli_fetch_array($result)){
	extract($rows);

	echo "<tr>";
	echo "<td align = 'center'><a href = 'item_details.php?item_id=$item_id'> $item_name </a> </td> ";
	echo "</tr>";
}

echo "</table>";

?>
