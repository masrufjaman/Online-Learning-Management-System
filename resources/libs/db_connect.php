<?php
$con = mysqli_connect("localhost", "root", "", "brainstormy_db");

// Check Connection
if (mysqli_connect_errno()) {
    echo "Failed to connect Database: " . mysqli_connect_error();
}
