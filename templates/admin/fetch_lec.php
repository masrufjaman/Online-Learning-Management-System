<?php
include('../../libs/db_connect.php');

$teacher_details_querey = "SELECT * FROM teacher_details";
$run_sd_query = mysqli_query($con, $teacher_details_querey);
$nums = mysqli_num_rows($run_sd_query);
