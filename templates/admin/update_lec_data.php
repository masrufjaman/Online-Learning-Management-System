<?php
if (isset($_POST['submit'])) {

    include('../../libs/db_connect.php');

    $id = $_POST['sid'];
    $full_name = $_POST['full_name'];
    $dob = $_POST['dob'];
    $phone_no = $_POST['parents_contact'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $imageName = $_FILES['simg']['name'];
    $tempName = $_FILES['simg']['tmp_name'];

    move_uploaded_file($tempName, "/xampp/htdocs/brainstormy/dataimg/$imageName");

    $qry = "UPDATE `teacher_details` SET `full_name` = '$full_name', `gender` = '$gender', `dob` = '$dob', `photo` = '$imageName', `phone_no` = '$phone_no', `address` = '$address' WHERE `id` = $id;";

    $run = mysqli_query($con, $qry);

    if ($run == true) {
?>
        <script>
            alert('Data updated Succesfully');
            window.open('update_lec_form.php?sid=<?php echo $id ?>', '_self');
        </script>
<?php
    }
}
