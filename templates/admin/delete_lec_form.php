<?php
include("../../libs/db_connect.php");

$id = $_REQUEST['sid'];

$qry = "DELETE FROM `users` WHERE `id`='$id';";

$run = mysqli_query($con, $qry);

if ($run == true) {
?>
    <script>
        alert('Data deleted Succesfully');
        window.open('lecturer.php', '_self');
    </script>
<?php
}
?>