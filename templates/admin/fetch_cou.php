<?php
include('../../libs/db_connect.php');

$course_details_querey = "SELECT * FROM course";
$run_sd_query = mysqli_query($con, $course_details_querey);
$nums = mysqli_num_rows($run_sd_query);
