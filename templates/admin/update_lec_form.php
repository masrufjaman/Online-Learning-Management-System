<?php
include("header.php");
// TopBar  Start
include("topbar.php");
// TopBar  End
include("noticeScreen.php");
include("multiButtons.php");

include("../../libs/db_connect.php");

$sid = $_GET['sid'];

$sql = "SELECT * FROM `teacher_details` WHERE `id`='$sid'";
$run = mysqli_query($con, $sql);

$data = mysqli_fetch_assoc($run);
?>
<div class="details">
    <div class="modal-content">
        <form action="update_lec_data.php" method="post" enctype="multipart/form-data">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Full Name</span>
                    <input type="text" name="full_name" value="<?php echo $data['full_name'] ?>" required>
                </div>
                <div class="input-box">
                    <span class="details">Date of Birth</span>
                    <input type="date" name="dob" value="<?php echo $data['dob'] ?>" required>
                </div>
                <div class="input-box">
                    <span class="details">Phone No</span>
                    <input type="text" name="parents_contact" value="<?php echo $data['phone_no'] ?>" required>
                </div>
                <div class="input-box">
                    <span class="details">Address</span>
                    <input type="text" name="address" value="<?php echo $data['address'] ?>" required>
                </div>
            </div>
            <div class="gender-details">
                <input type="radio" name="gender" value="Male" id="dot-1">
                <input type="radio" name="gender" value="Female" id="dot-2">
                <input type="radio" name="gender" value="Other" id="dot-3">
                <span class="gender-title">Gender</span>
                <div class="category">
                    <label for="dot-1">
                        <span class="dot one"></span>
                        <span class="gender">Male</span>
                    </label>
                    <label for="dot-2">
                        <span class="dot two"></span>
                        <span class="gender">Female</span>
                    </label>
                    <label for="dot-3">
                        <span class="dot three"></span>
                        <span class="gender">Prefer not to say</span>
                    </label>
                </div>
            </div>
            <div class="uploadImage">
                <span class="imageTitle">Image:</span>
                <input type="file" name="simg">
            </div>
            <div class="button">
                <input type="hidden" name="sid" value="<?php echo $data['id'] ?>">
                <input type="submit" name="submit" value="Update">
            </div>
        </form>
    </div>
</div>