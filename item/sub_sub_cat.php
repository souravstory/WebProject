<h1>Sub-Sub-Categories</h1>

<?php

$sub_cat_id = $_GET["sub_cat_id"];

require_once('../db_connect.php');
$connect = mysqli_connect( HOST, USER, PASS, DB )
	or die("Can not connect");

$result = mysqli_query( $connect, "select sub_sub_cat_id,sub_sub_cat_name from sub_sub_cat where sub_cat_id = '$sub_cat_id'")
	or die("Cannot execute querry");

$count = 0;


echo "<table >";

while($rows = mysqli_fetch_array($result)){
	extract($rows);

	echo "<tr>";
	echo "<td align = 'center'><a href = 'item.php?sub_sub_cat_id=$sub_sub_cat_id'> $sub_sub_cat_name </a> </td> ";
	echo "</tr>";

}

echo "</table>";


?>
