<?php

include 'connection.php';

if (isset($_GET['deleteid'])) {
    $no = $_get['deleteid'];


    $sql = "delete from `recurring` where id='.$no.'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location:display.php');

    } else {
        die(mysqli_error($con));

    }

}


?>