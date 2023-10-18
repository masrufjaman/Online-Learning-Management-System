                        <div class="user-details">
                            <div class="input-box">
                                <span class="details">Name</span>
                                <input type="text" name="name" placeholder="Enter the name" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Price</span>
                                <input type="price" name="price" placeholder="Enter the price" required>
                            </div>
                            <div class="gender-details">
                                <input type="radio" name="status" value="pending" id="dot-1">
                                <input type="radio" name="status" value="launched" id="dot-2">
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
                        </div>
                        <div class="button">
                            <input type="hidden" name="sid" value="<?php echo $sid ?>">
                            <input type="submit" name="submit" value="Create">
                        </div>