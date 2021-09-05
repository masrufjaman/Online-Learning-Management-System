<?php
if (isset($_POST['submit'])) {

    include('../../libs/db_connect.php');

    $id = $_POST['sid'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $payment = $_POST['payment'];
    $status = $_POST['status'];


    $qry = "UPDATE `course` SET `name` = '$name', `description` = '$description', `price` = '$price', `payment` = '$payment', `status` = '$status' WHERE `id` = $id;";

    $run = mysqli_query($con, $qry);

    if ($run == true) {
?>
        <script>
            alert('Data updated Succesfully');
            window.open('update_cou_form.php?sid=<?php echo $id ?>', '_self');
        </script>
<?php
    }
}
