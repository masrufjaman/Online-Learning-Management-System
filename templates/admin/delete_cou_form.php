<?php
include("../../libs/db_connect.php");

$id = $_REQUEST['sid'];

$qry = "DELETE FROM `course` WHERE `id`='$id';";

$run = mysqli_query($con, $qry);

if ($run == true) {
?>
    <script>
        alert('Course deleted Succesfully');
        window.open('course.php?sid=<?php echo 'c'; ?>', '_self');
    </script>
<?php
}
?>