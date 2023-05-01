<?php
$con = new mysqli( 'localhost', 'root', '', 'stock' );
if ( !$con ) {

    die( mysqli_error( $con ) );
}

?>