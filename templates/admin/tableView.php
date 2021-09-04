<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="styles/tableView.css" />
</head>


<body>
  <form action="" method="post">
    <table class="responsive">
      <thead>
        <tr>
          <th scope="col">Operation</th>
          <th scope="col">FullName</th>
          <th scope="col">Gender</th>
          <th scope="col">DOB</th>
          <th scope="col">Photo</th>
          <th scope="col">ParentsContact</th>
          <th scope="col">Address</th>
          <th scope="col">Institution</th>
          <th scope="col">AcademicYear</th>
          <th scope="col">Standerd</th>
          <th scope="col">TotalFees</th>
          <th scope="col">AdvanceFees</th>
          <th scope="col">RegNo</th>
          <th scope="col">DOJ</th>
        </tr>
      </thead>
      <tbody>

        <?php
        include('../../libs/db_connect.php');

        $student_details_querey = "SELECT * FROM student_details";
        $run_sd_query = mysqli_query($con, $student_details_querey);
        $nums = mysqli_num_rows($run_sd_query);

        if ($run_sd_query->num_rows > 0) {
          while ($sdt = mysqli_fetch_assoc($run_sd_query)) {
        ?>
            <tr>
              <td data-table-header="Operation"><a href="update_form.php?sid=<?php echo $sdt['id']; ?>">Edit</a></td>
              <td data-table-header="FullName"><?php echo $sdt['FullName'] ?></td>
              <td data-table-header="Gender"><?php echo $sdt['Gender'] ?></td>
              <td data-table-header="DOB"><?php echo $sdt['DOB'] ?></td>
              <td data-table-header="Photo"><img src="../../dataimg/<?php echo $sdt['Photo'] ?>" style="max-width: 100px;" alt="img"></td>
              <td data-table-header="ParentsContact"><?php echo $sdt['ParentsContact'] ?></td>
              <td data-table-header="Address"><?php echo $sdt['Address'] ?></td>
              <td data-table-header="Institution"><?php echo $sdt['Institution'] ?></td>
              <td data-table-header="AcademicYear"><?php echo $sdt['AcademicYear'] ?></td>
              <td data-table-header="Standerd"><?php echo $sdt['Standerd'] ?></td>
              <td data-table-header="TotalFees"><?php echo $sdt['TotalFees'] ?></td>
              <td data-table-header="AdvanceFees"><?php echo $sdt['AdvanceFees'] ?></td>
              <td data-table-header="RegNo"><?php echo $sdt['RegNo'] ?></td>
              <td data-table-header="DOJ"><?php echo $sdt['DOJ'] ?></td>
            </tr>
        <?php
          }
        } else {
          echo "No records found";
        }
        ?>
      </tbody>
    </table>
  </form>
</body>

</html>