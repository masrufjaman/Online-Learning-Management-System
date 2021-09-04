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
          <th scope="col">DOJ</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include('./fetch_student.php');

        if ($run_sd_query->num_rows > 0) {
          while ($sdt = mysqli_fetch_assoc($run_sd_query)) {
        ?>
            <tr>
              <td data-table-header="Operation"><a style="padding: 0 10px 0 0;" href="update_form.php?sid=<?php echo $sdt['id']; ?>"><i class="fas fa-edit"></i></a><a href="delete_form.php?sid=<?php echo $sdt['uid']; ?>"><i class="fas fa-trash"></i></a></td>
              <td data-table-header="FullName"><?php echo $sdt['FullName'] ?></td>
              <td data-table-header="Gender"><?php echo $sdt['Gender'] ?></td>
              <td data-table-header="DOB"><?php echo $sdt['DOB'] ?></td>
              <td data-table-header="Photo"><img src="../../dataimg/<?php echo $sdt['Photo'] ?>" style="max-width: 50px;" alt="img"></td>
              <td data-table-header="ParentsContact"><?php echo $sdt['ParentsContact'] ?></td>
              <td data-table-header="Address"><?php echo $sdt['Address'] ?></td>
              <td data-table-header="Institution"><?php echo $sdt['Institution'] ?></td>
              <td data-table-header="AcademicYear"><?php echo $sdt['AcademicYear'] ?></td>
              <td data-table-header="Standerd"><?php echo $sdt['Standerd'] ?></td>
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