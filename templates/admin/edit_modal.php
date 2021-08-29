<!-- Modal Section Start -->
<div class="bg-modal-edit">
    <div class="modal-content">
        <div class="close">+</div>
        <!-- For adding new student -->
        <h1>Edit Member</h1>
        <!-- without <enctype="multipart/form-data"> photo doesn't upload -->
        <form action="studentsView.php" method="post" enctype="multipart/form-data">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Full Name</span>
                    <input type="text" name="FullName" placeholder="Enter the name" required>
                </div>
                <div class="input-box">
                    <span class="details">Username</span>
                    <input type="text" name="" placeholder="Enter the username" required>
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="text" name="" placeholder="Enter the email" required>
                </div>
                <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input type="text" name="ParentsContact" placeholder="Enter the number" required>
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="text" name="" placeholder="Enter the password" required>
                </div>
                <div class="input-box">
                    <span class="details">Confirm Password</span>
                    <input type="text" name="" placeholder="Confirm the password" required>
                </div>
            </div>
            <div class="gender-details">
                <input type="radio" name="gender" id="dot-1">
                <input type="radio" name="gender" id="dot-2">
                <input type="radio" name="gender" id="dot-3">
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
                <input type="file" name="simg" required>
            </div>
            <div class="button">
                <input type="submit" name="submit" value="Register">
            </div>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            include('/xampp/htdocs/brainstormy/libs/db_connect.php');

            $FullName = $_POST['FullName'];
            $ParentsContact = $_POST['ParentsContact'];
            $imageName = $_FILES['simg']['name'];
            $tempName = $_FILES['simg']['tmp_name'];

            move_uploaded_file($tempName, "/xampp/htdocs/brainstormy/dataimg/$imageName");

            $qry = "INSERT INTO `student_details`(`FullName`, `ParentsContact`, `Photo`) VALUES ('$FullName', '$ParentsContact', '$imageName')";

            $run = mysqli_query($con, $qry);

            if ($run == true) {
        ?>
                <script>
                    alert('Data inserted Succesfully');
                </script>
        <?php
            }
        }
        ?>
    </div>
</div>
<!-- Modal Section End -->