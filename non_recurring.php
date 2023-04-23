<html>

<head>
  <title>Non-Recurring</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

</head>

<body>

  <?php
  include('index.php');
  ?>

  <div class="card" style="width: 50rem;">
    <div class="card-body">


      <h1>Non-Recurring </h1>
      <form method="post" action="non_recurring.php">
        <label for="dor_nr">Date of Receipt:</label>
        <input type="date" id="dor_nr" name="dor_nr"><br>

        <label for="description_nr">Description:</label>
        <input type="text" id="description_nr" name="description_nr"><br>

        <label for="quantity_nr">Quantity:</label>
        <input type="number" id="quantity_nr" name="quantity_nr"><br>


        <label for="amount_nr">Amount:</label>
        <input type="number" id="amount_nr" name="amount_nr"><br>

        <label for="page_no_nr">Page No:</label>
        <input type="number" id="page_no_nr" name="page_no_nr"><br>


        <label for="bill_no_nr">Bill No:</label>
        <input type="number" id="bill_no_nr" name="bill_no_nr"><br>

        <label for="dobr_nr">Date of Bill Receipt:</label>
        <input type="date" id="dobr_nr" name="dobr_nr"><br>

        <label for="supplier_nr">Name of Supplier:</label>
        <input type="text" id="supplier_nr" name="supplier_nr"><br>
        <br>

        <label for="disposes_off_nr">Disposes_off:</label>
        <input type="text" id="disposes_off_nr" name="disposes_off_nr"><br>
        <br>


        <label for="remark_nr">Remark:</label>
        <input type="text" id="remark_nr" name="remark_nr"><br>
        <br>


        <input type="submit" class="btn  btn-primary" value="Submit">
      </form>

    </div>
  </div>
  </div>
</body>

</html>


<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $dor_nr = $_POST['dor_nr'];
  $description_nr = $_POST['description_nr'];
  $quantity_nr = $_POST['quantity_nr'];
  $amount_nr = $_POST['amount_nr'];
  $page_no_nr = $_POST['page_no_nr'];
  $bill_no_nr = $_POST['bill_no_nr'];
  $dobr_nr = $_POST['dobr_nr'];
  $disposes_off_nr = $_POST['disposes_off_nr'];
  $remark_nr = $_POST['remark_nr'];

  $con = new mysqli('localhost', 'root', '', 'stock');
  if ($con) {
    $sql = "insert into `nonrecurring`(dor_nr,description_nr,quantity_nr,amount_nr,page_no_nr,bill_no_nr,dobr_nr,disposes_off_nr,remark_nr)values('$dor_nr','$description_nr','$quantity_nr','$amount_nr','$page_no_nr','$bill_no_nr','$dobr_nr','$disposes_off_nr','$remark_nr')";
    $result = mysqli_query($con, $sql);
    if ($result) {
      echo "<script>alert('data done')</script>";
    } else {
      die(mysqli_error($con));
    }

  } else {
    die(mysqli_error($con));
  }




}
?>