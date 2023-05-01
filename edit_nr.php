<?php
if(!isset($_GET['SrNo'])){
  die('id is not provided');
}

require('connection.php');
$SrNo=$_GET['SrNo'];
$sql="SELECT*from `nonrecurring` where SrNo=$SrNo";
$result=$con->query($sql);

if($result->num_rows!=1){
  die('SrNo in not in database');
}
$data=$result->fetch_assoc();

?>

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

      <h1>Update Non-Recurring </h1>
      <form method="post" action="update_nr.php?SrNo=<?=$SrNo?>">

        <label for="no">Sr No:</label>
        <input type="number" id="SrNo" name="SrNo" value="<?=$data['SrNo']?>"><br>
     
        <label for="dor_nr">Date of Receipt:</label>
        <input type="date" id="dor_nr" name="dor_nr" value="<?=$data['dor_nr']?>"><br>

        <label for="description_nr">Description:</label>
        <input type="text" id="description_nr" name="description_nr" value="<?=$data['description_nr']?>"><br>

        <label for="quantity_nr">Quantity:</label>
        <input type="number" id="quantity_nr" name="quantity_nr" value="<?=$data['quantity_nr']?>"><br>

        <label for="amount_nr">Amount:</label>
        <input type="number" id="amount_nr" name="amount_nr" value="<?=$data['amount_nr']?>"><br>

        <label for="page_no_nr">Page No:</label>
        <input type="number" id="page_no_nr" name="page_no_nr" value="<?=$data['page_no_nr']?>"><br>

        <label for="bill_no_nr">Bill No:</label>
        <input type="number" id="bill_no_nr" name="bill_no_nr" value="<?=$data['bill_no_nr']?>"><br>

        <label for="dobr_nr">Date of Bill Receipt:</label>
        <input type="date" id="dobr_nr" name="dobr_nr" value="<?=$data['dobr_nr']?>"><br>

        <label for="disposes_off_nr">Disposes_off:</label>
        <input type="text" id="disposes_off_nr" name="disposes_off_nr" value="<?=$data['disposes_off_nr']?>"><br>
        
        <label for="remark_nr">Remark:</label>
        <input type="text" id="remark_nr" name="remark_nr" value="<?=$data['remark_nr']?>"><br>
       
        <input type="submit" class="btn  btn-primary" value="Submit" name="edit_nr_btn">
      </form>

    </div>
  </div>
  </div>
</body>

</html>
