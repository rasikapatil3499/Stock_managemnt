<html>

<head>
  <title>Recurring</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php
  include('index.php');
  ?>

  <div class="card">
    <div class="card-body">
      <div>



        <h1>Recurring </h1>
        <form class="form" method="post" action="recurring.php">
          <label for="no">Sr No:</label>
          <input type="number" id="no" name="no"><br>


          <label for="no">Bill No:</label>
          <input type="number" id="no" name="no"><br>



          <label for="date">Date:</label>
          <input type="date" id="date" name="date"><br>

          <label for="material">Material:</label>
          <input type="text" id="material" name="material"><br>

          <label for="quantity">Quantity:</label>
          <input type="number" id="quantity" name="quantity"><br>

          <label for="amount">Amount:</label>
          <input type="number" id="amount" name="amount"><br>

          <label for="page_no">Page No:</label>
          <input type="number" id="page_no" name="page_no"><br>


          <label for="supplier">Supplier:</label>
          <input type="text" id="supplier" name="supplier"><br>
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
  $no = $_POST['no'];
  $date = $_POST['date'];
  $material = $_POST['material'];
  $quantity = $_POST['quantity'];
  $amount = $_POST['amount'];
  $page_no = $_POST['page_no'];
  $supplier = $_POST['supplier'];





  $con = new mysqli('localhost', 'root', '', 'stock');
  if ($con) {
    $sql = "insert into `recurring`(no,date,material,quantity,amount,page_no,supplier)values('$no','$date','$material','$quantity','$amount','$page_no','$supplier')";

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