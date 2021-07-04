<h1>Item Details</h1>

<?php

$item_id = $_GET["item_id"];

require_once('../db_connect.php');
$connect = mysqli_connect( HOST, USER, PASS, DB )
	or die("Can not connect");

$result = mysqli_query( $connect, "select * from item_list where item_id = '$item_id'")
	or die("Cannot execute querry");

echo "<form method = get action = '../cart/add_cart.php'>";

echo "<table >";

$rows = mysqli_fetch_array($result);
extract($rows);

echo "<tr > <td > Name: </td> <td>$item_name </td> </tr>";
echo "<tr > <td > Price: </td> <td>$price </td> </tr>";
echo "<tr > <td > Available Qty: </td> <td>$quantity </td> </tr>";

echo "<input type = hidden name = item_id value = $item_id>";
echo "<tr > <td > Order Qty: </td> <td> <input type = text name = quantity> </td> </tr>";
echo "<tr > <td > &nbsp; </td> </tr>";

echo "<tr > <td > <input type = submit value = 'Add to Cart'>  </td> </tr>";
echo "<tr > <td > &nbsp; </td> </tr>";

echo "<tr > <td > <a href = '../cart/view_cart.php'>View Cart</a>  </td> </tr>";

echo "</table>";
echo "</form>";

?>
