<?php
require('connection.php');

if (isset($_GET['SrNo']) && isset($_POST['edit_nr_btn'])) {
  $SrNo = $_POST['SrNo'];
  $dor_nr = $_POST['dor_nr'];
  $description_nr = $_POST['description_nr'];
  $quantity_nr = $_POST['quantity_nr'];
  $amount_nr = $_POST['amount_nr'];
  $page_no_nr = $_POST['page_no_nr'];
  $bill_no_nr = $_POST['bill_no_nr'];

  $dobr_nr = $_POST['dobr_nr'];
  $disposes_off_nr = $_POST['disposes_off_nr'];
  $remark_nr = $_POST['remark_nr'];

    $sql="  UPDATE `nonrecurring` SET
   `SrNo`='$SrNo',
   `dor_nr`='$dor_nr',
   `description_nr`='$description_nr',
   `quantity_nr`='$quantity_nr',
   `amount_nr`='$amount_nr',
   `page_no_nr`='$page_no_nr',
   `bill_no_nr`='$bill_no_nr',
  
   `dobr_nr`='$dobr_nr',
   `disposes_off_nr`='$disposes_off_nr',
   `remark_nr`='$remark_nr'
    WHERE SrNo=$SrNo";

    $result = mysqli_query($con, $sql);
    if ($result) {
      echo "<script>alert('Update data')
    document.location='displaynonrecurring.php';
      </script>";
  
    } else {
      die(mysqli_error($db));
    }
  
    } else {
    echo "invalid";
  }
   
  ?>
 