<?php
include 'connection.php';
include 'displaynonrecurring.php';

$SrNo = $_GET['SrNo'];
$del = mysqli_query($con, "delete from nonrecurring where SrNo='$SrNo'");

if ($del) {
    mysqli_close($con);
    header("location: displaynonrecurring.php");
    exit;
} else {
    echo 'error';
}

?>