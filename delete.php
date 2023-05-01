<?php
include "connection.php";
include "display.php";

$srno = $_GET['srno'];
$del = mysqli_query($con, "delete from recurring where srno='$srno'");

if ($del) {
  mysqli_close($con);
  /*  header("location: display.php");*/
  exit;
} else {
  echo "error";
}


?>