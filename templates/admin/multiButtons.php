    <div class="btn-group">
        <button class="btn-group__item btn-group__item" id="button">Add New</button><button class="btn-group__item">Edit</button><button class="btn-group__item">Filter</button><button class="btn-group__item">Delete</button><button class="btn-group__item">More</button>

        <div id="MyClockDisplay" class="clock" onload="showTime()"></div>
    </div>

    <!-- Modal Section Start -->
    <div class="bg-modal">
        <div class="modal-content">
            <div class="close">+</div>
            <!-- For adding new student -->
            <h1>Add New Student</h1>
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

    <script>
        // for clock
        function showTime() {
            var date = new Date();
            var h = date.getHours(); // 0 - 23
            var m = date.getMinutes(); // 0 - 59
            var s = date.getSeconds(); // 0 - 59
            var session = "AM";

            if (h == 0) {
                h = 12;
            }

            if (h > 12) {
                h = h - 12;
                session = "PM";
            }

            h = (h < 10) ? "0" + h : h;
            m = (m < 10) ? "0" + m : m;
            s = (s < 10) ? "0" + s : s;

            var time = h + ":" + m + ":" + s + " " + session;
            document.getElementById("MyClockDisplay").innerText = time;
            document.getElementById("MyClockDisplay").textContent = time;

            setTimeout(showTime, 1000);

        }

        showTime();

        // Modal Section
        document.getElementById('button').addEventListener('click', function() {
            document.querySelector('.bg-modal').style.display = 'flex';
        })

        document.querySelector('.close').addEventListener('click', function() {
            document.querySelector('.bg-modal').style.display = 'none';
        })
    </script>