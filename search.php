<?php if( isset($_POST["search"]) )
{
	include_once('result.php');
	$search = $_POST["search"];
	//make the database connection
	$conn  = db_connect();
	
	//create a query: find books by a title or a part of title 
	$sql_pro  = "SELECT * FROM products ";
	$sql = $sql_pro . " WHERE name like '%$search%' ";
	$result = $conn -> query($sql);
	$conn -> close();
	echo "<h1>Search Results</h1>";
	product($result);
}
?>