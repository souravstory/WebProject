<h1>Sub-Categories </h1>

<?php

$cat_id = $_GET["cat_id"];

require_once('../db_connect.php');
$connect = mysqli_connect( HOST, USER, PASS, DB )
	or die("Can not connect");

$result = mysqli_query( $connect, "select sub_cat_id, sub_cat_name from sub_cat where cat_id = '$cat_id'")
	or die("Cannot execute querry");

$str_json = json_encode( $result );
echo $str_json;


echo "<table >";

while($rows = mysqli_fetch_array($result)){
	extract($rows);

	echo "<tr>";

	echo "<td align = 'center'><a href = 'sub_sub_cat.php?sub_cat_id=$sub_cat_id'> $sub_cat_name </a> </td> ";
	echo "</tr>";

}

echo "</table>";


?>
