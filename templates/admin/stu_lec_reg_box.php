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
    <input type="hidden" name="sid" value="<?php echo $sid ?>">
    <input type="submit" name="submit" value="Register">
</div>