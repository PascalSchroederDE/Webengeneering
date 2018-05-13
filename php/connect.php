<?php
function connect() {
    $con = mysqli_connect("localhost","webeng_auction","WebEng", 'webeng_auction');
    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    return $con;
}
?>
