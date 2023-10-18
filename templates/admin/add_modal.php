<!-- Modal Section Start -->
<div class="bg-modal-add">
    <div class="modal-content">
        <div class="close">+</div>
        <!-- For adding new student -->
        <h1>Add New</h1>
        <?php
        $sid = $_GET['sid'];
        if ($sid == 't') {
        ?>
            <form action="add_lec.php" method="post">
            <?php
            include('./stu_lec_reg_box.php');
        } elseif ($sid == 's') {
            ?>
                <form action="add_stu.php" method="post">
                <?php
                include('./stu_lec_reg_box.php');
            } else {
                ?>
                    <form action="add_cou.php" method="post">
                    <?php
                    include('./cou_reg_box.php');
                }
                    ?>
                    </form>
    </div>
</div>
<!-- Modal Section End -->