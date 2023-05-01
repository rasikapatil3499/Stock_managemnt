<?php
require('connection.php');

if(isset($_GET['srno']) && isset($_POST['editbtn']) ){
    $srno=$_POST['srno'];
    $no = $_POST['no'];
    $date = $_POST['date'];
    $material = $_POST['material'];
    $quantity = $_POST['quantity'];
    $amount = $_POST['amount'];
    $page_no = $_POST['page_no'];
    $supplier = $_POST['supplier'];
  
$sql="UPDATE `recurring` SET
 `srno`='$srno',
 `no`='$no',
 `date`='$date',
 `material`='$material',
 `quantity`='$quantity',
 `amount`='$amount',
 `page_no`='$page_no',
 `supplier`='$supplier'
  WHERE srno=$srno";

$result = mysqli_query($con, $sql);
if ($result) {
  echo "<script>alert('Update data')
  document.location='display.php';
    </script>";

} else {
  die(mysqli_error($db));
}

    
}
else{
    echo "invalid";
}


?>