<?php

// Connect to database
include 'connection.php';

$query = "select SUM(amount_nr) as `sumamountnr` from nonrecurring ";

$res = mysqli_query($con, $query);
$data = mysqli_fetch_array($res);

echo "<h3> Total Amount: $data[sumamountnr]</h3> ";

// Close connection
mysqli_close($con);

?>