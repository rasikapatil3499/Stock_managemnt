<?php
if(!isset($_GET['srno'])){
  die('id is not provided');
}

require('connection.php');
$srno=$_GET['srno'];
$sql="SELECT*from `recurring` where srno=$srno";
$result=$con->query($sql);

if($result->num_rows!=1){
  die('srno in not in database');
}
$data=$result->fetch_assoc();


?>
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
        <form class="form" method="post" action="update.php?srno=<?=$srno?>">
        <label for="no">Sr No:</label>
          <input type="number" id="srno" name="srno" value="<?=$data['srno']?>"><br>
     

          <label for="no">Bill No:</label>
          <input type="number" id="no" name="no" value="<?=$data['no']?>"><br>
     

          

      <label for="date">Date:</label>
      <input type="date" id="date" name="date" value="<?=$data['date']?>"><br>

      <label for="material">Material:</label>
      <input type="text" id="material" name="material" value="<?=$data['material']?>"><br>

      <label for="quantity">Quantity:</label>
      <input type="number" id="quantity" name="quantity" value="<?=$data['quantity']?>"><br>

      <label for="amount">Amount:</label>
      <input type="number" id="amount" name="amount" value="<?=$data['amount']?>"><br>

      <label for="page_no">Page No:</label>
      <input type="number" id="page_no" name="page_no" value="<?=$data['page_no']?>"><br>


      <label for="supplier">Supplier:</label>
      <input type="text" id="supplier" name="supplier" value="<?=$data['supplier']?>"><br>
      <br>

      <input type="submit" class="btn  btn-primary" value="Submit" name="editbtn">
      </form>
    </div>

  </div>
  </div>

</body>

</html>



