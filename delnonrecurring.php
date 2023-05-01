<?php

include 'displaynonrecurring.php';

$con = new mysqli('localhost', 'root', '', 'stock');
if ($con->connect_error) {
    die("connection failed" . $con->connect_error);
}
$SrNo= $_GET['SrNo'];
$del = mysqli_query($con,"delete from nonrecurring where SrNo='$SrNo'");

if ($del) {
  mysqli_close($con);

  exit;
} else {
  echo 'error';
}


?>