<!-- Modal Section Start -->
<div class="bg-modal-add">
    <div class="modal-content">
        <div class="close">+</div>
        <!-- For adding new student -->
        <h1>Add New Student</h1>
        <form action="add_modal.php" method="post">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Username</span>
                    <input type="text" name="username" placeholder="Enter the username" required>
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="email" name="email" placeholder="Enter the email" required>
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" name="password" placeholder="Enter the password" required>
                </div>
            </div>
            <div class="button">
                <input type="submit" name="submit" value="Register">
            </div>
        </form>

        <!-- PHP Code -->
        <?php
        if (isset($_POST['submit'])) {

            include('../../libs/db_connect.php');

            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = md5($_POST['password']);
            $role = 'student';

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

                    $sql = "INSERT INTO student_details (uid)
					VALUES ('$uid')";
                    $result = mysqli_query($con, $sql);

                    header("Location: ./studentsView.php");
                } else {
                    echo "<script>alert('Woops! Something Wrong Went.')</script>";
                }
            } else {
                echo "<script>alert('Woops! Email Already Exists.')</script>";
            }
        }
        ?>
    </div>
</div>
<!-- Modal Section End -->