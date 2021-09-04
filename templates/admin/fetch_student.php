<?php
include('../../libs/db_connect.php');

$student_details_querey = "SELECT * FROM student_details";
$run_sd_query = mysqli_query($con, $student_details_querey);
$nums = mysqli_num_rows($run_sd_query);