<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show Non-Recurring</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include('index.php');
    ?>



    <table class="table">

        <thead class="table-dark">

            <th>Date of Receipt</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Amount</th>
            <th>Page No</th>
            <th>Bill No</th>
            <th>Date of Bill Receipt</th>
            <th>Disposses Off </th>
            <th>Remark</th>
        </thead>

        <tbody>
            <?php

            $con = new mysqli('localhost', 'root', '', 'stock');

            if ($con->connect_error) {
                die("connection failed" . $con->connect_error);
            }

            $sql = "SELECT * FROM nonrecurring";

            $result = $con->query($sql);


            if (!$result) {
                die("Invalid Query" . $con->connect_error);


            }

            while ($row = $result->fetch_assoc()) {
                echo "
    <tr>
    <td>" . $row["dor_nr"] . "</td>
    <td>" . $row["description_nr"] . "</td>
    <td>" . $row["quantity_nr"] . "</td>
    <td>" . $row["amount_nr"] . "</td>
    <td>" . $row["page_no_nr"] . "</td>
    <td>" . $row["bill_no_nr"] . "</td>
    <td>" . $row["dobr_nr"] . "</td>
    <td>" . $row["disposes_off_nr"] . "</td>
    <td>" . $row["remark_nr"] . "</td>
    
     <td>
        
    </tr>  
    ";
            }








            ?>


        </tbody>


    </table>


    <br>
    <br>
    <br>
    <div class="sign">

        <h5>Sign of hod</h5>
        <br>
        <br>
        <h5>Sign of Principle</h5>
    </div>
</body>

</html>