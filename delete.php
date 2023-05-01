<?php

include "display.php";

$con = new mysqli('localhost', 'root', '', 'stock');
if ($con->connect_error) {
    die("connection failed" . $con->connect_error);
}
$srno= $_GET['srno'];
$del = mysqli_query($con,"delete from recurring where srno='$srno'");

if ($del) {
  mysqli_close($con);

  exit;
} else {
  echo 'error';
}


?>