<?php
if (isset($_POST['submit'])) {

    include('../../libs/db_connect.php');

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $role = 'teacher';
    $id = $_POST['sid'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($con, $sql);
    if (!$result->num_rows > 0) {
        $sql = "INSERT INTO users (username, email, password, role)
					VALUES ('$username', '$email', '$password', '$role')";
        $result = mysqli_query($con, $sql);
        if ($result) {
            echo "<script>alert('Wow! User Registration Completed.')</script>";

            // Insert ID of users table
            $uid = $con->insert_id;

            $sql = "INSERT INTO teacher_details (full_name, tid)
					VALUES ('$username', '$uid')";
            $result = mysqli_query($con, $sql);

            header("Location: ./lecturer.php?sid=$id ?>");
        } else {
            echo "<script>alert('Woops! Something Went Wrong.')</script>";
        }
    } else {
        echo "<script>alert('Woops! Email Already Exists.')</script>";
    }
}
