<?php
include("header.php");
// TopBar  Start
include("topbar.php");
// TopBar  End
include("noticeScreen.php");
include("multiButtons.php");

include("../../libs/db_connect.php");

$sid = $_GET['sid'];

$sql = "SELECT * FROM `course` WHERE `id`='$sid'";
$run = mysqli_query($con, $sql);

$data = mysqli_fetch_assoc($run);
?>
<div class="details">
    <div class="modal-content">
        <form action="update_cou_data.php" method="post" >
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Name</span>
                    <input type="text" name="name" value="<?php echo $data['name'] ?>" required>
                </div>
                <div class="input-box">
                    <span class="details">Description</span>
                    <input type="text" name="description" value="<?php echo $data['description'] ?>" required>
                </div>
                <div class="input-box">
                    <span class="details">Price</span>
                    <input type="text" name="price" value="<?php echo $data['price'] ?>" required>
                </div>
                <div class="input-box">
                    <span class="details">Payment</span>
                    <input type="text" name="payment" value="<?php echo $data['payment'] ?>" required>
                </div>
            </div>
            <div class="gender-details">
                <input type="radio" name="status" value="Male" id="dot-1">
                <input type="radio" name="status" value="Female" id="dot-2">
                <span class="gender-title">Status</span>
                <div class="category">
                    <label for="dot-1">
                        <span class="dot one"></span>
                        <span class="gender">Pending</span>
                    </label>
                    <label for="dot-2">
                        <span class="dot two"></span>
                        <span class="gender">Launched</span>
                    </label>
                </div>
            </div>
            <div class="button">
                <input type="hidden" name="sid" value="<?php echo $data['id'] ?>">
                <input type="submit" name="submit" value="Update">
            </div>
        </form>
    </div>
</div>