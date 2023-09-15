<?php
$conn = new mysqli("localhost", "root", "", "vuejs");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    echo "Connection Successfull";
}
?>