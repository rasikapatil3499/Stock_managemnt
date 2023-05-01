<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Recurring</title>
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
            <th>SR NO</th>
            <th>Bill No</th>
            <th>Date</th>
            <th>Material</th>
            <th>Quantity</th>
            <th>Amount</th>
            <th>Page No</th>
            <th>Supplier</th>
            <td>Edit</td>
            <td>Delete</td>

        </thead>

        <tbody>
            <?php
            $con = new mysqli('localhost', 'root', '', 'stock');
            if ($con->connect_error) {
                die("connection failed" . $con->connect_error);
            }
            $sql = "SELECT * FROM recurring";
            $result = $con->query($sql);
            if (!$result) {
                die("Invalid Query" . $con->connect_error);
            }
            
            while ($row = $result->fetch_assoc()) {
                echo "
                    <tr>
                        <td>" . $row["srno"] . "</td>
                        <td>" . $row["no"] . "</td>
                        <td>" . $row["date"] . "</td>
                        <td>" . $row["material"] . "</td>
                        <td>" . $row["quantity"] . "</td>
                        <td>" . $row["amount"] . "</td>
                        <td>" . $row["page_no"] . "</td>
                        <td>" . $row["supplier"] . "</td>
                        <td><a href='edit.php?srno=" . $row['srno'] . "' class='btn  btn-success'>Edit</a></td>
                        <td><a href='delete.php?srno=" . $row['srno'] . "' class='btn  btn-danger'>Delete</a></td>
                    </tr>";
            }
           ?>
       </tbody>
    </table>

    
<?php
include "add.php";

?>

<foot class="foot">
<h3>Sign of hod </h3>

<h3>Sign of Principle</h3>
        </foot>
    </body>

</html>