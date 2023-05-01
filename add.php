<?php

// Connect to database
include 'connection.php';



$query="select SUM(amount) as `sumamount` from recurring ";


$res=mysqli_query($con,$query);
$data =mysqli_fetch_array($res);

echo "<h3> Total Amount: $data[sumamount]</h3> ";

// Close connection
mysqli_close($con);

?>