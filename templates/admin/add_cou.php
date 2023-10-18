<?php
if (isset($_POST['submit'])) {

    include('../../libs/db_connect.php');

    $name = $_POST['name'];
    $price = $_POST['price'];
    $status = $_POST['status'];
    $id = $_POST['sid'];

    $sql = "SELECT * FROM course WHERE name='$name'";
    $result = mysqli_query($con, $sql);
    if (!$result->num_rows > 0) {
        $sql = "INSERT INTO course (name, price, status)
					VALUES ('$name', '$price', '$status')";
        $result = mysqli_query($con, $sql);
        if ($result) {
            echo "<script>alert('Wow! Course Added.')</script>";

            header("Location: ./course.php?sid=$id ?>");
        } else {
            echo "<script>alert('Woops! Something Went Wrong.')</script>";
        }
    } else {
        echo "<script>alert('Woops! Course Already Exists.')</script>";
    }
}
