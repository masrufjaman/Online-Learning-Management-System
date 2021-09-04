<?php
if (isset($_POST['submit'])) {

    include('../../libs/db_connect.php');

    $id = $_POST['sid'];
    $full_name = $_POST['full_name'];
    $dob = $_POST['dob'];
    $parents_contact = $_POST['parents_contact'];
    $address = $_POST['address'];
    $institution = $_POST['institution'];
    $academic_year = $_POST['academic_year'];
    $standerd = $_POST['standerd'];
    $gender = $_POST['gender'];
    $imageName = $_FILES['simg']['name'];
    $tempName = $_FILES['simg']['tmp_name'];

    move_uploaded_file($tempName, "/xampp/htdocs/brainstormy/dataimg/$imageName");

    $qry = "UPDATE `student_details` SET `FullName` = '$full_name', `Gender` = '$gender', `DOB` = '$dob', `Photo` = '$imageName', `ParentsContact` = '$parents_contact', `Address` = '$address', `Institution` = '$institution', `AcademicYear` = '$academic_year', `Standerd` = '$standerd' WHERE `id` = $id;";

    $run = mysqli_query($con, $qry);

    if ($run == true) {
?>
        <script>
            alert('Data updated Succesfully');
            window.open('update_form.php?sid=<?php echo $id ?>', '_self');
        </script>
<?php
    }
}
